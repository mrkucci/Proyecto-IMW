<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition()
    {
        return [
            'titulo' => $this->faker->sentence(3),
            'descripcion' => $this->faker->paragraph(1),
            'precio' => $this->faker->randomFloat($maxDecimals = 2, $min = 3, $max = 100),  //El maximo de decimales son 2, el minimo 2 y el max es 100.
            'stock' => $this->faker->numberBetween(1,10),
            'status' => $this->faker->randomElement(['Disponible', 'No disponible']),
        ];
    }
}
