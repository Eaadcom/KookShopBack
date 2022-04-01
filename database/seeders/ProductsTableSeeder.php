<?php

namespace Database\Seeders;

use App\Models\Product;
use Illuminate\Database\Seeder;

class ProductsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $this->createPredefinedProducts();

    }

    private function createPredefinedProducts(){

        Product::factory()->create([
            'name' => 'Kip Gehaktballen',
            'previewImage' => 'kipgehaktballetjes.jpg',
            'description' => 'Net oliebollen maar dan gemaakt van kip.',
            'price' => '20',
        ]);

        Product::factory()->create([
            'name' => 'Chili con Carne',
            'previewImage' => 'chiliconcarnekip.jpg',
            'description' => 'Inclusief kip.',
            'price' => '7',
        ]);

        Product::factory()->create([
            'name' => 'Kip smoothie',
            'previewImage' => 'kipsmoothie.jpg',
            'description' => 'Koude kippensoep',
            'price' => '3',
        ]);

        Product::factory()->create([
            'name' => 'Krabsoep',
            'previewImage' => 'krabsoep.jpg',
            'description' => 'De kip van de zee.',
            'price' => '30',
        ]);

        Product::factory()->create([
            'name' => 'Pannenkoeken met Kip',
            'previewImage' => 'pannenkoekenmetkip.jpg',
            'description' => 'De beste manier om pannenkoeken te eten!',
            'price' => '17',
        ]);

        Product::factory()->create([
            'name' => 'Kip Spaghetti Bolognese',
            'previewImage' => 'kipspaghetti.jpg',
            'description' => 'Een saai recept weer spannend gemaakt met Kip!',
            'price' => '11',
        ]);

        Product::factory()->create([
            'name' => 'Hele Kip',
            'previewImage' => 'helekip.jpeg',
            'description' => 'Het is kipdag voor zeker 3 dagen met deze jongen.',
            'price' => '20',
        ]);

        Product::factory()->create([
            'name' => 'Kippensoep',
            'previewImage' => 'kippensoep.jpg',
            'description' => 'Voor wanneer je je kip wil drinken.',
            'price' => '7',
        ]);

        Product::factory()->create([
            'name' => 'Kip drumsticks uit de oven',
            'previewImage' => 'kipdrumsticks.jpg',
            'description' => 'Een hand vol.',
            'price' => '15',
        ]);

        Product::factory()->create([
            'name' => 'Kiprecept Verassingspakket',
            'previewImage' => 'verrassing.jpg',
            'description' => 'Ontvang een geheim Recept',
            'price' => '100',
        ]);
    }
}
