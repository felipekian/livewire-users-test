<?php

use App\Livewire\CreateUser;
use App\Livewire\IndexUser;
use App\Livewire\UpdateUser;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', IndexUser::class);
Route::get('/create', CreateUser::class);
Route::get('/edit/{user}', UpdateUser::class)->name('edit');
