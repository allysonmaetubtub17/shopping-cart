<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
    	'name', 'description', 'category_id', 'barcode'
    ];

    public function prices() {
    	return $this->hasMany('App\ProductPrice');
    }
}
