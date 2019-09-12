<?php

Route::group(['prefix' => 'admin', 'namespace' => '\App\Http\Controllers\CoreModules\Upload'], function() {
	
	Route::get('/upload', [
		'as'	=>	'admin-cotact-us-get',
		'uses'	=>	'UploadController@getUpload',
		'middleware'	=>	'auth'
	]);

	Route::post('/upload', [
		'as'	=>	'admin-cotact-us-post',
		'uses'	=>	'UploadController@postUpload',
		'middleware'	=>	'auth'
	]);

});
