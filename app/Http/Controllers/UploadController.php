<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use store;

class UploadController extends Controller
{
    public function create()
	{
		return view('layouts.bayar');
	}

	public function store(Request $request)
	{
		$this->validate($request, [
		'file' => 'required',
	]);

	$input = $request->all();


	$fileName = '';
	if ($request->hasFile('file')) {
	$fileExtension = $request->file('file')->getClientOriginalExtension();
	$fileName = 'file_'.time().'.'.$fileExtension;
	$fileDestination = base_path() . '/public/uploads';
	$request->file('file')->move($fileDestination, $fileName);
	$input['file'] = $fileName;
	}
	$upload = UploadController::create($input);
	return redirect('status');
	}
}
