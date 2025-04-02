<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BooksController extends Controller
{
    public function index()
    {
        $books = [
            ["id" => 1, "title" => "Operating System Concepts", "edition" => "9th", "copyright" => 2012, "pages" => 976, ],
            ["id" => 2, "title" => "Database System Concepts", "edition" => "6th", "copyright" => 2010, "pages" => 1376, ],
            ["id" => 3, "title" => "Computer Networks", "edition" => "5th", "copyright" => 2010, "pages" => 960, ],
            ["id" => 4, "title" => "Modern Operating Systems", "edition" => "4th", "copyright" => 2014, "pages" => 1136, "author" => "Andrew S. Tanenbaum", "publisher" => "Pearson Education"],
        ];
        return view('books', ['books' => $books]);
    }
}