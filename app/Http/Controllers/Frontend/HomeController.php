<?php

namespace App\Http\Controllers\Frontend;

use App\Models\Entreprise;
use App\Models\Reclamation;
use App\Models\Identification;

/**
 * Class HomeController.
 */
class HomeController
{
    /**
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View
     */
    public function index()
    {
        $identifications = Identification::all();
        $entreprises = Entreprise::all();
        $reclammations = Reclamation::all();
        // dd($reclammations);

        return view('frontend.index', compact('identifications', 'entreprises', 'reclammations'));
    }
}
