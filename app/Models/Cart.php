<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = [
        'user_id',
        'Eatery_id',
        'amount',
        'quantity',
        'status',
        'address',
        'order_date',
        'delivery_date',
        'ref'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
    public function product()
    {
        return $this->belongsTo(Eatery::class, 'product_id');
    }
}
