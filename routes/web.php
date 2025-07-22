<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/search', ['as' => 'search', 'uses' => 'BlogController@search']);

Route::get('/', ['as' => 'home', 'uses' => 'BaseController@index']);
Route::get('/services', ['as' => 'our.services', 'uses' => 'ServiceController@ourServices']);
Route::get('/locations', ['as' => 'our.location', 'uses' => 'BaseController@ourLocation']);
Route::any('/contact-us', ['as' => 'contact.us', 'uses' => 'ContactController@contactUs']);
Route::get('/plan111', ['as' => 'plan111', 'uses' => 'BaseController@plan111']);

Route::get('/emergency-dentist', ['as' => 'emergency.dentist', 'uses' => 'ServiceController@emergencyDentist']);
Route::get('/emergency-dentist/{county?}', ['as' => 'emergency.dentist.county', 'uses' => 'ServiceController@emergencyDentist']);
Route::get('/emergency-dentist/{city?}/{town?}', ['as' => 'emergency.dentist.cities', 'uses' => 'ServiceController@emergencyDentistCity']);

Route::get('dental-clinic', function() { 
	return redirect()->to('/emergency-dentist', 301); 
});

Route::get('dental-clinic/{county}', function($county) { 
	return redirect()->to('/emergency-dentist/' . $county, 301); 
});

Route::get('dental-clinic/{city}/{town}', function($city, $town) { 
	return redirect()->to('/emergency-dentist/' . $city . '/' . $town, 301); 
});

Route::get('/dental-absces-treatments', ['as' => 'dental.abscess.treatment', 'uses' => 'ServiceController@dentalAbscess']);
Route::get('/lost-filling', ['as' => 'lost.filling', 'uses' => 'ServiceController@lostFilling']);
Route::get('/extraction', ['as' => 'extraction', 'uses' => 'ServiceController@extraction']);
Route::get('/dental-implants', ['as' => 'dental.implants', 'uses' => 'ServiceController@dentalImplants']);

Route::get('/sitemap28102024.xml', ['as' => 'sitemap', 'uses' => 'BaseController@sitemap']);
Route::get('/sitemap.xml', ['as' => 'sitemap.xml', 'uses' => 'BaseController@sitemap']);

Route::get('/privacy-policy', ['as' => 'privacy.policy', 'uses' => 'BaseController@privacyPolicy']);

Route::get('our-services', function(){ 
	return redirect()->to('/services', 301); 
});

Route::get('services-1', function(){ 
	return redirect()->to('/services', 301); 
});

Route::get('copy-of-privacy-policy', function(){ 
	return redirect()->to('/privacy-policy', 301); 
});

Route::get('our-location', function(){ 
	return redirect()->to('/locations', 301); 
});

Route::get('blog-feed.xml', function(){ 
	return redirect()->to('/sitemap.xml', 301); 
});

Route::get('/blog/{tag?}', ['as' => 'blog', 'uses' => 'BlogController@blog']);
Route::get('/{slug?}', ['as' => 'blog.detail', 'uses' => 'BlogController@blogDetails']);