<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('andrrows', function () {
	return view('layouts.master');
});

Route::get('orders', function () {
	return view('layouts.orders');
});

Route::get('pesan', function () {
	return view('layouts.pesan');
});

Route::get('confirm', function () {
	return view('layouts.confirm');
});

Route::get('bayar', function () {
	return view('layouts.bayar');
});

Route::get('bayar', function () {
	return view('layouts.bayar');
});

Route::get('loginadmin', function () {
	return view('layouts.loginAdmin');
});

Route::post('login', 'Andrrows@login');
Route::get('login1', 'AdminController@login1');


Route::get('/user', 'Andrrows@index')->name('user.dashboard');
Route::post('register', 'Andrrows@register');
Route::get('confirm', 'OrderController@confirm');
Route::get('order', 'OrderController@order');
//Route::get('status', 'OrderController@status');
Route::get('updateStatus', 'UpdateStatusController@updateStatus');
Route::resource('status','OrderController');

Route::resource('admins','AdminController');
Route::get('orderAdmin','AdminController@orderAdmin');
Route::get('logout','Andrrows@logout');

Route::get('upload',['as'=>'upload.index','uses'=>'UploadController@index']);
Route::get('bayar',['as'=>'layouts.bayar','uses'=>'UploadController@create']);
Route::post('upload',['as'=>'upload.store','uses'=>'UploadController@store']);



//Route::get('formorder', function () {
	//return view('layouts.pesan');
//});

/*Route::get('admins', function () {
	return view('layouts.admin');
});*/
/*Route::get('orderAdmin', function () {
	return view('layouts.orderAdmin');
});*/
/*Route::get('updateStatus', function () {
	return view('layouts.updateStatus');
});*/