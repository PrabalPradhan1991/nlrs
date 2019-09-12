<?php

Route::group(['prefix' => 'admin', 'namespace' => '\App\Http\Controllers\CoreModules\Testimonials'], function() {
	Route::get('/testimonials/list', [
		'as'	=>	'admin-testimonials-list',
		'uses'	=>	'TestimonialsController@getListView',
		'middleware'	=>	'auth'
	]);

	Route::get('/testimonials/create', [
		'as'	=>	'admin-testimonials-create-get',
		'uses'	=>	'TestimonialsController@getCreateView',
		'middleware'	=>	'auth'
	]);

	Route::post('/testimonials/create', [
		'as'	=>	'admin-testimonials-create-post',
		'uses'	=>	'TestimonialsController@postCreateView',
		'middleware'	=>	'auth'
	]);

	Route::get('/testimonials/edit/{id}', [
		'as'	=>	'admin-testimonials-edit-get',
		'uses'	=>	'TestimonialsController@getEditView',
		'middleware'	=>	'auth'
	]);

	Route::post('/testimonials/edit/{id}', [
		'as'	=>	'admin-testimonials-edit-post',
		'uses'	=>	'TestimonialsController@postEditView',
		'middleware'	=>	'auth'
	]);

	Route::post('/testimonials/delete/{id}', [
		'as'	=>	'admin-testimonials-delete-post',
		'uses'	=>	'TestimonialsController@postDeleteView',
		'middleware'	=>	'auth'
	]);

});
