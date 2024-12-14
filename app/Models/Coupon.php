<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Coupon extends Model
{
    protected $fillable = ['code', 'amount', 'discount_percent', 'max_use', 'use_count', 'valid_from', 'valid_until', 'min_order_amount', 'status'];

    public function orders()
    {
        return $this->hasMany(Order::class, 'coupon_id');
    }
}
