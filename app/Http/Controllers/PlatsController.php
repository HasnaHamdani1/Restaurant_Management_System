<?php

namespace App\Http\Controllers;

use App\Models\plats;
use Illuminate\Http\Request;
use App\Http\Requests\StoreplatsRequest;
use App\Http\Requests\UpdateplatsRequest;
use App\Models\menus;

class PlatsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function moinschers()
    {

        $platsM = \App\Models\plats::orderBy('prix', 'asc')->take(3)->get();
        return view('welcome', compact('platsM'));
       
    }
    public function search(Request $request)
    {
        // Valider les données de la requête
        $request->validate([
            'query' => 'required|string',
        ]);

        // Récupérer la requête de recherche depuis le formulaire
        $query = $request->input('query');

        // Effectuer la recherche des plats basée sur le nom
        $plats = plats::where('nom', 'like', '%' . $query . '%')->get();

        // Retourner les résultats de la recherche à la vue
        return view('plats', compact('plats'));
    }
    public function index()
    {
        $plats = plats::all();
        $menus = menus::all(); // Supposons que vous avez un modèle Menu pour gérer les menus
        return view('plats', compact('plats', 'menus'));
}
   
    
    // Retourner la vue avec les plats les moins chers
 
    public function create()
    {
        
    }
    

   
    public function menusClients()
    {
        $menus = menus::all();
        $plats = $this->loadPlats($menus); // Charger les plats associés à chaque menu
        
        return view('MenusClients', compact('menus', 'plats'));
    }
    
    private function loadPlats($menus)
{
    $plats = [];
    
    foreach ($menus as $menu) {
        // Charger les plats associés à chaque menu
        $plats[$menu->id] = plats::where('menu_id', $menu->id)->get();
    }

    return $plats;
}
// PlatsController.php

public function showPlatsFiltre($menu_id)
{
    $plats = plats::where('menu_id', $menu_id)->get();
    return view('platsfiltre', compact('plats'));
}


    // PlatsController.php

    public function showByMenu($menu_id)
    {
        $plats = plats::where('menu_id', $menu_id)->get();
        $menus = $this->loadMenus();
        return view('plats', compact('plats', 'menus'));
    }
    

    private function loadMenus()
    {
        return menus::all();
    }
    

    /**
     * Show the form for creating a new resource.
     */
    
    /**
     * Store a newly created resource in storage.
     */
    public function storePlat(Request $request)
    {
        // Validation des données envoyées par le formulaire
        $request->validate([
            'nom' => 'required|string',
            'description' => 'required|string',
            'image' => 'required|image',
            'prix' => 'required|numeric',
            'menu_id' => 'required|exists:menuses,id', // Assurez-vous que le menu_id existe dans la table des menus
            // Ajoutez d'autres règles de validation si nécessaire
        ]);
    
        // Récupération des données du formulaire
        $nom = $request->input('nom');
        $description = $request->input('description');
        $prix = $request->input('prix');
        $menu_id = $request->input('menu_id'); // Récupérer la valeur de menu_id
    
        // Génération d'un nom unique pour l'image
        $imageName = time().'.'.$request->file('image')->extension();
    
        // Déplacement de l'image vers le dossier public/images
        $request->file('image')->move(public_path('images'), $imageName);
    
        // Création d'une nouvelle instance de Plat avec les données récupérées
        $plat = new plats();
        $plat->nom = $nom;
        $plat->description = $description;
        $plat->image = $imageName;
        $plat->prix = $prix;
        $plat->menu_id = $menu_id; // Associer le menu_id au plat
        // Assurez-vous que les noms des champs dans le modèle correspondent aux noms des champs dans la base de données
        $plat->save(); // Enregistrez le plat dans la base de données
    
        // Rediriger l'utilisateur après l'ajout du plat
        return back()->with('success', 'Plat ajouté avec succès!');
    }

    /**
     * Display the specified resource.
     */
    public function show(plats $plats)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
  

     public function edit($platId)
     {
        $menus = Menus::all();
         $plat = plats::findOrFail($platId); // Récupérez le plat à modifier
         return view('modifierPlats', compact('plat','menus'));
     }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, plats $plat)
    {
        // Validation des données envoyées par le formulaire
        $request->validate([
            'nom' => 'required|string',
            'description' => 'required|string',
            'prix' => 'required|numeric',
            'menu_id' => 'required|exists:menuses,id',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:2048', // Ajoutez la validation du fichier
            // Ajoutez d'autres règles de validation si nécessaire
        ]);
    
        // Mettre à jour les données du plat
        $plat->nom = $request->input('nom');
        $plat->description = $request->input('description');
        $plat->prix = $request->input('prix');
        $plat->menu_id = $request->input('menu_id');
    
        // Gérer le téléversement de fichier s'il y a un fichier téléversé
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension(); // Obtenez l'extension du fichier d'origine
            $image->move(public_path('images'), $imageName); // Déplacez le fichier téléversé vers le répertoire de stockage
            $plat->image = $imageName; // Enregistrez le nom du fichier dans la base de données
        }
    
        $plat->save();
    
        return redirect()->route('plats');
    }
    


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(plats $plat)
    {
        // Delete the plat
        $plat->delete();

        return back()->with('success', 'Plats supprimé avec succès!');
    
    }
   

    /**
     * Display the specified resource.
     */
   


}