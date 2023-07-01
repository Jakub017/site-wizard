<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'title_pl',
        'title_en',
        'body_pl',
        'body_en',
        'excerpt_pl',
        'excerpt_en',
        'photo_alt_pl',
        'photo_alt_en',
        'meta_title_pl',
        'meta_title_en',
        'meta_description_pl',
        'meta_description_en',
        'meta_keywords_pl',
        'meta_keywords_en',
        'photo',
        'slug',
        'author',
    ];
}
