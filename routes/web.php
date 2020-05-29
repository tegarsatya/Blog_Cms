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

Route::get('/todo', [
    'uses'=> 'TodoController@index',
    'as'  => 'home1'
]);


Route::post('/create/todo', [
    'uses'=> 'TodoController@store'
]);

Route::get('/todo/delete/{id}', [
    'uses'=> 'TodoController@delete',
    'as'  => 'todo.delete'
]);

Route::get('/todo/update/{id}', [
    'uses'=> 'TodoController@update',
    'as'  => 'todo.update'
]);

Route::post('/todo/save/{id}', [

    'uses'=> 'TodoController@save',
    'as'  => 'todo.save'
]);

Route::get('/todo/completed/{id}', [
    'uses'=> 'TodoController@completed',
    'as'  => 'task.completed'
]);


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
