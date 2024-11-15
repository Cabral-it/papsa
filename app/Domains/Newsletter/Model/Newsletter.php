<?php

namespace App\Domains\Newsletter\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Newsletter extends Model
{
    use HasFactory;

    public $fillable = ['object', 'content'];
}
