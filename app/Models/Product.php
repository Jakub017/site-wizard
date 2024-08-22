<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Laravel\Scout\Searchable;

class Product extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'product_name',
        'description',
        'price',
        'sale_price',
        'image',
        'image_alt',
        'gallery',
        'slug',
    ];

    public function toSearchableArray()
    {
        return [
            'product_name' => $this->product_name,
            'description' => $this->description,
            'price' => $this->price,
            'sale_price' => $this->sale_price,
        ];
    }

    public function categories() {
        return $this->belongsToMany(Category::class);   
    }
}
