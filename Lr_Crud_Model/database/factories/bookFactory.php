<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Nette\Utils\Random;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\book>
 */
class bookFactory extends Factory
{

    public function definition()
    {
        return [
        'book_name' => $this->faker->userName(),
        'book_author' => $this->faker->userName(),
        'book_genre' => $this->faker->userName(),
        'book_publisher' => $this->faker->userName(),
        'book_price' => $this->faker->numberBetween($min = 100, $max = 900),
        'book_status' => rand(1,0),
        ];
    }
}
