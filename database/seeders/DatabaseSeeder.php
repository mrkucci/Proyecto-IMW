<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;
use App\Models\Order;
use App\Models\User;
use App\Models\Payment;
use App\Models\Image;
use App\Models\Cart;

class DatabaseSeeder extends Seeder
{
   
    public function run()
    {

        $users = User::factory(20)     //Creación de 20 registros de prueba para la tabla usuarios.
            ->create()
            ->each(function($user){
                $image = Image::factory()
                    ->user()
                    ->make();
                $user->image()->save($image);
            });

        $orders = Order::factory(10)        //Creación de 10 registros de prueba para la tabla pedidos.
            ->make()
            ->each(function($order) use ($users){
                $order->id_cliente = $users->random()->id;
                $order->save();

                $payment = Payment::factory()->make();

                $order->payment()->save($payment);
            });


        $carts = Cart::factory(20)->create();   //Creación de 20 registros de prueba para la tabla carritos.


        $products = Product::factory(50)     //Creación de 50 registros de prueba para la tabla productos.
            ->create()
            ->each(function ($product) use($orders, $carts){

                $order = $orders->random();
                $order->products()->attach([
                    $product->id => ['cantidad' => mt_rand(1, 3)]
                ]);


                $cart = $carts->random();
                $cart->products()->attach([
                    $product->id => ['cantidad' => mt_rand(1, 3)]
                ]);

                $images = Image::factory(mt_rand(2, 4))->make();

                $product->images()->saveMany($images);
            });
    }
} 
