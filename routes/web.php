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
	return view('auth.login');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//temples
Route::get('temples', 'TempleController@index')->name('temples'); //listado
Route::get('/temples/create', 'TempleController@create')->name('temples.create'); //formulario
Route::post('/temples', 'TempleController@store')->name('temples.store'); //registrar
Route::get('/temples/{temple}/edit', 'TempleController@edit')->name('temples.edit'); //formulario edicion
Route::post('/temples/{temple}/edit', 'TempleController@update')->name('temples.update'); //actualizar
Route::post('/temples/{temple}/delete', 'TempleController@destroy')->name('temples.destroy'); // form eliminar

//users_temples
Route::get('userstemples', 'UserTempleController@index')->name('userstemples.index'); //listado
Route::get('/userstemples/create', 'UserTempleController@create')->name('userstemples.create'); //formulario
Route::post('/userstemples', 'UserTempleController@store')->name('userstemples.store'); //registrar
Route::get('/userstemples/{userstemple}/edit', 'UserTempleController@edit')->name('userstemples.edit'); //formulario edicion
Route::post('/userstemples/{userstemple}/edit', 'UserTempleController@update')->name('userstemples.update'); //actualizar
Route::post('/userstemples/{userstemple}/delete', 'UserTempleController@destroy')->name('userstemples.destroy'); // form eliminar

//MANAGERS
Route::get('managers', 'ManagerController@index')->name('managers.index'); //listado
Route::get('/managers/create', 'ManagerController@create')->name('managers.create'); //formulario
Route::post('/managers', 'ManagerController@store')->name('managers.store'); //registrar
Route::get('/managers/{id}/edit', 'ManagerController@edit')->name('managers.edit'); //formulario edicion
Route::post('/managers/{id}/edit', 'ManagerController@update')->name('managers.update'); //actualizar
Route::post('/managers/{id}/delete', 'ManagerController@destroy')->name('managers.destroy'); // form eliminar

//PROPS
Route::get('props', 'PropController@index')->name('props.index'); //listado
Route::get('/props/create', 'PropController@create')->name('props.create'); //formulario
Route::post('/props', 'PropController@store')->name('props.store'); //registrar
Route::get('/props/{id}/edit', 'PropController@edit')->name('props.edit'); //formulario edicion
Route::post('/props/{id}/edit', 'PropController@update')->name('props.update'); //actualizar
Route::post('/props/{id}/delete', 'PropController@destroy')->name('props.destroy'); // form eliminar

//CATEGORIES
//PROPS
Route::get('categories', 'CategoryController@index')->name('categories.index'); //listado
Route::get('/categories/create', 'CategoryController@create')->name('categories.create'); //formulario
Route::post('/categories', 'CategoryController@store')->name('categories.store'); //registrar
Route::get('/categories/{category}/edit', 'CategoryController@edit')->name('categories.edit'); //formulario edicion
Route::post('/categories/{category}/edit', 'CategoryController@update')->name('categories.update'); //actualizar
Route::post('/categories/{category}', 'CategoryController@destroy')->name('categories.destroy'); // form eliminar

//FOLDERS
Route::get('folders', 'FolderController@index')->name('folders.index'); //listado
Route::get('/folders/create', 'FolderController@create')->name('folders.create'); //formulario
Route::post('/folders', 'FolderController@store')->name('folders.store'); //registrar
Route::get('/folders/{folder}/edit', 'FolderController@edit')->name('folders.edit'); //formulario edicion
Route::post('/folders/{folder}/edit', 'FolderController@update')->name('folders.update'); //actualizar
Route::post('/folders/{folder}', 'FolderController@destroy')->name('folders.destroy'); // form eliminar