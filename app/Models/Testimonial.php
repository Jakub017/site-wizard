<?php

namespace App\Models;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Testimonial extends Model
{
    use HasFactory, Searchable;

    protected $fillable = [
        'image',
        'content',
        'name',
        'position',
    ];

    public function toSearchableArray()
    {
        return [
            'name' => $this->name,
            'position' => $this->position,
        ];
    }
}
