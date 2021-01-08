<?php

namespace App\Http\Controllers;
use App\Models\Users;
use Illuminate\Http\Request;
use App\Http\Requests\SingupRequest;
use Illuminate\Support\Facades\Hash;

class SignupController extends Controller
{
    public function index(){
        return view( 'signup');
    }

    public function store(SingupRequest $request){
        $validated = $request->validated();
        $users = Users::create([
            'name' => $request['name'],
            'email' => $request['email'],
            'password' => Hash::make($request['password']),
        ]);
        return redirect()->to(dd('Đăng ký thành công'));

    }


}
