<?php


namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Admin;
use App\Order;
use Hash;
use Auth;
use orders;

class AdminController extends Controller
{
    public function index()
	{
		$orders = User::orderBy('id_user','asc')->get();
		return view('layouts.admin',compact('orders'));
	}

	public function orderAdmin()
	{
		$orders = Order::orderBy('id_user','asc')->get();
		return view('layouts.orderAdmin',compact('orders'));
	}

	public function login1(Request $request)
	{

		$user=Admin::where('username',$request->username)->first();
		if(\Hash::check($request->password, $user->password))
			{
			\Auth::login($user);
			return back();	
			}
			else {return redirect('admins');}
	}
}
