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

Auth::routes();

Route::get('/', 'Auth\LoginController@showLoginForm')->name('login.index');
Route::post('/', 'Auth\LoginController@login')->name('login');


route::middleware(['middleware' => 'auth'])->group(function(){
    Route::get('/dashboard', 'Controller@index')->name('index');
    Route::get('/user', 'UserController@index')->name('user.index');
    Route::get('/user/create', 'UserController@create')->name('user.create');
    Route::post('/usersimpan', 'UserController@simpan')->name('user.simpan');

    Route::get('/product', 'ProductController@index')->name('product.index');
    Route::get('/product/create', 'ProductController@create')->name('product.create');

    Route::get('/new_order', 'NewOrderController@index')->name('new_order.index');
    Route::post('/new_order/simpan', 'NewOrderController@simpan')->name('new_order.simpan');
});


// Route::get('/', function(){
//     return view('welcome');
// });



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
