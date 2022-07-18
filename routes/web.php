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

Route::get('/', function () {
    return view('welcome');
});


Route::get('/jobs/index', 'App\Http\Controllers\JobController@index')->name('jobs/index');
Route::get('/jobs/dashboard', 'App\Http\Controllers\JobController@dashboard')->name('jobs/dashboard');
Route::get('/jobs/create', 'App\Http\Controllers\JobController@create')->name('jobs/create');
Route::post('/jobs/store', 'App\Http\Controllers\JobController@store')->name('jobs/store');
Route::get('/jobs/{job}/edit', 'App\Http\Controllers\JobController@edit')->name('jobs/edit');
Route::get('/jobs/{job}', 'App\Http\Controllers\JobController@show')->name('jobs/show');
Route::patch('/jobs/{job}', 'App\Http\Controllers\JobController@update')->name('jobs/update');
Route::delete('/jobs/{job}', 'App\Http\Controllers\JobController@destroy')->name('jobs/destroy');
//Route::resource('jobs/', App\Http\Controllers\JobController::class);

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/applications/index', 'App\Http\Controllers\ApplicationController@index')->name('applications/index');
//Route::get('/applications/create', 'App\Http\Controllers\ApplicationController@create')->name('applications/create');
Route::post('/applications/store', 'App\Http\Controllers\ApplicationController@store')->name('applications/store');

Route::get('/applications/create', function(){
    \App\Application::create([
        'user_id' => 'user_id',
        'job_id' => 'job_id',
        'status' => 'Applied'
    ]);
});