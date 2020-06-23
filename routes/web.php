<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


Route::get('/', 'HomeController@accueil')->name('welcome');

Route::get('/biographie', function () {
    return view('biographie');
})->name('biographie');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/filmographie', 'HomeController@film')->name('filmographie');


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::resource('users', 'UserController');
Route::get('users/show', 'UserController@show')->name('show')->middleware('auth');
Route::get('/user/edit', 'UserController@edit')->name('edit')->middleware('auth');
Route::get('/user/update', 'UserController@update')->name('update')->middleware('auth');
Route::get('/user/delete', 'UserController@destroy')->name('delete')->middleware('auth');

Route::get('/search', 'HomeController@search')->name('search');
