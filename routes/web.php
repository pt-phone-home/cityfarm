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

Route::get('/', 'PagesController@index')->name('index');

// Community

Route::get('/community/classes', 'PagesController@classes')->name('classes');
Route::get('/community/kitchen', 'PagesController@kitchen')->name('kitchen');
Route::get('/community/calendar', 'PagesController@calendar')->name('calendar');

// Love

Route::get('/love/animals', 'PagesController@animals')->name('animals');
Route::get('/love/grow', 'PagesController@grow')->name('grow');
Route::get('/love/education', 'PagesController@education')->name('education');
Route::get('/love/ecology', 'PagesController@ecology')->name('ecology');

// Get Involved
Route::get('/involved/volunteer', 'PagesController@volunteer')->name('volunteer');
Route::get('/involved/corporate', 'PagesController@corporate')->name('corporate');
Route::get('/involved/sponsors', 'PagesController@sponsors')->name('sponsors');
Route::get('/involved/donate', 'PagesController@donate')->name('donate');

// News

Route::get('/news', 'PagesController@news')->name('news');

// Info
Route::get('/info/visit_us', 'PagesController@visitus')->name('info.visit_us');
Route::get('/info/contact', 'PagesController@contact')->name('info.contact');
Route::get('/info/farm_safety', 'PagesController@safety')->name('info.safety');

// Route::get('/test', function () {

//     $instagram = new Instagram('7336542448.1677ed0.c0deef072c7e44c5ae37a1984a156d3a');

//     $test = $instagram->media();

// });
