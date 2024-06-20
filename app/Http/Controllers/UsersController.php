<?php

namespace App\Http\Controllers;

use App\Models\Users;
use Illuminate\Http\Request;
use Auth;

class UsersController extends Controller
{
    public function register() 
    {
        return view('register');
    }

    public function registerPost(Request $request) 
    {
        $user = new Users();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = $request->input('password');
        $user->cf_password = $request->input('cf_password');
        if($user -> save()){
            return redirect()->back()->with('status','Register Successfully!!!');
        }else {
            return redirect(route('register'))->with('error', 'Register failed');
        }
    }

    public function login()
    {
        return view('login');
    }

    public function loginPost(Request $request) 
    {   
        $request->validate([
            'email' => "required",
            'password' => "required",
        ]);
        $data = $request->only("email", "password");
        if(Auth::attempt($data)){
            return redirect(route('student.all'))->with('status' , "Login Successfully!!!");
        } else {
            return redirect(route('login'))->with('status' , 'Login Failed');
        }
    }
}
