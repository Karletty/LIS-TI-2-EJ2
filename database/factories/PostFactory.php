<?php

namespace Database\Factories;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

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
                  'author_id' => User::factory(),
                  'title' => $this->faker->text(maxNbChars: 5),
                  'content' => $this->faker->text(maxNbChars: 50)
            ];
      }
}
