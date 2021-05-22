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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/todos', 'TodosController@index');
Route::post('/create/todo', 'TodosController@store');
Route::get('/todo/delete/{id}', 'TodosController@delete');
Route::get('/todo/update/{id}', 'TodosController@update');
Route::post('/todo/save/{id}', 'TodosController@save');
Route::get('/todos/completed/{id}', 'TodosController@completed');
