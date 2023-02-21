<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;
use Database\Seeders\DatabaseSeeder;

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
    public function definition()
    {
        $thumbnailArray = [
            'thumbnails/CYADn2O7yuABGll5uwkzpgxJb91s6Ap5G0e4BoXP.jpg',
            'thumbnails/ihdYmvlL5PBvP9PD3tKN6qUZz2zTnRO3uuQBseAV.jpg',
            'thumbnails/IgThd3C8RDTIZHm24Rcj3ICuKM6vHa19D8AbLUbj.jpg',
            'thumbnails/XOr26GvQCzJtyCOgmdclZzyLOkFkHMlA6bu9pK6h.jpg',
            'thumbnails/f6bySkBK5YWukhHujBJxdOdh4I4EKOjwtMT8eA5U.jpg',
            'thumbnails/oLbES5qaVyOITyHSuR1Ssu7MCvMemFKIsXOXLuLt.jpg',
            'thumbnails/YdbtO7eGDZlKDWNSXRL86z1GTK8YsEPZc8UltDsK.jpg',
            'thumbnails/0VwynGYyKdjKFfIFJZVSGaLcd78WkGQgoHexzO6b.jpg',
            'thumbnails/drCo7OAwRQFtstqRY7Ja42Tm1Nq46tCtmWdhgXcz.jpg',
            'thumbnails/w7DSPjylJyW0iqvanGRnfiVjBog0bZ3v0undwnmW.jpg',
            'thumbnails/M1EReL7wsvEyVt3n6k5uQ7WRkvRiQaaz6w5AnMGf.jpg',
        ];

        $excerptArray = [1,2];
        $excerptRandom = (int) Arr::random($excerptArray);
        $bodyArray = [3,4,5,6,7];
        $bodyRandom = (int) Arr::random($bodyArray);

        return [
            'user_id' => fake()->numberBetween(1,100),
            'category_id' => fake()->numberBetween(1,25),
            'title' => fake()->unique()->sentence(),
            'slug' => fake()->unique()->slug(),
            'excerpt' => '<p>' . implode('</p><p>', fake()->paragraphs($excerptRandom)) . '</p>',
            'body' => '<p>' . implode('</p><p>', fake()->paragraphs($bodyRandom)) . '</p>',
            'created_at' => fake()->dateTimeBetween('-5 years', 'now'),
            'updated_at' => fake()->dateTimeBetween('-5 years', 'now'),
            'published_at' => fake()->dateTimeBetween('-5 years', 'now'),
            'thumbnail' => Arr::random($thumbnailArray),
        ];
    }
}
