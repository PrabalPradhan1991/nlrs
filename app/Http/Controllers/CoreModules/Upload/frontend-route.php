<?php

Route::group(['namespace' => '\App\Http\Controllers\CoreModules\Upload'], function() {
	Route::get('upload',
	['as'	=>	'upload',
	 'uses'	=>	'UploadController@getFrontendUpload']);
});

Route::post('/upload', function() {
	$input = request()->all();

	$email = (new \App\Http\Controllers\CoreModules\Upload\UploadModel)->getUpload()->email;
	\Mail::to($email)
		->queue(new \App\Mail\ContactMail($input));

	session()->flash('success-msg', 'We have received your email. We will contact you soon');

	return redirect()->back();

})->name('upload-post');