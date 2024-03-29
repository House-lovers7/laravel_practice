<?php

use App\Book;
use Illuminate\Http\Request;
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

/**
 * 本の一覧表示(books.blade.php)
 */
Route::get('/', function () {
    return view('welcome');
});

/**
 * 本を追加
 */
Route::post('/books', function (Request $request) {
    //
});

/**
 * 本を削除
 */
Route::delete('/book/{book}', function (Book $book) {
    //
});

Route::get('hello', function () {
    return '<html><body><h1>Hello</h1><p>This is sample page.</p></body><html>';
});
