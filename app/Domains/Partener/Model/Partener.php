<?php

namespace App\Domains\Partener\Model;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Partener extends Model
{
    use HasFactory, LogsActivity;

    public $fillable = ['libele', 'logo'];

    public function getcreatedAtAttribute($value)
    {
        return Carbon::create($value)->isoFormat('LL');
    }
}
