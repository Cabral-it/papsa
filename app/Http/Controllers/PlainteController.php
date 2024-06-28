<?php

namespace App\Http\Controllers;

use App\Models\Plainte;
use Illuminate\Http\Request;

class PlainteController extends Controller
{
    public function index()
    {
        return view('Frontend.pages.plainte');
    }
    public function store(Request $request)
    {

        // dd($request->all());
        // Validation formulaire
        $this->validate($request, [
            // 'localite' => $request->localite,
            // 'commune' => $request->commune,
        ]);

        // creation plainte
        Plainte::create([
            'localite' => $request->localite,
            'commune' => $request->commune,
            'departement' => $request->localite,
            'region' => $request->region,
            'projetconcerne' => $request->projetconcerne,
            'prenom' => $request->prenom,
            'nom' => $request->q9_prenomsamp['last'],
            'sexe' => $request->sexe = 1 ? true : false ,
            'fonction' => $request->q12_saisissezUne, // a revoir
            'identification_id' => $request->identification_id,
            'identification_numero' => $request->identification_numero,
            'entreprise_id' => $request->entreprise_id,
            'entreprise_name' => $request->entreprise_name,
            'entreprise_contact' => $request->entreprise_contact,
            'entreprise_telephone' => $request->entreprise_telephone,
            'entreprise_email' => $request->entreprise_email,
            'reclamation_type' => $request->reclamation_type,
            'reclamation_synthese' => $request->reclamation_synthese,
            'incident_date' => $request->incident_date,
            'incident_decription' => $request->incident_description,
            'incident_happen' => $request->incident_happen,
            'incident_lieu' => $request->incident_lieu,
            'incident_victime' => $request->incident_victime,

            'consequences' => $request->consequences,
            'solutions' => $request->solutions,
            // 'photo' => $request->localite,
            // 'pj' => $request->localite,
            // 'signature' => $request->localite,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
            'altitude' => $request->altitude,
            'precision' => $request->precision,
        ]);

        // Return index with message success
        return redirect()->route('frontend.index')->with(['flash_sucess' => 'Plainte enregistrer avec success']);



    }
}
