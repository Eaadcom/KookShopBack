<?php

namespace App\Services;

use App\Models\AccountProduct;
use Illuminate\Database\Eloquent\Collection;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use function Sodium\add;

class AccountProductService
{

    public function get(): Collection|array
    {
        $id = Auth::user()->id;
        return AccountProduct::select(DB::raw('count(productName) as amount,productName'))
            ->where('accountId', '=', $id)
            ->groupBy('productName')
            ->get();

    }

    public function post($shopItems){

        $id = Auth::user()->id;
        for ($i = 0; $i < sizeof($shopItems); $i++){
            for ($j = 0; $j < $shopItems[$i][1]; $j++){
                $accountProduct = new AccountProduct();
                $accountProduct->fill(
                    [
                        'accountId' => $id,
                        'productName' => $shopItems[$i][0],
                    ]
                );
                $accountProduct->save();
            }
        }
    }
}
