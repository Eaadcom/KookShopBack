<?php

namespace Database\Factories;

use App\Models\Account;
use App\Models\AccountProduct;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

class AccountProductFactory extends Factory
{
    protected $model = AccountProduct::class;

    public function definition(): array
    {
        return [
            'accountId' => Account::factory(),
            'productId' => Product::factory(),
        ];
    }
}
