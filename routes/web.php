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

// When user requests homepage, return welcome view.
Route::get('/', function () {
    return view('welcome');
})->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/pets')
        ->uses('Pets\PetsController@index')
        ->name('pets.index');
            
Route::middleware('auth')
    ->group(function () {
        Route::put('/pets/store')
            ->uses('Pets\PetsController@store')
            ->name('pets.store');
        
        Route::delete('/pets/delete/{pet}')
            ->uses('Pets\PetsController@destroy')
            ->name('pets.destroy');
        
        Route::put('/pets/save/{pet}')
            ->uses('Pets\PetsController@update')
            ->name('pets.update');
        
        Route::get('/pets/edit/{pet}')
            ->middleware('yourPet')
            ->uses('Pets\PetsController@edit')
            ->name('pets.edit');
    });