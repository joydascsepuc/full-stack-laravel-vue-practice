<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Foundation\Testing\faker;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    protected $model = Article::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'title' => $this->faker->text(50),
            'body'  => $this->faker->text(200)
        ];
    }
}
