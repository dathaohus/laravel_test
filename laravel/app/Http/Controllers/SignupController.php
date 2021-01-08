<?php

namespace App\Http\Controllers;
use App\Models\Users;
use Illuminate\Http\Request;
use App\Http\Requests\SingupRequest;

class SignupController extends Controller
{
    public function index(){
        return view( 'signup');
    }

    public function store(SingupRequest $request){
        $validated = $request->validated();
        $users = Users::create(request(['name','email','password']));
        return redirect()->to('/signup');

    }


}
