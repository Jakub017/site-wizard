<?php

namespace App\Models;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory, Searchable;

    protected $fillable = [
        'image',
        'title',
        'excerpt',
        'slug',
        'content',
        'status',
        'category',
        'author',
    ];

    public function toSearchableArray() {
        return [
            'title' => $this->title,
            'author' => $this->author,
            'category' => $this->category,
            'status' => $this->status,
        ];
    }
}
