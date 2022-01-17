<?php

namespace App\Services;

use App\Models\Account;

class AccountService
{

    public function get($id)
    {
        return Account::select('id', 'email')
            ->findOrFail($id);
    }
}
