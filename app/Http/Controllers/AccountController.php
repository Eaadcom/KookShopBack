<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Services\AccountService;


class AccountController extends Controller
{

    /**
     * @var AccountService
     */
    private $accountService;

    public function __construct(AccountService $accountService)
    {
        $this->accountService = $accountService;
    }

    public function get($id)
    {
        return $this->accountService->get($id);
    }
}
