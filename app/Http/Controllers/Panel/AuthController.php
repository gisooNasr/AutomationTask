<?php

namespace App\Http\Controllers\Panel;

use App\Classes\Helper;
use App\Http\Controllers\Controller;
use App\Http\Requests\AuthRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function getLogin(){
        return view('panel.auth.login');
    }

    public function postLogin(AuthRequest $request){

        $input=$request->only(['email','password']);

        $check = Auth::attempt([
            'email'=>Helper::persian2LatinDigit($input['email']),
            'password'=>Helper::persian2LatinDigit($input['password']),
        ]);

        if($check){
            return redirect('/transactions/')
                ->with('success' , 'خوش آمدید.');
        }else{
            return redirect('/')
                ->with('error' , 'ایمیل یا رمزعبور صحیح نیست.');
        }
    }

    public function logout(){
        Auth::logout();
        return redirect('/')
            ->with('success' , 'خوش آمدید.منتظر ورود دوباره شماییم!');
    }
}
