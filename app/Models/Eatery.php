<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Eatery extends Model
{
    protected $fillable = [
        // 'category_id',
        'name',
        'price',
        'image',
        'sku',
        'description'
    ];
}
