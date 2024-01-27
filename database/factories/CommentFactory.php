<?php

namespace Database\Factories;

use App\Models\User;
use App\Traits\HtmlFactoryHelper;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
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
            'user_id' => User::get()->random(),
            'content' => $this->createContent(),
        ];
    }
}
