<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class CartItems extends Model
{
	protected $table = 'cart_items';

    protected $fillable = [
    	'cart_id', 'product_id', 'quantity', 'amount', 'barcode', 'serial_number'
    ];

}
