<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',
        'photo',
        'photo_alt',
        'meta_title',
        'meta_description',
        'meta_keywords',
        'excerpt',
        'body',
    ];
}
