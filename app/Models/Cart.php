<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Cart extends Model
{
    protected $fillable = ['user_id', 'total_quantity', 'total_regular_price', 'total_price', 'shipping_cost', 'final_price', 'coupon_code', 'coupon_amount'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function items()
    {
        return $this->hasMany(CartItem::class);
    }
}
