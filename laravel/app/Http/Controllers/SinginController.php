<?php

namespace App\Http\Controllers;

use App\Http\Requests\SigninRequest;
use Illuminate\Support\Facades\Auth;

class SinginController extends Controller
{
    public function index(){
        return view( 'signin');
    }

    public function login(SigninRequest $request){
        $validated = $request->validated();
        $credenticals = [
            'email' => $request -> email,
            'password' => $request -> password,
        ];

       if (Auth::guard('user')->attempt($credenticals)){
           dd('đăng nhập thành công');
       }else{
           dd('Tài khoản hocawcj mật khẩu không chính xác');
       }
    }
}
