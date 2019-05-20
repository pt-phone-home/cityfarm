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
Route::get('/community/about', 'PagesController@about')->name('about');
Route::get('/community/classes', 'PagesController@classes')->name('classes');
Route::get('/community/kitchen', 'PagesController@kitchen')->name('kitchen');
Route::get('/community/calendar', 'PagesController@calendar')->name('calendar');
Route::get('/community/calendaritem/{id}', 'FixturesController@show')->name('calendar.show');

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

// Info
Route::get('/info/visit_us', 'PagesController@visitus')->name('info.visit_us');
Route::get('/info/contact', 'PagesController@contact')->name('info.contact');
Route::get('/info/farm_safety', 'PagesController@safety')->name('info.safety');

// ADMIN

Route::get('/admin', 'PagesController@admin')->name('admin.index');

//News
Route::get('/news', 'PagesController@news')->name('news');
Route::get('/news/create', 'NewsController@create')->name('news.create');
Route::post('/news/store', 'NewsController@store')->name('news.store');
Route::get('/news/edit/{id}', 'NewsController@edit')->name('news.edit');
Route::put('/news/update/{id}', 'NewsController@update')->name('news.update');
Route::get('/newsitem/{id}', 'NewsController@newsitem')->name('news.newsitem');
Route::delete('/news/delete/{id}', 'NewsController@destroy')->name('news.delete');
