<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        if (empty($request->input('userName'))) {
            return view('login', ['message' => 'vui long dang nhap']);
        }

        //$accounts = Account::all();
        $account = User::where('user', '=', $request->input('userName'))->first();

        if (!$account) {
            return view('login', ['account' => $account, 'message' => 'Tai khoan khong ton tai']);
        }

        if (!Hash::check($request->input('password'), $account->pass)) {
            return view('login', ['account' => $account, 'message' => 'Sai mat khau']);
        }

        Auth::login($account);
        $request->session()->regenerate();
        return redirect()->intended('dashboard');
    }


}
