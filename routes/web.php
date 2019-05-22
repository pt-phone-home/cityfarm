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

Route::get('/community/calendar/create', 'FixturesController@create')->name('calendar.create')->middleware('auth');
Route::post('/community/calendar/store', 'FixturesController@store')->name('calendar.store')->middleware('auth');
Route::get('/community/calendar/edit/{id}', 'FixturesController@edit')->name('calendar.edit')->middleware('auth');
Route::put('/community/calendar/update/{id}', 'FixturesController@update')->name('calendar.update')->middleware('auth');
Route::delete('/community/calendar/delete/{id}', 'FixturesController@destroy')->name('calendar.delete')->middleware('auth');

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

Route::post('info/contact', 'PagesController@sendEmail')->name('contact.post');

// ADMIN

Route::get('/admin', 'PagesController@admin')->name('admin.index')->middleware('auth');
Route::get('/login', 'LoginController@showLoginForm')->name('login.get');
Route::post('/login', 'LoginController@login')->name('login.post');
Route::get('/logout', 'LoginController@logout')->name('logout');

//News
Route::get('/news', 'PagesController@news')->name('news');
Route::get('/news/create', 'NewsController@create')->name('news.create')->middleware('auth');
Route::post('/news/store', 'NewsController@store')->name('news.store')->middleware('auth');
Route::get('/news/edit/{id}', 'NewsController@edit')->name('news.edit')->middleware('auth');
Route::put('/news/update/{id}', 'NewsController@update')->name('news.update')->middleware('auth');
Route::get('/newsitem/{id}', 'NewsController@newsitem')->name('news.newsitem');
Route::delete('/news/delete/{id}', 'NewsController@destroy')->name('news.delete')->middleware('auth');
