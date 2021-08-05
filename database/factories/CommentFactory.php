<?php

namespace Database\Factories;

use App\Models\Comment;
use Illuminate\Database\Eloquent\Factories\Factory;

class CommentFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Comment::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $user_ids = \App\Models\User::pluck('id');
        $post_ids = \App\Models\Post::pluck('id');

        return [
            'post_id' => $post_ids->random(),
            'content' => $this->faker->paragraph(),
            'created_by' => $user_ids->random(),
        ];
    }
}
