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


Route::get('dashboard' ,'DashboardController@index');

//book start
Route::post('post-book-form','Web\BookContro@store');
Route::get('create-book','Web\BookContro@create');
Route::get('all-books','Web\BookContro@index');
Route::get('edit-book/{id}','Web\BookContro@edit');
Route::post('update-book/{id}','Web\BookContro@update');
Route::get('delete-book/{id}','Web\BookContro@destroy');
//book end

//requestbook start
Route::get('all-requestbooks','Web\RequestBookContro@index');
Route::get('edit-requestbook/{id}','Web\RequestBookContro@edit');
Route::post('update-requestbook/{id}','Web\RequestBookContro@update');
Route::get('delete-requestbook/{id}','Web\RequestBookContro@destroy');
//requestbook end


//user start
Route::get('all-users','Web\UserContro@index');
// Route::get('edit-user/{id}','Web\UserContro@edit');
// Route::post('update-user/{id}','Web\UserContro@update');
 Route::get('delete-user/{id}','Web\UserContro@destroy');
//user end