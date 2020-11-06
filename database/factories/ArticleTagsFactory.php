<?php

namespace Database\Factories;

use App\Models\ArticleTags;
use Illuminate\Database\Eloquent\Factories\Factory;

class ArticleTagsFactory extends Factory
{
    /**
     * The name of the factory's corresponding model.
     *
     * @var string
     */
    protected $model = ArticleTags::class;

    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'url' => $this->faker->url,
            'label' => $this->faker->title,
            'article_id' => rand(1, 20),
        ];
    }
}
