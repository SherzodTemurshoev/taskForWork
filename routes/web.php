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
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=library
DB_USERNAME=root
DB_PASSWORD=
|
*/

Route::get('/', 'MainController@index')->name('index');

Route::get('/authors', 'AuthorController@author')->name('authors');
//создание автора
Route::get('/authors/create', 'AuthorController@create')->name('authors.create');
Route::post('/authors', 'AuthorController@store')->name('authors.store');
//обновление автора
Route::get('/authors/{id}/edit', 'AuthorController@edit')->name('authors.edit');
Route::patch('/authors/{id}', 'AuthorController@update')->name('authors.update');
//удаление автора
Route::get('/authors/{id}', 'AuthorController@destroy')->name('authors.destroy');


Route::get('/books', 'BookController@book')->name('books');
// создание (добавление) книги
Route::get('/books/create', 'BookController@create')->name('books.create');
Route::post('/books', 'BookController@store')->name('books.store');
// обновление книги
Route::get('/books/{id}/edit', 'BookController@edit')->name('books.edit');
Route::patch('/books/{id}', 'BookController@update')->name('books.update');
//удаление автора
Route::get('/books/{id}', 'BookController@destroy')->name('books.destroy');


