<?php

namespace App\Domains\Slide\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    use HasFactory;

    public $fillable = ['image', 'description', 'status'];
}
