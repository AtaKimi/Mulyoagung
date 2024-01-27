<?php

namespace Database\Factories;

use App\Traits\HtmlFactoryHelper;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Village>
 */
class VillageFactory extends Factory
{
    use HtmlFactoryHelper;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'email' => fake()->safeEmail(),
            'address' => fake()->address(),
            'short_profile' => $this->createContent(),
            'phone_number' => fake()->numerify('0############')
        ];
    }
}
