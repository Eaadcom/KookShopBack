<?php

namespace App\Services;

use App\Models\Product;
use Illuminate\Database\Eloquent\Collection;

class ProductService
{

    public function get(): Collection|array
    {
        return Product::all();
    }
}
