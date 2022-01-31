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


Route::get('/',  App\Http\Livewire\Home::class);
Route::get('/edit/{id}',  App\Http\Livewire\CharacterForm::class)->name('edit');
Route::get('/show/{id}',  App\Http\Livewire\CharacterInfo::class)->name('show');
// Route::post('/edit'. )


