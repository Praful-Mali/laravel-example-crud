<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    if(Auth::user()){
        return view('home');
    }else{
        return view('welcome');
    }
});

Auth::routes();

Route::group(['middleware' => ['web','auth']], function () {

    Route::get('/home', ['as' => 'index','uses' => 'HomeController@index']);

    Route::get('/books/search',['as' => 'books.search','uses' => 'BooksController@search']);
    Route::get('/books', ['as' => 'books.index','uses' => 'BooksController@index']);
    Route::get('/books/add',['as' => 'books.add','uses' => 'BooksController@add']);
    Route::get('/books/{book_id}',['as' => 'books.edit','uses' => 'BooksController@edit']);
    Route::post('/books/save',['as' => 'books.save','uses' => 'BooksController@save']);
    Route::patch('/books/{book_id}',['as' => 'books.update','uses' => 'BooksController@update']);
    Route::delete('/books/{book_id}',['as' => 'books.destroy','uses' => 'BooksController@destroy']);

});
