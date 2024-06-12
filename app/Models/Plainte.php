<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Plainte extends Model
{
    use HasFactory;

    public $fillable = [
        "localite",
        "commune",
        "departement",
        "region",
        "prenom",
        "name",
        "fonction",
        "identification_numero",
        "entreprise_name",
        "entreprise_contact",
        "entreprise_telephone",
        "entreprise_email",
        "reclamation_synthese",
        "incident_date",
        "incident_description",
        "incident_happen",
        "incident_lieu",
        "incident_victime",
        "consequences",
        "solution",
        "latitude",
        "longitude",
        "altitude",
        "precision",
    ];
}
