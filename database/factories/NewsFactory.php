<?php

namespace Database\Factories;

use App\Models\User;
use App\Traits\HtmlFactoryHelper;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\News>
 */
class NewsFactory extends Factory
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
            'user_id' => $this->getAdmin()->id,
            'title' => fake()->sentence(),
            'subtitle' => fake()->sentence(),
            'content' => $this->createContent(),
        ];
    }

    public function getAdmin(){
        $user = User::role('admin')->get()->random();
        return $user;
    }
}
