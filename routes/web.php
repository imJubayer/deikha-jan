<?php


Auth::routes();

Route::get('/', 'LandingPageController@index');
Route::get('/admin', 'HomeController@index')->name('home');

Route::resource('/admin/category', 'CategoryController');
