<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::group(['middleware' => ['cors']], function () {
    // Poin Siswa
    Route::get('/poinSiswa/{nis}', 'PoinKebaikanController@show');
    Route::get('/poinSiswa/{nis}/total', 'PoinKebaikanController@total');

    // Catatan Sholat
    Route::get('/catatanSholat', 'SholatController@all');
    Route::get('/catatanSholat/{nis}', 'SholatController@show');
    Route::post('/catatanSholat', 'SholatController@store');
});

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});
