<?php

namespace App\Http\Controllers;

use App\Models\Prospect;
use App\Mail\NewProspectToTeam;
use App\Mail\RecapToProspect;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function store(Request $request)
{
    // 1. Validation
    $validated = $request->validate([
        'name' => 'required|string|max:255',
        'email' => 'required|email',
        'phone' => 'required|string|max:20',
        'boat_type' => 'nullable|string',
        'boat_length' => 'nullable|string',
        'services' => 'nullable|array',
        'message' => 'nullable|string',
    ]);

    // 2. Création du prospect
    $prospect = Prospect::create($validated);

    // 3. Envoi des emails
    Mail::to('contact@seafastboat.fr')->send(new NewProspectToTeam($prospect));
    Mail::to('contact@njiezm.fr')->send(new NewProspectToTeam($prospect));
    Mail::to('njiezamon10@gmail.com')->send(new NewProspectToTeam($prospect));
    Mail::to($prospect->email)->send(new RecapToProspect($prospect));

    // 4. RETOUR JSON (pas de redirect !)
    // Le 'success' va déclencher l'affichage du message vert en JS
    return response()->json([
        'success' => true,
        'message' => 'Demande envoyée avec succès ! Notre équipe vous rappelle sous 24h.'
    ], 200);
}
}
