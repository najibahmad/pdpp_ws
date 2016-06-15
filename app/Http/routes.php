<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::group(array('prefix' => 'api/v1','middleware' => 'api'), function()
{
    Route::post('pesantrens','APIPesantrenController@pesantrenList');
    Route::post('pesantren/{nspp}','APIPesantrenController@pesantrenByNspp');
    Route::post('provinsi','APIPesantrenController@listProvinsi');
    Route::post('kabupaten/{provinsi}','APIPesantrenController@listKabupaten');
    //Route::get('users', 'UserController');
    //Route::resource('categories', 'CategoryController');
});


Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');
// Route::group(array('prefix' => 'admin','middleware' => ['admin','auth']), function()
Route::group(array('prefix' => 'admin'), function()
{
    Route::get('/','ProvinsiController@home');
    Route::resource('provinsi','ProvinsiController',['except' => ['show','destroy']]);
    Route::delete('provinsi/delete/{provinsi}','ProvinsiController@destroy');
    Route::resource('kabupaten','KabupatenController',['except' => ['show','destroy']]);
    Route::delete('kabupaten/delete/{kabupaten}','KabupatenController@destroy');
    Route::resource('pengasuh','PengasuhController',['except' => ['show','destroy']]);
    Route::delete('pengasuh/delete/{pengasuh}','PengasuhController@destroy');
    Route::resource('pesantren','PesantrenController',['except' => ['show','destroy']]);
    Route::delete('pesantren/delete/{pesantren}','PesantrenController@destroy');
    Route::resource('pengguna','PenggunaController',['except' => ['show','destroy']]);
    Route::delete('pengguna/delete/{pengguna}','PenggunaController@destroy');
});
