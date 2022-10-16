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
})->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//********************************* PROFILE *****************************************************
Route::get('profile/index','ProfileController@index')->name('profile.index');
Route::put('profile/update/{id}','ProfileController@update')->name('profile.update');
Route::get(('cancelarProfile'), function(){
    return redirect()->route('home')->with('datos', 'Acción Cancelada');
})->name('cancelarProfile');

//********************************* PERMIT *****************************************************
Route::get('profile/index','ProfileController@index')->name('profile.index');
Route::get('mantenimiento/empleado/create','EmployeeController@create')->name('empleado.create');
Route::post('mantenimiento/empleado/store','EmployeeController@store')->name('empleado.store');
Route::get('mantenimiento/empleado/edit/{id}','EmployeeController@edit')->name('empleado.edit');
Route::put('mantenimiento/empleado/update/{id}','EmployeeController@update')->name('empleado.update');
Route::get('supplier/edit/{id}','SupplierController@edit')->name('supplier.edit');
Route::get(('cancelarProfile'), function(){
    return redirect()->route('home')->with('datos', 'Acción Cancelada');
})->name('cancelarProfile');


