<?php

namespace App\Domains\Article\Model;

use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;
use Spatie\Activitylog\Traits\LogsActivity;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Article extends Model
{
    use HasFactory, LogsActivity;

    public $fillable = ['image', 'title', 'content', 'publish'];

    public function getPublishAttribute($value)
    {
        return $value ? true : false;
    }

    public function getcreatedAtAttribute($value)
    {
        return Carbon::create($value)->isoFormat('LL');
    }
}
