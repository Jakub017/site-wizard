<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Category extends Model
{
    use HasFactory;
    use Searchable;

     protected $fillable = [
        'category_name',
        'description',
        'color',
        'slug',
    ];

    public function toSearchableArray()
    {
        return [
            'category_name' => $this->category_name,
            'description' => $this->description,
        ];
    }
}
