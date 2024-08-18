<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Service extends Model
{
    use HasFactory;
    use Searchable;

    protected $fillable = [
        'service_name',
        'image',
        'service_name',
        'excerpt',
        'content',
        'gallery',
        'price',
        'slug',
    ];

    public function toSearchableArray()
    {
        return [
            'id' => $this->id,
            'service_name' => $this->service_name,
            'excerpt' => $this->excerpt,
            'content' => $this->content,
            'price' => $this->price,
        ];
    }
}
