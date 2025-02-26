<?php

namespace Database\Factories;

use http\Client\Curl\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        return [
            'title' => fake()->text(15),
            'text'=>fake()->realText(2000),
            'image' => fake()->image(),
            'user_id' => \App\Models\User::query()->value('id'),
        ];
    }
}
