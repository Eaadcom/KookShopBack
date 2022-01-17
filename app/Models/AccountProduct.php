<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountProduct extends Model
{
    use HasFactory;

    protected $fillable = [
        'accountId', 'productId'
    ];

    public function accounts(){
        return $this->hasMany(Account::class);
    }

    public function products(){
        return $this->hasMany(Product::class);
    }
}
