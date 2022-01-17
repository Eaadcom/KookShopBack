<?php

namespace Database\Seeders;

use App\Models\NewsItem;
use Illuminate\Database\Seeder;

class NewsItemsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        NewsItem::factory()->create([
            'title' => 'Kipdag Returns',
            'image' => 'kipdag.jpeg',
        ]);
        NewsItem::factory()->create([
            'title' => 'Ik hou van Soep',
            'image' => 'soupimage.jpeg',
        ]);

//        NewsItem::factory()
//            ->count(2)
//            ->create();
    }
}
