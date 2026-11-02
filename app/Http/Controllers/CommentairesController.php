<?php

namespace App\Http\Controllers;

use Illuminate\View\View;
use App\Models\Commentaires;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCommentairesRequest;
use App\Http\Requests\UpdateCommentairesRequest;

class CommentairesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $Commentaires = Commentaires::all();
          return view('Contactadmin', ['Commentaires' => $Commentaires]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('Commentaires');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'nom' => 'required|string',
            'email' => 'required|email',
            'message' => 'required|string',
            
        ]);
        Commentaires::create($validatedData);

        return redirect()->route('Commentaires.create')->with('success', 'Votre message a été envoyé avec succès !');
    }
    /**
     * Display the specified resource.
     */
    public function show(Commentaires $commentaires)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Commentaires $commentaires)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCommentairesRequest $request, Commentaires $commentaires)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        // Trouver la réservation correspondant à l'ID et la supprimer
        $Commentaires = Commentaires::findOrFail($id);
        $Commentaires->delete();
        
        // Redirection avec un message de succès ou autre
        return redirect()->back()->with('success', 'Message supprimée avec succès!');
    }
    public function vidercontacts()
{
    // Supprimer toutes les commandes de la base de données
    Commentaires::truncate();

    // Redirection avec un message de succès ou autre
    return redirect()->back()->with('success', 'Toutes les messsages ont été supprimées avec succès!');
}
public function notification ()
{
   
    View::composer(['dashboard', 'menus','plats','Contactadmin','reservationadmin','reservationdetaille','commandeadmin'], function ($view) {
        $messageNonlu =Commentaires::where('status', 'unread')->count();
        dd($messageNonlu);
        $view->with('messageNonlu', $messageNonlu);
    });
}
public function mettrelu($id)
{
    $message = Commentaires::find($id);
    if ($message) {
        $message->mettrelu();
    }
    return redirect()->back();
}

public function afficherMessages($id) {
    $message = Commentaires::find($id);

    if ($message->status === 'unread') {
        $message->status = 'read';
        $message->save();
    }

    return view('Contactadmin', compact('message'));
}
public function markAsReadAndUpdateCount(Request $request)
{
    $id = $request->id;
    $message = Commentaires::find($id);

    if ($message && $message->status === 'unread') {
        $message->status = 'read';
        $message->save();
    }

    $unreadCount = Commentaires::where('status', 'unread')->count();

    return response()->json(['success' => true, 'unreadCount' => $unreadCount]);
}


}