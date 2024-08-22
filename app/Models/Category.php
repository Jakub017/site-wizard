<?php

namespace App\Models;

use App\Models\Product;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    public function products() {
        return $this->belongsToMany(Product::class);   
    }
}
