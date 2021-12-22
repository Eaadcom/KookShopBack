<?php

namespace Database\Factories;

use App\Models\NewsItem;
use Illuminate\Database\Eloquent\Factories\Factory;

class NewsItemFactory extends Factory
{
    protected $model = NewsItem::class;

    public function definition(): array
    {
    	return [
    	    'title' => $this->faker->unique->word,
            'image' => 'Image',
            'content' => 'lorem ipsum dolor amet'
    	];
    }
}
