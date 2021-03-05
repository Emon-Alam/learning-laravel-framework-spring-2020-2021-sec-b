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

Route::get('/home', 'HomeController@index')->name('index');

Route::get('/logout', 'LogoutController@index')->name('logout');
Route::get('/registration', 'RegistrationController@index')->name('register');
Route::post('/registration', 'RegistrationController@store')->name('name');
//product
Route::get('/system/product_information','ProductController@index')->name('product');
//ex-product
    Route::get('/system/product_information/existing_products','ProductController@existing')->name('product.existing');
    Route::get('/system/product_information/existing_products/edit/{id}','ProductController@existingEdit')->name('product.existing.edit');
    Route::get('/system/product_information/existing_products/delete/{id}','ProductController@existingDelete')->name('product.existing.delete');
    Route::get('/system/product_information/existing_products/product/{product_id}/vendor_details/{vendor_id}','ProductController@existingDetails')->name('product.existing.details');

    //up- product
    Route::get('/system/product_information/upcoming_products','ProductController@upcoming')->name('product.upcoming');
    Route::get('/system/product_information/upcoming_products/edit/{id}','ProductController@upcomingEdit')->name('product.upcoming.edit');

    //add-product
    Route::get('/system/product_information/add_product','ProductController@add')->name('product.adding');
