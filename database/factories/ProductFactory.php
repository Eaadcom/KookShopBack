<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{
    protected $model = Product::class;

    public function definition(): array
    {
    	return [
    	    'productId' => $this->faker->uuid,
            'name' => $this->faker->word,
            'previewImage' => 'Image',
            'data' => 'Data',
    	];
    }
}
