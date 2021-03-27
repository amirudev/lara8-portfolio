<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    protected $table = 'users';

    public function index(Request $request){
    	if($request->method() == "POST"){
    		$this->validate($request, [
    			'username' => 'required',
    			'password' => 'required'
    		]);

    		if(auth()->attempt($request->only('username', 'password')){
    			return redirect()->route('index');
    		}
    		session()->flash('status', 'Invalid login details');
    	}
    	return view('auth.login');
    }

    public function register(Request $request){
    	if($request->method() == "POST"){
    		$this->validate($request, [
    			'name' => 'required|max:255',
    			'username' => 'required|max:255',
    			'email' => 'required|email',
    			'password' => 'required|confirmed',
    		]);

    		User::create([
    			'name' => $request->name,
    			'username' => $request->username,
    			'email' => $request->email,
    			'password' => Hash::make($request->password)
    		]);

    		auth()->attempt($request->only('email', 'password'));

			return redirect()->route('index');
    	}
    	return view('auth.register');
    }

    public function signout()
    {
    	auth()->logout();
    	return redirect()->route('login');
    }
}
