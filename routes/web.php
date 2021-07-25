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

Route::get('/logins',"App\Http\Controllers\Usercontroller@login");
Route::post('/checkLogin',"App\Http\Controllers\Usercontroller@checkLogin");
//phan user
// gui du lieu trang dang nhap
Route::get('user/list',"App\Http\Controllers\Usercontroller@list");
//add view
Route::get('user/create',"App\Http\Controllers\Usercontroller@create");
// add()
Route::post('user/insert',"App\Http\Controllers\Usercontroller@insert");


Route::get('/logout',"App\Http\Controllers\Usercontroller@logout");
//log out
Route::get('/logout',"App\Http\Controllers\Usercontroller@logout");
//delete
Route::get('user/delete/{id}',"App\Http\Controllers\Usercontroller@delete");
//edit view
Route::get('/user/edit/{id}',"App\Http\Controllers\Usercontroller@edit");
// sua method
Route::post('/user/update',"App\Http\Controllers\Usercontroller@update");

//phan init
Route::get('init/list',"App\Http\Controllers\Initcontroller@list");
Route::get('init/create',"App\Http\Controllers\Initcontroller@create");
Route::post('init/insert',"App\Http\Controllers\Initcontroller@insert");
Route::get('init/delete/{id}',"App\Http\Controllers\Initcontroller@delete");
Route::get('init/edit/{id}',"App\Http\Controllers\Initcontroller@edit");
Route::post('init/update',"App\Http\Controllers\Initcontroller@update");







Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
