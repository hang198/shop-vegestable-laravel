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

use Illuminate\Support\Facades\Route;

    Route::middleware('locale')->get('/', 'PageController@index')->name('index');
    Route::get('/product_type/{type}', 'PageController@productType')->name('product_type');
    Route::get('/product_detail/{id}', 'PageController@productDetail')->name('product_detail');
    Route::get('/{id}/add-to-cart/', 'PageController@addCart')->name('addCart');
    Route::get('/del-cart/{id}', 'PageController@delCart')->name('delCart');
    Route::get('/cart', 'PageController@showCart')->name('showCart');
    Route::get('/checkout', 'PageController@getCheckOut')->name('getCheckOut');
    Route::post('/checkout', 'PageController@postCheckOut')->name('postCheckOut');
    Route::get('/about', 'PageController@about')->name('about');
    Route::get('/blog', 'PageController@blog')->name('blog');
    Route::get('/contact', 'PageController@contact')->name('contact');
    Route::middleware('locale')->post('/changeLanguage', 'LangController@changeLanguage')->name('changeLanguage');
    Route::get('/login','LoginController@showLogin')->name('showLogin');
    Route::post('/login','LoginController@login')->name('login');
    Route::get('/logout','LogoutController@showLogout')->name('showLogout');
    Route::post('/logout','LogoutController@logout')->name('logout');

Route::group(['prefix'=>'admin'], function (){
    Route::get('/', 'ProductController@index')->name('products.index');
    Route::get('/create','ProductController@create')->name('products.create');
    Route::post('/create','ProductController@store')->name('products.store');
    Route::get('/{id}/edit','ProductController@edit')->name('products.edit');
    Route::post('/{id}/update','ProductController@update')->name('products.update');
    Route::get('/{id}/delete','ProductController@destroy')->name('products.destroy');
    Route::get('/search','PageController@getSearch')->name('products.getSearch');
});
Route::get('/redirect/{social}', 'SocialAuthController@redirect');
Route::get('/callback/{social}', 'SocialAuthController@callback');


