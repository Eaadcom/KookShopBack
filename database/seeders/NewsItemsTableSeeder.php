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
            'image' => 'kipdag.jpg',
            'content' => 'Ed\'s kookblog is terug! Nu in echte webshop vorm ipv een .png!
            Dit betekent dat elke dag weer kipdag is. Bereid je voor op je toekomst, een toekomst van KIP!'
        ]);
        NewsItem::factory()->create([
            'title' => 'Wij eten Soep!',
            'image' => 'soupimage.jpeg',
            'content' => 'Wij hier bij Ed\'s kookshop houden van soep, van daar dat we heerlijke
             soep recepten toe gaan voegen aan de shop. Twee spannende recepten zijn kippensoep en krabsoep!'
        ]);

    }
}
