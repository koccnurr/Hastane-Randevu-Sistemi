<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/register','UsersController@getRegister')->name('getRegister');
Route::post('/register','UsersController@postRegister')->name('postRegister');
Route::get('/','UsersController@getLogin')->name('getLogin');
Route::post('/','UsersController@postLogin')->name('postLogin');
Route::get('/admin','AdminController@getAdmin')->name('getAdmin');
Route::post('/admin','AdminController@postAdmin')->name('postAdmin');
Route::get('/admin-panel','AdminController@getAdminPanel')->name('getAdminPanel');

Route::group(['middleware' => ['user']], function () {

    Route::get('/index','RandevuController@getIndex')->name('getIndex');
    Route::get('/randevu-sorgula','RandevuController@getRandevu')->name('getRandevu');
    Route::post('/randevu-sorgula','RandevuController@postRandevu')->name('postRandevu');
    Route::get('/logout','RandevuController@getLogOut')->name('getLogOut');
    Route::get('/edit-randevu','RandevuController@getEditRandevu')->name('getEditRandevu');
    Route::post('/edit-randevu','RandevuController@postEditRandevu')->name('postEditRandevu');


});


Route::group(['middleware' => ['admin']], function () {

    Route::get('/all-birim','BirimController@getAllBirim')->name('getAllBirim');
    Route::get('/create-birim','BirimController@getCreateBirim')->name('getCreateBirim');
    Route::post('/create-birim','BirimController@postCreateBirim')->name('postCreateBirim');
    Route::get('/edit-birim','BirimController@getEditBirim')->name('getEditBirim');
    Route::post('/edit-birim','BirimController@postEditBirim')->name('postEditBirim');
    Route::get('/delete-birim','BirimController@getDeleteBirim')->name('getDeleteBirim');

    Route::get('/create-doktor','DoktorController@getCreateDoktor')->name('getCreateDoktor');
    Route::post('/create-doktor','DoktorController@postCreateDoktor')->name('postCreateDoktor');
    Route::get('/all-doktor','DoktorController@getAllDoktor')->name('getAllDoktor');
    Route::get('/edit-doktor','DoktorController@getEditDoktor')->name('getEditDoktor');
    Route::post('/edit-doktor','DoktorController@postEditDoktor')->name('postEditDoktor');
    Route::get('/delete-doktor','DoktorController@getDeleteDoktor')->name('getDeleteDoktor');


    Route::get('/all-randevu','RandevuController@getAllRandevu')->name('getAllRandevu');


});



