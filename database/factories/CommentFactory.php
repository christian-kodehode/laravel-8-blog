<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Comment>
 */
class CommentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        $commentsArray = [1,2,3];
        $commentsRandom = (int) Arr::random($commentsArray);

        return [
            'user_id' => fake()->numberBetween(1,100),
            'post_id' => fake()->numberBetween(1,500),
            'created_at' => fake()->dateTimeBetween('-5 years', 'now'),
            'body' => '<p class="mb-4">' . implode('</p><p class="mb-4">', fake()->paragraphs($commentsRandom)) . '</p>',
        ];
    }
}
