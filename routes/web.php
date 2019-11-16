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

Route::get('/', function () {
    return view('welcome');
})->middleware('auth');


Route::group(['namespace'=>'users', 'prefix'=>'users', 'as'=>'users.', 'middleware'=>['auth']], function (){
    Route::get('/','indexController@index')->name('index');
    Route::get('/create', 'indexController@create')->name('create');
    Route::post('/create', 'indexController@store')->name('create.post');
    Route::get('/profile/{id}', 'indexController@profile')->name('profile');
    Route::get('/edit/{id}', 'indexController@edit')->name('edit');
    Route::post('/edit/{id}', 'indexController@update')->name('edit.post');
    Route::get('/delete/{id}', 'indexController@delete')->name('delete');

});

Route::group(['namespace'=>'orders', 'prefix'=>'orders', 'as'=>'orders.'], function (){
   Route::get('/', 'indexController@index')->name('index');
   Route::get('/create', 'indexController@create')->name('create');
   Route::post('/create/', 'indexController@store')->name('create.post');
   Route::get('/detail/{id}', 'indexController@show')->name('detail');
    Route::get('/edit/{id}', 'indexController@edit')->name('edit');
    Route::post('/edit/{id}', 'indexController@update')->name('edit.post');
});

Route::group(['namespace'=>'products', 'prefix'=>'products', 'as'=>'products.'], function (){
    Route::get('/','indexController@index')->name('index');
    Route::get('/create', 'indexController@create')->name('create');
    Route::post('/create', 'indexController@store')->name('create.post');
    Route::get('/edit/{id}', 'indexController@edit')->name('edit');
    Route::post('/edit/{id}', 'indexController@update')->name('edit.post');
    Route::get('/delete/{id}', 'indexController@delete')->name('delete');

});

Route::group(['namespace'=>'duty', 'prefix'=>'duty', 'as'=>'duty.'], function (){
    Route::get('/','indexController@index')->name('index');
    Route::get('/create', 'indexController@create')->name('create');
    Route::post('/create', 'indexController@store')->name('create.post');
    Route::get('/edit/{id}', 'indexController@edit')->name('edit');
    Route::post('/edit/{id}', 'indexController@update')->name('edit.post');
    Route::get('/show/{id}', 'indexController@show')->name('show');
    Route::get('/delete/{id}', 'indexController@delete')->name('delete');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('logout', 'HomeController@logout')->name('logout');

