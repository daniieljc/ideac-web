<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'code' => $this->faker->uuid(),
            'description' => $this->faker->text(25),
            'stock' => $this->faker->randomNumber(),
            'price' => $this->faker->randomFloat(2, 1, 2)
        ];
    }
}
