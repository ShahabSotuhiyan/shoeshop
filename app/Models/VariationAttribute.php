<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class VariationAttribute extends Model
{
    protected $fillable = ['variation_id', 'attribute_value_id'];

    public function variation()
    {
        return $this->belongsTo(ProductVariation::class, 'variation_id');
    }

    public function attributeValue()
    {
        return $this->belongsTo(AttributeValue::class, 'attribute_value_id');
    }
}
