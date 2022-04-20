<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class OrderMidtransFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'user_id' => 1,
            'penjadwalan_id' => 1,
            'purchase_date' => '16-04-2022',
            'number' => $this->faker->randomNumber(8),
            'total_price' => $this->faker->numberBetween(25000, 200000),
            'payment_status' => 1,
        ];
    }
}
