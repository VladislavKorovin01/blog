<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Post;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
 */
class PostFactory extends Factory
{
    protected $model = Post::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title' => $this->faker->words(5,true),
            'description' => $this->faker->text,
            'category_id' => $this->faker->randomDigit(),
            'created_at' => $this->faker->dateTime(),
            'updated_at' => $this->faker->datetime()
        ];
    }
}
