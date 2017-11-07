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

/*Route::get('/', function () {
    return view('welcome');
});
*/
//Route::resource('itemCRUD','ItemCRUDController');
Route::get('/',['as' =>'crud.index', 'uses' => 'CRUDController@index']);
Route::get('crud/create',['as' =>'crud.create', 'uses' => 'CRUDController@create']);
Route::post('crud/store',['as' =>'crud.store', 'uses' => 'CRUDController@store']);
Route::any('crud/edit/{id}',['as' =>'crud.edit', 'uses' => 'CRUDController@edit']);
Route::delete('crud/destroy/{id}',['as' =>'crud.destroy', 'uses' => 'CRUDController@destroy']);
Route::any('crud/update/{id}',['as' =>'crud.update', 'uses' => 'CRUDController@update']);