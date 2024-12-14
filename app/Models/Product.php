<?php

namespace App\Models;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
   protected  $fillable = ['title', 'description', 'price', 'thumbnail', 'category'];

   public function category(){
       return $this->belongsTo(Category::class, 'category_id');
   }

   public function variants(){
       return $this->hasMany(ProductVariation::class);
   }

   public function reviews(){
       return $this->hasMany(Review::class);
   }
}
