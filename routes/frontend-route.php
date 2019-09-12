<?php

Route::get('/', function(){
	return view('frontend.index');
})->name('index');

/*Route::get('/about', function(){
	return view('frontend.about');
})->name('about');*/

/*Route::get('/blog', function(){
	return view('frontend.blog');
})->name('blog');*/

/*Route::get('/blog-single', function(){
	return view('frontend.blog-single');
})->name('blog-single');*/

Route::get('/contact', function(){
	return view('frontend.contact');
})->name('contact');

/*Route::get('/event-single', function(){
	return view('frontend.event-single');
})->name('event-single');

Route::get('/events', function(){
	return view('frontend.events');
})->name('events');
*/
Route::get('/notice-single', function(){
	return view('frontend.notice-single');
})->name('notice-single');

Route::get('/notice', function(){
	return view('frontend.notice');
})->name('notice');

/*Route::get('/portfolio', function(){
	return view('frontend.portfolio');
})->name('portfolio');

Route::get('/portfolio-single', function(){
	return view('frontend.portfolio-single');
})->name('portfolio-single');*/

/*Route::get('/upload', function(){
	return view('frontend.upload');
})->name('upload');*/