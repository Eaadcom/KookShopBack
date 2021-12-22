<?php

namespace Database\Factories;

use App\Models\Product;
use App\Models\ShopItem;
use Illuminate\Database\Eloquent\Factories\Factory;

class ShopItemFactory extends Factory
{
    protected $model = ShopItem::class;

    public function definition(): array
    {
    	return [
    	    'itemId' => $this->faker->uuid,
            'product' => Product::factory(),
            'price' => $this->faker->numberBetween(1, 20),
    	];
    }
}
