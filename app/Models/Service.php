<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Service extends Model
{
    use HasFactory, Searchable;

    protected $fillable = [
        'title',
        'slug',
        'excerpt',
        'content',
        'image',
        'price',
    ];

    public function toSearchableArray() {
        return [
            'title' => $this->title,
            'price' => $this->price,
        ];
    }
}
