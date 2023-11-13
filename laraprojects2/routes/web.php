<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});




Auth::routes();




Route::match(['get', 'post'], '/', 'App\Http\Controllers\ProjectsController@search')->name('searchProjects');
Route::match(['get', 'post'],'/add','App\Http\Controllers\ManageProjectsController@createProject')->name('createProject');
Route::match(['get', 'post'],'/delete','App\Http\Controllers\ManageProjectsController@deleteProject')->name('deleteProject');
Route::match(['get', 'post'],'/update{pid}','App\Http\Controllers\ManageProjectsController@updateProject')->name('updateProject');



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/manageProjects', [App\Http\Controllers\ManageProjectsController::class, 'search'])->name('manageProjects');
