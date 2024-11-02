<?php

namespace App\Domains\Mediatheque\Model;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;

    public $table = 'medias';

    public const TYPE_DOCUMENT = 'Document';
    public const TYPE_IMAGE = 'Image';
    public const TYPE_VIDEO = 'Video'   ;

    public $fillable = ['type', 'title', 'file', 'publish'];

    public $casts = [
        'publish' => 'boolean'
    ];
}
