<?php

use Illuminate\Support\Facades\Route;
use \App\Http\Livewire\Counter;
use \App\Http\Livewire\Todos;

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
    return view('dashboard');
});

//Route::get('counter', function (){
//    return view('counter');
//});

Route::get('counter', Counter::class);
Route::get('todos', Todos::class);

Route::get('posts', \App\Http\Livewire\Post\Index::class);
Route::get('posts/{id}', \App\Http\Livewire\Post\Show::class);
Route::get('posts/create', \App\Http\Livewire\Post\Create::class);

Route::get('search-user', function (){
    return view('search-user');
});

