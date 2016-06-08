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

Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');

Route::resource('admin/provinsi','ProvinsiController',['except' => ['show','destroy']]);
Route::delete('admin/provinsi/delete/{provinsi}','ProvinsiController@destroy');
Route::resource('admin/kabupaten','KabupatenController',['except' => ['show','destroy']]);
Route::delete('admin/kabupaten/delete/{kabupaten}','KabupatenController@destroy');
Route::resource('admin/pengasuh','PengasuhController',['except' => ['show','destroy']]);
Route::delete('admin/pengasuh/delete/{pengasuh}','PengasuhController@destroy');
Route::resource('admin/pesantren','PesantrenController',['except' => ['show','destroy']]);
Route::delete('admin/pesantren/delete/{pesantren}','PesantrenController@destroy');
