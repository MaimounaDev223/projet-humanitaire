<?php

namespace App\Http\Controllers;

use App\Models\Volunteer;
use Illuminate\Http\Request;

class VolunteerController extends Controller
{
    // Fonction pour enregistrer un bénévole dans la base de données
    public function store(Request $request)
    {
        // 1. Validation des données du formulaire
        $request->validate([
            'nom' => 'required|string|max:255',
            'prenom' => 'required|string|max:255',
            'email' => 'required|email|unique:volunteers,email',
            'telephone' => 'required|string',
            'disponibilite' => 'required|string',
            'competences' => 'nullable|string',
        ]);

        // 2. Création du bénévole
        Volunteer::create([
            'nom' => $request->nom,
            'prenom' => $request->prenom,
            'email' => $request->email,
            'telephone' => $request->telephone,
            'disponibilite' => $request->disponibilite,
            'competences' => $request->competences,
        ]);

        // 3. Redirection avec un message de succès
        return redirect()->back()->with('success', 'Merci ! Votre inscription en tant que bénévole pour ADECNA a bien été reçue.');
    }
}