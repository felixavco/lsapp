<?php


Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about')->name('about');


Auth::routes();
Route::get('/dashboard', 'ProtectedPagesController@dashboard')->name('dashboard');

