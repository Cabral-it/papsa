<?php

namespace App\Models;

use App\Models\Region;
use App\Models\Plainte;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Departement extends Model
{
    use HasFactory;

    public $fillable = ['libele'];

    public function region() {
        return $this->belongsTo(Region::class);
    }

    public function plaintes() {
        return $this->hasMany(Plainte::class);
    }
}
