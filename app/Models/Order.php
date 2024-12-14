<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'total_amount', 'coupon_id', 'coupon_amount', 'shipping_cost',
        'shipping_location', 'shipping_phone', 'payment_method', 'payment_status',
        'delivery_time', 'notes', 'actions_date'
    ];

    public function items()
    {
        return $this->hasMany(OrderItem::class);
    }

    public function coupon()
    {
        return $this->belongsTo(Coupon::class, 'coupon_id');
    }

    public function payments()
    {
        return $this->hasOne(Payment::class);
    }
}
