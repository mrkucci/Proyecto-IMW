<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Product;

class DatabaseSeeder extends Seeder
{
   
    public function run()
    {
        Product::factory(50)->create();     //Creación de 50 registros de prueba para la tabla productos.
    }
} 
