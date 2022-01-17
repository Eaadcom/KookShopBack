<?php

namespace Database\Factories;

use App\Models\Account;
use Illuminate\Database\Eloquent\Factories\Factory;

class AccountFactory extends Factory
{
    protected $model = Account::class;

    public function definition(): array
    {
    	return [
            'email' => $this->faker->unique()->safeEmail,
            'password' => 'kookshop',
    	];
    }
}
