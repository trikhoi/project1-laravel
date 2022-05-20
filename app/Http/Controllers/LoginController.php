<?php

namespace App\Http\Controllers;

use App\Models\Account;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        if(empty($request->input('userName'))){
            return view('login',['message' => 'vui long dang nhap']);
        }

//        dd($request->all());
        $message = '';
        //$accounts = Account::all();
        $account = Account::where('user', '=', $request->input('userName'))->first();
        if (!$account) {
            $message = 'Tai khoan khong ton tai';
        } elseif ($account->pass != $request->input('pass')) {
            $message = 'Sai mat khau';
        } else {
            $message = 'Dang nhap thanh cong';
        }
        return view('login', ['accounts' => $account, 'message' => $message]);
    }
}
