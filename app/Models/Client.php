<?php

namespace App\Models;

use App\Models\Group;
use Laravel\Scout\Searchable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Casts\Attribute;
use Illuminate\Database\Eloquent\Factories\HasFactory;


class Client extends Model
{
    use HasFactory, Searchable;

    protected $fillable = ['name', 'company', 'nip', 'phone', 'email', 'country'];

    public function toSearchableArray()
    {
        return [
            'name' => $this->name,
            'company' => $this->company,
            'country' => $this->country,
        ];
    }

    public function groups()
    {
        return $this->belongsToMany(Group::class)->withTimestamps();
    }

}
