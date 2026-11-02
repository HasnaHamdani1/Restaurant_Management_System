<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Commandes extends Model
{
    protected $table = 'commandes'; // Le nom de votre table

    protected $fillable = [
        'nom',
        'prenom',
        'telephone',
        'email',
        'adresse',
        'mode_paiement',
        'type_livraison',
        'plats',
        'montant_total',
        'date',
        'time',


    ];
}