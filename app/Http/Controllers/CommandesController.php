<?php

namespace App\Http\Controllers;
use App\Models\commandes;
use App\Models\Reservations;

use Illuminate\Http\Request;
use App\Http\Requests\StorecommandesRequest;
use App\Http\Requests\UpdatecommandesRequest;

class CommandesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Récupérer le nombre de commandes
        $nombreCommandes = commandes::count();
        
        // Récupérer toutes les commandes
        $commandes = commandes::all();
        $nombreReservations = Reservations::count();
        $reservations = Reservations::all();
        
        // Transmettre le nombre de commandes et les données des commandes à la vue 'dashboard'
        return view('commandeadmin', compact('nombreCommandes', 'commandes','nombreReservations', 'reservations'));
       
    }
    
    
    

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
     
        $Commandes = Commandes::all();
          return view('commandeadmin', ['Commandes' => $Commandes]);
    }
    public function store(Request $request)
    {
        // Valider les données du formulaire
        $validatedData = $request->validate([
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'telephone' => 'required|string',
            'email' => 'required|email',
            'adresse' => 'required|string',
            'type_livraison' => 'required|string',
            'montant_total' => 'required|numeric',
            'plats' => 'required|string',
        ]);
    
        // Créer une nouvelle commande avec les données validées
        $commande = new commandes();
        $commande->nom = $validatedData['nom'];
        $commande->prenom = $validatedData['prenom'];
        $commande->telephone = $validatedData['telephone'];
        $commande->email = $validatedData['email'];
        $commande->adresse = $validatedData['adresse'];
        $commande->type_livraison = $validatedData['type_livraison'];
        $commande->montant_total = $validatedData['montant_total'];
        $commande->plats = $validatedData['plats'];
        
        // Assigner la date actuelle à la colonne "date"
        $commande->date = now(); // Utilisation de la fonction now() pour obtenir la date actuelle
        $commande->time = now(); // Utilisation de la fonction now() pour obtenir la date actuelle
        
        // Sauvegarder la commande dans la base de données
        $commande->save();
    
        // Redirection avec un message de succès ou autre
        return redirect()->back()->with('success', 'Commande enregistrée avec succès!');
    }
    
    
    
    
    public function showDetail($id)
    {
        $commande = commandes::findOrFail($id); // Utilisez Commandes au lieu de Commande
        return view('commandedetaille', ['commande' => $commande]);
    }

    /**
     * Display the specified resource.
     */
    public function showForm()
    {
        return view('Formulaire_ConfirmationC');
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(commandes $commandes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatecommandesRequest $request, commandes $commandes)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Trouver la commande correspondant à l'ID et la supprimer
        $commande = commandes::findOrFail($id);
        $commande->delete();
        
        // Redirection avec un message de succès ou autre
        return redirect()->back()->with('success', 'Commande supprimée avec succès!');
    }

public function search(Request $request)
     {
        // Valider les données de la requête
    $request->validate([
        'query' => 'required|string',
    ]);

    // Récupérer la requête de recherche depuis le formulaire
    $query = $request->input('query');

    // Effectuer la recherche des réservations basée sur le nom, prénom ou numéro de téléphone
    $commandes= commandes::where('nom', 'like', '%' . $query . '%')
        ->orWhere('prenom', 'like', '%' . $query . '%')
        // ->orWhere('date', 'like', '%' . $query . '%')
        ->get();

         // Transmettre le nombre de commandes et les données des commandes à la vue 'dashboard'
         return view('commandeadmin', compact( 'commandes'));
     }


     public function viderCommandes()
{
    // Supprimer toutes les commandes de la base de données
    commandes::truncate();

    // Redirection avec un message de succès ou autre
    return redirect()->back()->with('success', 'Toutes les commandes ont été supprimées avec succès!');
}

}
