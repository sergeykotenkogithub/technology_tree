<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Technology extends Model
{
    use HasFactory;
    protected $table = 'technology';

    public function getRouteKeyName()
    {
        return 'name';
    }

    public function video() : HasMany
    {
        return $this->hasMany(Video::class, 'technology_id', 'id');
    }

    public function books() : HasMany
    {
        return $this->hasMany(Book::class, 'technology_id', 'id');
    }

    public function crib() : HasMany
    {
        return $this->hasMany(Crib::class, 'technology_id', 'id');
    }

    public function materials() : HasMany
    {
        return $this->hasMany(Material::class, 'technology_id', 'id');
    }
}
