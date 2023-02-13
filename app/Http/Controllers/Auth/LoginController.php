<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
		{
				return inertia('Auth/Login');
		}

		public function authenticate(Request $request)
		{
				$data = $request->validate([
					'email' => 'required|email:dns',
					'password' => 'required'
				]);

				if(Auth::attempt($data)){
					$request->session()->regenerate();
					return redirect()->route('admin.dashboard');
				}
				return redirect()->route('login');
		}
}
