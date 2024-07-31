<?php

namespace App\Http\Controllers;

use App\Models\Projet;
use App\Models\Region;
use App\Models\Plainte;
use App\Models\Reclamation;
use Illuminate\Http\Request;


class PlainteController extends Controller
{
    public function index(bool $type)
    {
        // dd($type);
        $projets = Projet::all();
        $regions = Region::all();

        // type 1 pour travailleur
        if ($type) {
            $reclamations = Reclamation::where('type', true)->get();
        }else{
            $reclamations = Reclamation::where('type', false)->get();
        }

        return view('Frontend.pages.plainte', compact(['type', 'projets', 'regions', 'reclamations']));
    }

    public function getDepartement(Request $request, string $id)
    {
        $region = Region::find($id);
        $departements = $region->departements()->get();

        return response()->json($departements);
    }

    public function store(Request $request)
    {
        dd($request->all(), $request->type);
        // Validation formulaire
        $this->validate($request, [
            // '_type' => 'required|boolean',

            'region' => 'required|integer',
            'departement' => 'required|integer',
            'commune' => 'required|string',
            'localite' => 'required|string',

            'prenom' => 'required|string',
            'nom' => 'required|string',
            'sexe' => 'required|integer',
            'fonction' => 'required|string',
            'adresse' => 'required|string',
            'telephone' => 'required|string',

            'reclamation_type' => 'required|integer',
            'reclamation_description' => 'required|string',
            'preuve' => 'required|boolean',
            'pj' => 'file',
            'incident_date' => 'required|date',
            'solutions' => 'required|string',
        ]);

        if ($request->type == true) {
            $this->validate($request, [
                'entreprise' => 'required|boolean',
                'entreprise_name' => 'string',
            ]);
        }else{
            $this->validate($request, [
                'projet' => 'required|integer',
            ]);
        }


        // dd($request->all());

        // creation plainte
        $plainte = [
            'type' => $request->type == 1 ? true : false,

            'region_id' => $request->region,
            'departement_id' => $request->departement,
            'commune' => $request->commune,
            'localite' => $request->localite,

            // Projet_id
            'projet_id' => $request->type ? null : $request->projet,

            'prenom' => $request->prenom,
            'nom' => $request->nom,
            'sexe' => $request->sexe = 1 ? true : false ,
            'fonction' => $request->fonction,
            'adresse' => $request->adresse,
            'telephone' => $request->telephone,

            // Entreprise
            'entreprise' => $request->entreprise ? true : false,
            'entreprise_name' => $request->entreprise ? $request->entreprise_name : false,


            'reclamation_type' => $request->reclamation_type,
            'reclamation_description' => $request->reclamation_description,
            'preuve' => $request->preuve ? true : false,
            'pj' => $request->preuve ? $request->pj : null,
            'incident_date' => $request->incident_date,
            'solutions' => $request->solutions,

        ];

        Plainte::create($plainte);

        // Return index with message success
        return redirect()->route('frontend.index')->with(['flash_sucess' => 'Plainte enregistrer avec success']);
    }
}
