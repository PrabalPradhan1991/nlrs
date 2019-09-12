<?php

Route::group(['namespace' => '\App\Http\Controllers\CoreModules\Testimonials'], function() {
	Route::get('/testimonials', [
		'as'	=>	'testimonials',
		'uses'	=>	'TestimonialsController@getFrontendTestimonials'
	]);
});