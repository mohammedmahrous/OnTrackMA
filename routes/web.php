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
Route::get('/',function(){
  return view('auth.login');
});


Route::get('/home','website\task\taskController@index');
Route::group(['middleware' => ['admin']], function () {
Route::get('/hh','BackEnd\HomeController@index');

/*usertype*/
Route::get('/createtype','BackEnd\UsertypeController@create')->name('createtype');
Route::post('/storetype','BackEnd\UsertypeController@store')->name('storetype');
Route::get('/Types','BackEnd\UsertypeController@index')->name('type');
Route::post('type/{id}','BackEnd\UsertypeController@update')->name('typs.update');
Route::get('/type/edit/{id}','BackEnd\UsertypeController@edit')->name('typs.edit');
Route::get('/type/delete/{id}','BackEnd\UsertypeController@destroy')->name('typs.delete');

/*user*/
Route::get('/createuser','BackEnd\UserController@create')->name('createuser');
Route::post('/storeuser','BackEnd\UserController@store')->name('storeuser');
Route::get('/User','BackEnd\UserController@index')->name('user');
Route::post('user/{id}','BackEnd\UserController@update')->name('user.update');
Route::get('/user/edit/{id}','BackEnd\UserController@edit')->name('user.edit');
Route::get('/user/delete/{id}','BackEnd\UserController@destroy')->name('user.delete');

/*tasks*/
Route::get('/createtasks','BackEnd\TasksController@create')->name('createtask');
Route::post('/storetasks','BackEnd\TasksController@store')->name('storetask');
Route::get('/Tasks','BackEnd\TasksController@index')->name('task');
Route::post('tasks/{id}','BackEnd\TasksController@update')->name('task.update');
Route::get('/tasks/edit/{id}','BackEnd\TasksController@edit')->name('task.edit');

/*status*/
Route::get('/createstatus','BackEnd\StatusController@create')->name('createstatus');
Route::post('/storestatus','BackEnd\StatusController@store')->name('storestatus');
Route::get('/Status','BackEnd\StatusController@index')->name('status');
Route::post('status/{id}','BackEnd\StatusController@update')->name('status.update');
Route::get('/status/edit/{id}','BackEnd\StatusController@edit')->name('status.edit');
});
Auth::routes();
