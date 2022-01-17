<?php

namespace Database\Seeders;

use App\Models\AccountProduct;
use Illuminate\Database\Seeder;

class AccountProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        AccountProduct::factory()
            ->count(3)
            ->create();
    }
}
