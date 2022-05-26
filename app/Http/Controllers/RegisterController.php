<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class RegisterController extends Controller
{
    public function register(Request $request)
    {


        if (empty($request->input('userName'))) {
            return view('register', ['message' => 'Vui long nhap user']);
        }

        $message = '';

        $account = User::where('user', '=', $request->input('userName'))->first();
        if ($account) {
            $message = 'Tai khoan da ton tai';
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
