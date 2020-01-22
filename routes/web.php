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

Route::get('/about/faq', function() { 
	return view('home.about.faq');
});

Route::get('/request-a-quote', 'QuoteRequestController@index');

/* testimonials */
Route::get('/about/testimonials', 'TestimonialsController@index');
Route::get('/about/testimonials/delete/{id}', 'TestimonialsController@delete')->middleware('auth');
Route::post('/about/testimonials', 'TestimonialsController@new');
Route::post('/about/testimonials/delete/{id}', 'TestimonialsController@delete_confirm')->middleware('auth');

/* admin */
Auth::routes();

Route::get('/admin', 'AdminController@index');
Route::get('/admin/testimonials/delete/{id}', 'AdminController@delete_testimonial')->middleware('auth');
Route::get('/admin/testimonials/approve/{id}', 'AdminController@approve_testimonial')->middleware('auth');

Route::get('/admin/test', function() {
	return view('admin.test');
})->middleware('auth');

