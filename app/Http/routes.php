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
    // route for list
    Route::post('{TOKEN}/list/provinsi','APIPesantrenController@listProvinsi');
    Route::post('{TOKEN}/list/kabupaten/','APIPesantrenController@listKabupaten');
    Route::post('{TOKEN}/list/kabupaten/{ID_PROV}','APIPesantrenController@listKabupatenByIdProvinsi');
    Route::post('{TOKEN}/list/pesantren/{ID_KAB}','APIPesantrenController@listPesantrenByIdKabupaten');
    Route::post('{TOKEN}/list/pesantren','APIPesantrenController@listPesantrenAll');
    Route::post('{TOKEN}/profil/{ID_PES}','APIPesantrenController@detailPesantren');

    // route for search
    Route::post('{TOKEN}/search/{TEXT}','APIPesantrenController@pesantrenSearchByText');
    Route::post('{TOKEN}/search/{TEXT}/provinsi/{ID_PROV}','APIPesantrenController@pesantrenSearchByTextAndProvinsi');
    Route::post('{TOKEN}/search/{TEXT}/kabupaten/{ID_KAB}','APIPesantrenController@pesantrenSearchByTextAndKabupaten');

    // route for kabupaten request dropdown
    // Route::get('{TOKEN}/list/kabupaten/{ID_PROV}','APIPesantrenController@listKabupatenByIdProvinsi');
    //Route::get('users', 'UserController');
    //Route::resource('categories', 'CategoryController');
});


Route::get('/', function () {
    return view('welcome');
});

Route::auth();

Route::get('/home', 'HomeController@index');
Route::get('/','PublicController@index');
Route::get('/public','PublicController@index');


Route::get('/PesantrenSearch', 'PesantrenSearchController@index');
Route::post('/pesantrenCreate', 'PesantrenSearchController@create');

// Route::group(array('prefix' => 'admin'), function()
Route::group(array('prefix' => 'admin','middleware' => ['admin','auth']), function()
{
    // Route::get('/','ProvinsiController@home');
    Route::get('/','DashboardController@adminHome');
    Route::resource('provinsi','ProvinsiController',['except' => ['show','destroy']]);
    Route::delete('provinsi/delete/{provinsi}','ProvinsiController@destroy');
    Route::resource('kabupaten','KabupatenController',['except' => ['show','destroy']]);
    Route::delete('kabupaten/delete/{kabupaten}','KabupatenController@destroy');
    Route::resource('pesantren','PesantrenController',['except' => ['show','destroy']]);
    Route::delete('pesantren/delete/{pesantren}','PesantrenController@destroy');
    Route::post('pesantren/cari','PesantrenController@index2');
    Route::resource('pengguna','PenggunaController',['except' => ['show','destroy']]);
    Route::delete('pengguna/delete/{pengguna}','PenggunaController@destroy');

    // resourcefull for Tipe Pesantren
    Route::resource('tipepesantren','TipePesantrenController',['except' => ['show','destroy']]);
    Route::delete('tipepesantren/delete/{tipe}','TipePesantrenController@destroy');

    // resourcefull for Konsentrasi
    Route::resource('konsentrasi','KonsentrasiController',['except' => ['show','destroy']]);
    Route::delete('konsentrasi/delete/{tipe}','KonsentrasiController@destroy');

    // resourcefull for Potensi Ekonomi
    Route::resource('potensiekonomi','PotensiEkonomiController',['except' => ['show','destroy']]);
    Route::delete('potensiekonomi/delete/{tipe}','PotensiEkonomiController@destroy');

    // report
    Route::get('/pesbyprov','LaporanController@pesantrenByProvinsi');
    Route::post('/pesbyprov','LaporanController@pesantrenByProvinsi2');
    Route::get('/pesbykab','LaporanController@pesantrenByKabupaten');
    Route::post('/pesbykab','LaporanController@pesantrenByKabupaten2');
    // pdf
    Route::get('/exsportpes0pdf/{id_prov}','LaporanController@exportPesantrenByProvinsiPDF');
    Route::get('/exsportpes0xls/{id_prov}','LaporanController@exportPesantrenByProvinsiEXL');

    Route::get('/exsportpes1pdf/{id_kab}','LaporanController@exportPesantrenByKabupatenPDF');
    Route::get('/exsportpes1xls/{id_kab}','LaporanController@exportPesantrenByKabupatenEXl');

    // Exsport PDF dan Excel
    Route::get('/exsportprovinsipdf','ProvinsiController@exportPDF');
    Route::get('/exsportprovinsixls','ProvinsiController@exportEXL');
    Route::get('/exsportkabupatenpdf','KabupatenController@exportPDF');
    Route::get('/exsportkabupatenxls','KabupatenController@exportEXL');
    Route::get('/exsporttipepesantrenpdf','TipePesantrenController@exportPDF');
    Route::get('/exsporttipepesantrenxls','TipePesantrenController@exportEXL');
    Route::get('/exsportkonsentrasipdf','KonsentrasiController@exportPDF');
    Route::get('/exsportkonsentrasixls','KonsentrasiController@exportEXL');
    Route::get('/exsportpotensiekonomipdf','PotensiEkonomiController@exportPDF');
    Route::get('/exsportpotensiekonomixls','PotensiEkonomiController@exportEXL');
    Route::get('/exsportpenggunapdf','PenggunaController@exportPDF');
    Route::get('/exsportpenggunaxls','PenggunaController@exportEXL');


    // get dynamic dropdown kabupaten from provinsi ID
    Route::get('/pesantren/kabupatens/{id}', 'PesantrenController@getKabupaten');

    // change password for current user
    Route::get('changepassword', 'Auth\ChangePasswordsController@edit');
    Route::post('changepassword', 'Auth\ChangePasswordsController@update');

    // reset password pengguna
    Route::get('changepassworduser/{id}', 'Auth\ChangePasswordsController@edit2');
    Route::post('changepassworduser/{id}', 'Auth\ChangePasswordsController@update2');
});

Route::group(array('prefix' => 'public'), function()
{
    Route::get('/allpesantren','PublicController@listPesantrenAll');
    Route::post('/allpesantren','PublicController@listPesantrenAll2');

    Route::get('/exportpesantrenbyPDF','PublicController@exportPesantrenPDF');
    Route::get('/exportpesantrenbyExcel','PublicController@exportPesantrenExcel');
});

    // Route::get('/exportpesantren','PublicController@exportPesantren');
