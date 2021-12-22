<?php

namespace Database\Seeders;

use App\Models\Account;
use Illuminate\Database\Seeder;

class AccountsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Account::factory()->create([
            'email' => 'user@example.com',
        ]);

        Account::factory()
            ->count(5)
            ->create();
    }
}
