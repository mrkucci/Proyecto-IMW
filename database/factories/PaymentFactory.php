<?php

namespace Database\Factories;

use App\Models\Payment;
use Illuminate\Database\Eloquent\Factories\Factory;

class PaymentFactory extends Factory
{
    protected $model = Payment::class;

    public function definition()
    {
        return [
            'total' => $this->faker->randomFloat($maxDecimals = 2, $min = 15, $max = 600),
            'f_pago' => $this->faker->dateTimeBetween($startDate = '-1 year', $endDate = 'now', $timezone = null),
        ];
    }
}
