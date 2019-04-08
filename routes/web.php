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
Route::get('/info/visit_us', 'PagesController@visitus')->name('info.visit_us');
Route::get('/info/contact', 'PagesController@contact')->name('info.contact');

// Route::get('/test', function () {

//     $instagram = new Instagram('7336542448.1677ed0.c0deef072c7e44c5ae37a1984a156d3a');

//     $test = $instagram->media();

// });
