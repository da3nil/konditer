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

use App\Http\Controllers\Web\MenuController;
use App\Http\Controllers\Web\ShopCategoryController;
use App\Http\Controllers\Web\ShopProductController;
use App\Models\ShopCategory;
use App\Models\ShopProduct;

Route::get('/', 'Web\ShowWelcome')->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/menu', 'Web\ShopCategoryController@index');

Route::get('/menu/{slug}', 'Web\ShopCategoryController@show')->name('menu');

Route::get('/menu/{id}', 'Web\ShopProductController@show');

Route::get('/about', function (){

});

Route::get('/service', function () {

});

Route::get('/contact', function () {

});

Route::group(['prefix' => '/admin', 'name' => 'admin.'], function () {
    Route::resource('/category', 'Web\ShopCategoryController')
        ->except('show')->names('admin.category');
});
