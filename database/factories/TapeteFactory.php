<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tapete>
 */
class TapeteFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'estampa' => $this->faker->regexify('[A-Z]{3}[0-9]{6}'),
            'limpo' => $this->faker->boolean(),
            'novo' => $this->faker->boolean(),
            'voador' => $this->faker->boolean(),
            'magico' => $this->faker->boolean(),
            'tamanho' => $this->faker->randomElement(['pequeno', 'medio', 'grande']),
            'quantidade' => $this->faker->numberBetween(1, 10),
            'observacao' => $this->faker->sentence(),
        ];
    }
}
