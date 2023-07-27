<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Student;
use App\Models\Classitem;

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
        $studentIds = Student::pluck('id')->toArray();
        $classitemIds = Classitem::pluck('id')->toArray();
        return [
            'fees' => $fee,
            'due_amount' => $dueAmount,
            'payment_type' => $type,
            'payment_method' => $this->faker->randomElement($paymentMethod),
            'student_id' => $this->faker->randomElement($studentIds),
            'classitem_id' => $this->faker->randomElement($classitemIds),
        ];
    }
}