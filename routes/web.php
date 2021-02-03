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

Route::get('/menu', 'Web\ShopCategoryController@index')->name('menu.index');

Route::get('/menu/{slug}', 'Web\ShopCategoryController@show')->name('menu.show');

Route::get('/menu/{id}', 'Web\ShopProductController@show')->name('category.show');

Route::get('/about', function (){
    return view('info.about');
})->name('about');

Route::get('/service', function () {
    return view('info.service');
})->name('service');

Route::get('/contact', function () {
    return view('info.contact');
})->name('contact');

Route::get('/blog', function () {

})->name('blog');

Route::group(['prefix' => '/admin', 'name' => 'admin.', 'middleware' => 'auth'], function () {
    Route::get('/', function (){
        return view('admin.home');
    })->name('admin.home');

    Route::resource('/categories', 'Web\Admin\ShopCategoryController')
        ->names('admin.categories');

    Route::resource('/products', 'Web\Admin\ShopProductController')
        ->names('admin.products');

    Route::resource('/orders', 'Web\Admin\ShopOrderController')
        ->names('admin.orders');

    Route::resource('/blog', 'Web\Admin\BlogPostController')
        ->names('admin.blog');

    Route::get('/users', 'Web\Admin\UserController@index')
        ->name('admin.users.index');
});
