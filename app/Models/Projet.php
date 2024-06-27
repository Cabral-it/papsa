<?php

namespace App\Models;

use App\Models\Plainte;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Projet extends Model
{
    use HasFactory;

    public $fillable = ['libele'];

    public function plaintes() {
        return $this->hasMany(Plainte::class);
    }
}
