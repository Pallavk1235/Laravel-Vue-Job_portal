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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('jobs', 'JobController');
Route::resource('permission', 'PermissionController');
Route:: resource('role', 'RoleController');




Route::get('/jobs','JobController@index')->name('jobs.index');
Route::get('/jobs','JobController@list')->name('jobs.job-list');
Route::post('/jobs','JobController@Postjob')->name('job.Postjob');


// Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


///////////////////////////////////////////// axios request
Route::get('/getAllPermission', 'PermissionController@getAllPermissions');

