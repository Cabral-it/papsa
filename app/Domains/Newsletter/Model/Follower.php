<?php

namespace App\Domains\Newsletter\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Follower extends Model
{
    use HasFactory;

    public $fillable = ['email', 'activate'];

    public $casts = ['activate' => 'boolean'];
}
