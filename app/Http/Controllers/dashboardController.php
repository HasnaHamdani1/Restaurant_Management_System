<?php
// DashboardController.php

namespace App\Http\Controllers;

use App\Models\commandes;
use App\Models\Reservations;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index()
    {
        // Récupérer le nombre de commandes
        $nombreCommandes = commandes::count();
        
        // Récupérer toutes les commandes
        $commandes = commandes::all();
        
        // Récupérer le nombre de réservations
        $nombreReservations = Reservations::count();
        
        // Récupérer toutes les réservations
        $reservations = Reservations::all();

        // Transmettre le nombre de commandes, le nombre de réservations, les données des commandes et des réservations à la vue 'dashboard'
        return view('dashboard', compact('nombreCommandes', 'commandes', 'nombreReservations', 'reservations'));
}
}