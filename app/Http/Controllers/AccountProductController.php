<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AccountProductService;


class AccountProductController extends Controller
{
    /**
     * @var AccountProductService
     */
    private $accountProductService;

    public function __construct(AccountProductService $accountProductService)
    {
        $this->accountProductService = $accountProductService;
        $this->middleware('auth');
    }

    public function get()
    {
        return $this->accountProductService->get();
    }

    public function post(Request $request){
        $bodyContent = $request->all();
        $this->accountProductService->post($bodyContent);
    }
}
