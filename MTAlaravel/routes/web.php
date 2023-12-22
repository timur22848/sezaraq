<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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


Route::get('/posts', [PostController::class, 'index']);
Route::get('/', function () {
    return view('index');
});

Route::get('price', function () {
    return view('price');
})->name('price');

Route::get('compl', function () {
    return view('compl');
})->name('compl');



// Route::get('/posts', [PostController::class, 'index'])->name('posts.index');


Route::get('contacts', function () {
    return view('contact');
})->name('contact');


Route::get('catalog', function () {
    return view('catalog');
})->name('catalog');

Route::get('/items', 'ItemController@index'); // показать все элементы
Route::get('/items/create', 'ItemController@create'); // показать форму создания элемента
Route::post('/items', 'ItemController@store'); // сохранить созданный элемент
Route::get('/items/{id}', 'ItemController@show'); // показать информацию об элементе
Route::get('/items/{id}/edit', 'ItemController@edit'); // показать форму редактирования элемента
Route::put('/items/{id}', 'ItemController@update'); // обновить элемент
Route::delete('/items/{id}', 'ItemController@destroy'); // удалить элемент



Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
