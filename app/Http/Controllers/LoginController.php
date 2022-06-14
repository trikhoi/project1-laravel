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
            return view('login', ['message' => 'Vui lòng đăng nhập!']);
        }

        //$accounts = Account::all();
        $account = User::where('user', '=', $request->input('userName'))->first();

        if (!$account) {
            return view('login', ['account' => $account, 'message' => 'Tài khoản không tồn tại!']);
        }

        if (!Hash::check($request->input('password'), $account->pass)) {
            return view('login', ['account' => $account, 'message' => 'Sai mật khẩu!']);
        }

        Auth::login($account);
        $request->session()->regenerate();
        return redirect()->intended('dashboard');
    }


}
