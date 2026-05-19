<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Volunteer extends Model
{
    // On autorise Laravel à remplir ces colonnes depuis notre formulaire
    protected $fillable = [
        'nom',
        'prenom',
        'email',
        'telephone',
        'disponibilite',
        'competences'
    ];
}