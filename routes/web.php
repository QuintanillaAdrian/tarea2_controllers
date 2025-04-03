<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BooksController;
use App\Http\Controllers\AuthorsController;
use App\Http\Controllers\PublishersController;

Route::get('/', function () {
    return view('main');
});

Route::get('/authors', [AuthorsController::class, 'index'])->name('authors.index');
Route::get('/authors/{id}', [AuthorsController::class, 'show'])->name('authors.show');;

Route::get('/books', [BooksController::class, 'index'])->name('books.index');
Route::get('/books/{id}', [BooksController::class, 'show'])->name('books.show');

Route::get('/publishers', [PublishersController::class, 'index'])->name('publishers.index');
Route::get('/publishers/{id}', [PublishersController::class, 'show'])->name('publishers.show');