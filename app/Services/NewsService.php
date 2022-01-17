<?php

namespace App\Services;

use App\Models\NewsItem;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Storage;

class NewsService
{

    public function get(): Collection|array
    {
        return NewsItem::all();
    }
}
