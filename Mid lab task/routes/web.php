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

Route::group(['middleware'=>'admin'],function(){

    Route::get('/system/sales', 'SalesController@index')->name('sales');
    
    Route::get('/system/sales/physical_store', 'SalesController@physical')->name('sales.physical');
    Route::post('/system/sales/physical_store', 'SalesController@physicalVerify');
    
    Route::get('/system/sales/physical_store/sales_log', 'SalesController@physicalLogs')->name('sales.physical.logs');
    Route::post('/system/sales/physical_store/sales_log', 'SalesController@physicalLogsStore');
    Route::get('/system/sales/ecommerce_store', 'SalesController@ecommerce')->name('sales.ecommerce');
    Route::get('/system/sales/social_media_store', 'SalesController@social')->name('sales.social');
    
    Route::get('/system/sales/physical_store/sales_log/download/reportSold','SalesController@physicalLogsSold')->name('sales.physical.logs.download.sold');
    Route::get('/system/sales/physical_store/sales_log/download/reportPending','SalesController@physicalLogsPending')->name('sales.physical.logs.download.pending');

//product
Route::get('/system/product_management','ProductController@index')->name('product');
//ex-product
    Route::get('/system/product_management/existing_products','ProductController@existing')->name('product.existing');   
    Route::get('/system/product_management/existing_products/edit/{id}','ProductController@existingEdit')->name('product.existing.edit');
    Route::post('/system/product_management/existing_products/edit/{id}','ProductController@existingEditUpdate');
    Route::get('/system/product_management/existing_products/delete/{id}','ProductController@existingDelete')->name('product.existing.delete');

    Route::get('/system/product_management/existing_products/details/{id}','ProductController@existingDetails')->name('product.existing.details');

    //up- product
    Route::get('/system/product_management/upcoming_products','ProductController@upcoming')->name('product.upcoming');
    
    Route::get('/system/product_management/upcoming_products/edit/{id}','ProductController@upcomingEdit')->name('product.upcoming.edit');
    Route::post('/system/product_management/upcoming_products/edit/{id}','ProductController@upcomingEditUpdate');
    Route::get('/system/product_management/upcoming_products/delete/{id}','ProductController@upcomingDelete')->name('product.upcoming.delete');
    
    //Product_Details
    Route::get('/system/product_management/product/{product_id}/vendor_details/{vendor_id}','ProductController@productDetails')->name('product.details');
    
    //add-product
    Route::get('/system/product_management/add_product','ProductController@add')->name('product.adding');
    Route::post('/system/product_management/add_product','ProductController@addVerify');

});