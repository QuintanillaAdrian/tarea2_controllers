<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Book;

class BooksController extends Controller
{
    public function index()
    {
        $books = Book::with(['author', 'publisher'])->get();
        return view('books', compact('books'));
    }

    public function show($id)
    {
        $book = Book::with(['author', 'publisher'])->findOrFail($id);
        return view('books.show', compact('book'));
    }
}