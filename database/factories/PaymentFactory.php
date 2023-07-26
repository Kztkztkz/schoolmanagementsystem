<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class PaymentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $value = [400000, 500000, 4000000];
        $value2 = [100000, 300000, 400000];
        $total = $this->faker->randomElement($value);
        $fee = $this->faker->randomElement($value2);
        $dueAmount= $total-$fee;
        $type = ($dueAmount === 0 ) ? 'paid' : 'unpaid';
        $paymentMethod = ['cash', 'card', 'bank transfer'];
        return [
            'fees' => $fee,
            'due_amount' => $dueAmount,
            'payment_type' => $type,
            'payment_method' => $this->faker->randomElement($paymentMethod),
        ];
    }
}
