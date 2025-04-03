<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Author;

class AuthorsController extends Controller
{
    public function index()
    {
        $authors = Author::all();
        return view('authors', compact('authors'));
    }

    public function show($id)
    {
        $author = Author::findOrFail($id);
        return view('authors.show', compact('author'));
    }
}
