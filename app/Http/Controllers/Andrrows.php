<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Hash;
use Auth;
class Andrrows extends Controller
{
	/**
	* Create a new controller instance.
	*
	* @return void
	*/
	public function __construct()
	{
	//$this->middleware('auth');
	}
	/**
	* Show the application dashboard.
	*
	* @return \Illuminate\Http\Response
	*/
	public function login(Request $request)
	{
		$user=User::where('username',$request->username)->first();
		if(\Hash::check($request->password, $user->password))
			{
			\Auth::login($user);
			return redirect('orders');
			//return view('layouts.orders');
			//return back();	
		}

		return back();
		
	}

		public function register(Request $request)
	{
		$user=new User;
		$user->username=$request->username;//yang kiri harus sama dengan database, kanan sama dgn name diform input
		$user->email=$request->email;
		$user->password=bcrypt($request->password);
		$user->level="user";
		$user->save();
		return back(); 
		//return $request;
		//return view('layouts.orders');
	}

	public function logout(){
		\Auth::logout();
		return redirect('andrrows');
	}
}
