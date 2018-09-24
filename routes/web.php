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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/check-attendance', function (){
	return view('check-attendance');
})->name('check-attendance');

Route::get('/activities', function () {
    return view('activities');
})->name('activities');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/activities/create', function(){
	return view('activites.create');
})->name('activities.create');


Route::get('/activities/{id}/show', 'ActivitiesController@show')->name('activities.id.show');
