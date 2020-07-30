<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminAuth extends Controller
{
    public function login()
    {
        return view('admin.login');
    }

    public function doLogin()
    {
        // dd(request()->all());
        $rememberMe = \request('remeberme')==1? true: false;
        // dd(auth()->guard('admin'));
        if(auth()->guard('admin')->attempt(['email'=>request('email'),'password'=>request('password')],$rememberMe))
        {
            return redirect('admin');
        }else{

            // request()->session()->flash('error', trans('admin.incorrect_login_info'));
            return redirect(aurl('login'));
        }
    }

    public function logout()
    {
        auth()->guard('admin')->logout();
        return redirect('admin/login');
    }
    

    public function forgot_password()
    {
        return view('admin.forgot_password');
    }

    public function forgot_password_post()
    {
        
    }
}
