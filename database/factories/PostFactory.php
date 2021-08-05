<?php

namespace Database\Factories;

use App\Models\Post;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Arr;

class PostFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Post::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $user_ids = \App\Models\User::pluck('id');
        $categories = array('wealth', 'sport', 'weather', 'entertainment', 'news', 'politic');

        return [
            'title' => implode(' ', $this->faker->words(5)),
            'content' => $this->faker->paragraph(),
            'created_by' => $user_ids->random(),
            'categories' => implode(',', Arr::random($categories, rand(1, 3))),
        ];
    }
}
