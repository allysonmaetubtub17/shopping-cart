<?php

use App\Customer;
use App\User;
use App\Cart;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $customer = Customer::create([
            'first_name' => 'Allyson Mae',
            'last_name' => 'Tubtub',
            'address' => 'Pasig City' 
        ]);

        $user = new User;
        $user->email = 'allysonmae@example.com';
        $user->password = bcrypt('123456');

        $cart = new Cart;
        $cart->customer()->associate($customer);
        $cart->save();

        $customer->user()->save($user);
    }
}
