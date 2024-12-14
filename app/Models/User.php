<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    protected $fillable = ['first_name', 'last_name', 'mobile_number', 'avatar', 'status'];

    public function meta()
    {
        return $this->hasMany(UserMeta::class);
    }

    public function cart()
    {
        return $this->hasOne(Cart::class);
    }

    public function reviews()
    {
        return $this->hasMany(Review::class);
    }

    public function payments()
    {
        return $this->hasMany(Payment::class);
    }
}
