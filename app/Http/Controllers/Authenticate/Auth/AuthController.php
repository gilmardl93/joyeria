<?php

namespace App\Http\Controllers\Authenticate\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use App\User;

class AuthController extends Controller
{
    public function authenticate(Request $request)
    {
    	if(Auth::attempt(['username' => $request->username, 'password' => $request->password ]))
    	{
    		return redirect('admin');
    	}else 
    	{
    		return redirect('/');
    	}
    }

    public function logout(Request $request)
    {
        $this->guard()->logout();

        $request->session()->invalidate();

        return redirect('/');
    }

    protected function guard()
    {
        return Auth::guard();
    }

    public function login()
    {
    	return view('admin.auth.login');
    }
}
