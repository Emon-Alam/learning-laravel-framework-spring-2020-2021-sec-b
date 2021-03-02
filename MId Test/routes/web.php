<?php
use App\Http\Controllers\HomeController;

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
    //return view('welcome');
    echo "welcome";
});


Route::get('/login', 'LoginController@index')->name('login');
Route::post('/login', 'LoginController@verify');

Route::get('/home', 'ProductController@index')->name('index');

Route::get('/logout', 'LogoutController@index')->name('logout');
Route::get('/registration', 'HomeController@index')->name('register');
Route::post('/registration', 'HomeController@store')->name('name');



