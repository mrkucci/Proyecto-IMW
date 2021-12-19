<?php

namespace Database\Factories;

use App\Models\Image;
use Illuminate\Database\Eloquent\Factories\Factory;

class ImageFactory extends Factory
{
    protected $model = Image::class;

    public function definition()
    {

        $fileName = $this->faker->numberBetween(1, 10) . '.jpg';

        return [
            'ruta' => "img/products/{$fileName}"
        ];
    }


    public function user() {

        $fileName = $this->faker->numberBetween(1, 5) . '.jpg';

        return $this->state([
            'ruta' => "img/users/{$fileName}"
        ]);
    }
}
