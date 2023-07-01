<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Testimonial extends Model
{
    use HasFactory;

    protected $fillable = [
        'body_pl',
        'body_en',
        'author_pl',
        'author_en',
        'company_pl',
        'company_en',
        'photo',
    ];
}
