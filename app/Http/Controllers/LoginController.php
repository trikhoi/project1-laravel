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

    public function register(Request $request)
    {
        if (empty($request->input('userName'))) {
            return view('register', ['message' => 'Vui long nhap user']);
        }

        $message = '';

        $account = User::where('user', '=', $request->input('userName'))->first();
        if ($account) {
            $message = 'Tai khoan da ton tai';
        } elseif (empty($request->input('password'))) {
            $message = 'Vui long nhap password';
        } elseif (($request->input('password')) != ($request->input('repass'))) {
            $message = 'Mat khau nhap lai khong dung';
        } else {
            $account = User::create([
                'user' => $request->input('userName'),
                'pass' => bcrypt($request->input('password'))
            ]);
            $message = 'Dang ky tai khoan thanh cong';
        }

        return view('register', ['account' => $account, 'message' => $message]);
    }

}
