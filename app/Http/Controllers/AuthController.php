<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request){

        $this->validate($request, [
            'email' => 'required|email|unique:accounts',
            'password' => 'required|string',
        ]);

        try {

            $account = new Account();
            $account->email = $request->input('email');
            $plainPassword = $request->input('password');
            $account->password = app('hash')->make($plainPassword);

            $account->save();

            //return successful response
            return response()->json(['account' => $account, 'message' => 'CREATED'], 201);

        } catch (\Exception $e) {
            //return error message
            return response()->json(['message' => 'User Registration Failed!'], 409);
        }
    }

    public function login(Request $request){
        //validate incoming request
        $this->validate($request, [
            'email' => 'required|string',
            'password' => 'required|string',
        ]);

        $credentials = $request->only(['email', 'password']);

        if (! $token = Auth::attempt($credentials)) {
            return response()->json(['message' => 'Unauthorized'], 401);
        }

        return $this->respondWithToken($token);
    }
}
