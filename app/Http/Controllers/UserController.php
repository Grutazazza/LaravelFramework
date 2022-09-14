<?php

namespace App\Http\Controllers;

use App\Http\Requests\RequestValidationLogin;
use App\Http\Requests\RequestValidationRegister;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Testing\Fluent\Concerns\Has;

class UserController extends Controller
{
    public function login(){
        return view('reg');
    }

    public function loginPost(RequestValidationLogin $request)
    {
        if(Auth::attempt($request->validated())){
            $request->session()->regenerate();
            return redirect()->route('welcome');
        }
        return  back()->with(['errorSuccess'=>'AAAAA']);
    }

    public function register(){
        return view('reg1');
    }

    public function registerPost(RequestValidationRegister $request)
    {
        echo "AAAAAA";
        $data = $request->validated();
        $data['password'] = Hash::make($data['password']);

        User::create($data);

        return  back()->with(['success'=>true]);
    }
}
