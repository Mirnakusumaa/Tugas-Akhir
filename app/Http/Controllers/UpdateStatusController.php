<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use Auth;

class UpdateStatusController extends Controller
{
    public function order(Request $request)
	{
		$order= new Order;
		$order->id_user=Auth::user()->id_user;//yang kiri harus sama dengan database, kanan sama dgn name diform input
		$order->nama=$request->nama;//yang kiri harus sama dengan database, kanan sama dgn name diform input
		$order->alamat=$request->alamat;
		$order->no_telp=$request->no_telp;
		$order->email=$request->email;
		$order->kode_pos=$request->kode_pos;
		$order->jenis_sepatu=$request->jenis_sepatu;
		$order->service1=$request->service1;
		$order->service2=$request->service2;
		$order->service3=$request->service3;
		$order->jenis_bahan=$request->jenis_bahan;
		$order->warna=$request->warna;
		$order->jumlah_sepatu=$request->jumlah_sepatu;
		$order->layanan_tambahan=$request->layanan_tambahan;
		$order->save();
		// return back(); 
		//return $request;
		return redirect('updateStatus');
	}

	/*public function updateStatus()
	{
		$orders = Order::where('id_user',\Auth::user()->id_user)->orderBy('id_order','desc')->first(); //mengambil id user
		// $orders = Order::find(Auth::user()->id_user);
		//auth::login($user);
		return view('layouts.updateStatus')->with('orders',$orders);
	}*/
}
