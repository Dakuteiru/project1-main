<?php

namespace Database\Factories;

use App\Models\Donate;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Donate>
 */
class DonateFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'cost'=> fake()->randomFloat(2,0,300)
        ];
    }
}
