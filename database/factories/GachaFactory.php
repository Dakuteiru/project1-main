<?php

namespace Database\Factories;

use App\Models\Gacha;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Gacha>
 */
class GachaFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name()
        ];
    }
}
