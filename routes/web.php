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

// home views
Route::get('/', function () {
    return view('home.home');
});

Route::get('/services/local-and-national', function() { 
	return view('home.services.local-and-national');
});

Route::get('/services/storage', function() { 
	return view('home.services.storage');
});

Route::get('/services/international-removals', function() { 
	return view('home.services.international-removals');
});

Route::get('/services/packing', function() { 
	return view('home.services.packing');
});

Route::get('/about/photo-gallery', function() { 
	return view('home.about.photo-gallery');
});

Route::get('/about/testimonials', function() { 
	return view('home.about.testimonials');
});

Route::get('/about/faq', function() { 
	return view('home.about.faq');
});

Route::get('/request-a-quote', function() { 
	return view('home.request-a-quote');
});