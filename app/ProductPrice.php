<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProductPrice extends Model
{
    protected $table = 'product_prices';

    protected $fillable = [
    	'description', 'price',
    ];

    public function product() {
    	return $this->belongsTo('App\Product');
    }

    public function carts(){
    	return $this->hasMany('App\Carts', 'cart_items', 'product_id', 'cart_id');
    }

}
