<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Student>
 */
class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
    return [
        'stu_name' => $this->faker->userName(),
        'stu_mob' => $this->faker->numberBetween($min = 555555, $max = 6666666),
        'stu_email' => $this->faker->unique()->safeEmail(),
        'stu_status' => rand(1,0),



        ];
    }
}
