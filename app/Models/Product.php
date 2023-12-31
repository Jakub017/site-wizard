<?php

namespace App\Models;

use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Product extends Model
{
    use HasFactory, Searchable;

    protected $fillable = [
        'name',
        'main_image',
        'images',
        'categories',
        'status',
        'sku',
        'slug',
        'excerpt',
        'price',
        'content',
    ];

    public function categories() {
        return $this->belongsToMany(Category::class);
    }

    public function toSearchableArray()
    {
        return [
            'name' => $this->name,
            'status' => $this->status,
            'sku' => $this->sku,
            'slug' => $this->slug,
            'price' => $this->price,
        ];
    }
}
