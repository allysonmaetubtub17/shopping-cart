<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $fillable = [
    'first_name', 'last_name', 'address', 'email', 'password',
    ];

    public function user() {
    	return $this->hasOne('App\User');
    }

    public function carts() {
    	return $this->hasMany('App\Cart');
    }
}
