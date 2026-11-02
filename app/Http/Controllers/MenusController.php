<?php

namespace App\Http\Controllers;

use App\Models\plats;
use Illuminate\Http\Request;
use App\Http\Requests\StoreMenusRequest;
use App\Http\Requests\UpdateMenusRequest;
use App\Models\menus; // Correction de la casse de l'importation du modèle Menus

class MenusController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $menus = menus::all(); // Correction de la casse de Menus
        return view('menus', compact('menus'));
    }
    public function menusClients()
    {
        $menus = menus::all();
        return view('MenusClients', compact('menus'));
    }

    
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validation des données envoyées par le formulaire
        $request->validate([
            'menuName' => 'required|string',
            'menuImage' => 'required|image',
        ]);
    
        // Récupération des données du formulaire
        $nom = $request->input('menuName');
    
        // Génération d'un nom unique pour l'image
        $photosname = time().'.'.$request->file('menuImage')->extension();
    
        // Déplacement de l'image vers le dossier public/images
        $request->file('menuImage')->move(public_path('images'), $photosname);
        
        // Création d'une nouvelle instance de menu avec les données récupérées
        $menu = new Menus(); // Correction de la casse de Menus
        $menu->nom = $nom;
        $menu->image = $photosname;
        $menu->save();
    
        // Rediriger l'utilisateur après l'ajout du menu
        return back()->with('success', 'Menu ajouté avec succès!');
    }

    /**
     * Display the specified resource.
     */
    public function show(Menus $menus)
    {
        $menus = menus::all();
        return view('MenusClients', compact('menus'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $menu = Menus::findOrFail($id); // Correction de la casse de Menus
        return view('ModifierMenus', ['menu' => $menu]);
    }
     
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $menu = Menus::findOrFail($id); // Correction de la casse de Menus

        $request->validate([
            'menuName' => 'required|string',
            'menuImage' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Exemple de validation pour une image
        ]);

        // Vérifiez d'abord si une image est téléchargée
        if ($request->hasFile('menuImage')) {
            // Téléchargez et stockez l'image
            $image = $request->file('menuImage');
            $imageName = time() . '.' . $image->getClientOriginalExtension();
            $image->move(public_path('images'), $imageName);
            // Mettez à jour le champ image avec le nom de l'image téléchargée
            $menu->image = $imageName;
        }

        // Mettez à jour le nom du menu
        $menu->nom = $request->input('menuName');

        // Enregistrez les modifications
        $menu->save();

        return redirect()->route('menus');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Menus $menu)
    {
        $menu->delete();
        return back()->with('success', 'Menu supprimé avec succès!');
    }

    public function search(Request $request)
    {
        $query = $request->input('query');
        // Logique de recherche selon vos besoins
        $menus = Menus::where('nom', 'like', '%' . $query . '%')->get();
        return view('menus', compact('menus'));
    }


    public function showForm() {
        return view('Formulaire_confirmationC');
    }
   
   

}