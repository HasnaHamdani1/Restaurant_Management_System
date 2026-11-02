<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservations extends Model
{
    use HasFactory;

    protected $fillable = [
        'nom',
        'prenom',
        'telephone',
        'email',
        'datereservation',
        'heurereservation',
        'adresse',
        'nombrepersonnes',
        'Nomsurcarte',
        'Numerocartecredit',
        'ville',
        'datexpiration',
    ];
}