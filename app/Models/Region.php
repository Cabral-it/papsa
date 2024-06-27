<?php

namespace App\Models;

use App\Models\Plainte;
use App\Models\Departement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Region extends Model
{
    use HasFactory;

    public $fillable = ['libele'];

    public function departements() {
        return $this->hasMany(Departement::class);
    }

    public function plaintes() {
        return $this->hasMany(Plainte::class);
    }
}
