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
Route::group(array('prefix' => 'students'), function () {
//Route::get('students', [StudentController::class, 'index'])->name('students.index');
Route::get('list', array('as' => 'students.index', 'uses' => 'StudentController@index'))->middleware('auth');
Route::get('anydata', array('as' => 'students.anydata', 'uses' => 'StudentController@data'))->middleware('auth');

//Insert
Route::get('add', array('as' => 'students.add', 'uses' => 'StudentController@create'))->middleware('auth');
Route::post('add', array('as' => 'students.add.post', 'uses' => 'StudentController@store'))->middleware('auth');
//Edit
Route::get('edit/{id}', array('as' => 'students.edit', 'uses' => 'StudentController@edit'))->middleware('auth');
Route::post('edit/{id}', array('as' => 'students.edit.post', 'uses' => 'StudentController@update'))->middleware('auth');

});
Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
