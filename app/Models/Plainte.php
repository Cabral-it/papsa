<?php

namespace App\Models;

use App\Models\Projet;
use App\Models\Region;
use App\Models\Departement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Plainte extends Model
{
    use HasFactory;

    public $fillable = [
        'type', 'region_id', 'departement_id', 'commune', 'localite', 'projet_id', 'prenom', 'nom',
        'sexe', 'fonction', 'adresse', 'telephone', 'entreprise', 'entreprise_name',
        'reclamation_type', 'reclamation_description', 'preuve', 'pj',
        'incident_date', 'solutions'
    ];

    public function projet() {
        return $this->belongsTo(Projet::class);
    }

    public function departement() {
        return $this->bolongsTo(Departement::class);
    }

    public function region() {
        return $this->belongsTo(Region::class);
    }
}
