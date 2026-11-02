<?php

namespace App\Http\Controllers;

use App\Models\commandes;
use App\Models\Reservations;
use Illuminate\Http\Request;
use App\Http\Requests\StoreReservationsRequest;
use App\Http\Requests\UpdateReservationsRequest;

class ReservationsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       
        $nombreCommandes = commandes::count();
        
        // Récupérer toutes les commandes
        $commandes = commandes::all();
        $nombreReservation = Reservations::count();
        $reservations = Reservations::all();
        return view('reservationadmin', compact('nombreCommandes', 'commandes','nombreReservation', 'reservations'));

      
    }
    public function create()
    {
        return view('reservation');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'required|string',
            'prenom' => 'required|string',
            'telephone' => 'required|string',
            'email' => 'required|email',
            'datereservation' => 'required|date',
            'heurereservation' => 'required|string',
            'adresse' => 'required|string',
            'nombrepersonnes' => 'required|integer',
            
        ]);

        Reservations::create($validatedData);

        return redirect()->route('stripe')->with('success', 'Réservation créée avec succès !');
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
        $reservations = Reservations::where('nom', 'like', '%' . $query . '%')
            ->orWhere('prenom', 'like', '%' . $query . '%')
            ->orWhere('telephone', 'like', '%' . $query . '%')
            ->get();
    
        // Retourner les résultats de la recherche à la vue
        return view('reservationadmin', compact('reservations'));
    }
    
    
    public function viderReservations()
    {
        // Supprimer toutes les commandes de la base de données
        reservations::truncate();
    
        // Redirection avec un message de succès ou autre
        return redirect()->back()->with('success', 'Toutes les commandes ont été supprimées avec succès!');
    }
    


  
    
  

    // Méthode pour soumettre le formulaire de paiement
   
    /**
     * Display the specified resource.
     */
    public function showDetails($id)
    {
        // Utiliser l'identifiant pour récupérer la réservation à partir de la base de données
        $reservation = Reservations::find($id);

        // Vérifier si la réservation a été trouvée
        if ($reservation) {
            // Retourner la vue avec les détails de la réservation
            return view('reservationdetaille', compact('reservation'));
        } else {
            // Si la réservation n'est pas trouvée, retourner une réponse d'erreur 404
            abort(404);
        }
    }
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Reservations $reservations)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateReservationsRequest $request, Reservations $reservations)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Trouver la réservation correspondant à l'ID et la supprimer
        $reservation = reservations::findOrFail($id);
        $reservation->delete();
        
        // Redirection avec un message de succès ou autre
        return redirect()->back()->with('success', 'Réservation supprimée avec succès!');
    }
    public function showReservationForm()
    {
        return view('reservation.formulaire');
}
}
