<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = Article::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'slug' => $this->faker->slug,
            'title' => $this->faker->sentence(6),
            'description' => $this->faker->realText(100),
            'cover' => 'https://via.placeholder.com/250X160',
            'image' => 'https://via.placeholder.com/500',
            'text' => $this->faker->text(400),
            'views_count' => rand(1, 200),
            'likes_count' => rand(1, 200),
        ];
    }
}
