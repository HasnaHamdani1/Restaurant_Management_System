<?php

namespace App\Http\Controllers;

use Stripe;


use Illuminate\Http\Request;


class PayementController extends Controller
{
    public function stripe(){
    return view('stripe');
    }
    public function stripePost(Request $request){
        Stripe\Stripe::setApiKey(env('STRIPE_SECRET'));
        Stripe\Charge::create(([
            'amount'=>200*100,
            'currency'=>"mad",
            'source'=>$request->stripeToken,
            'description'=>'test'
        ]));
       

    // Redirection vers la page d'accueil avec le message de succès
    return back()->with('reservation_success', 'Votre réservation a été effectuée avec succès.');
}

}

