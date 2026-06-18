<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EateryCategory extends Model
{
    protected $fillable = [
        'name',
        'slug',
    ];

    public function eateries()
    {
        return $this->hasMany(Eatery::class, 'category_id');
    }
}
