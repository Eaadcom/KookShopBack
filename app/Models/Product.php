<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        'name', 'previewImage', 'description', 'price'
    ];

    public function ownedBy(){
        return $this->belongsToMany(AccountProduct::class);
    }
}
