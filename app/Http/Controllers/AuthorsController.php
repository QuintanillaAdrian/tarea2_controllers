<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AuthorsController extends Controller
{
    public function index()
    {
        $authors = [
            ["id" => 1, "author" => "Abraham Silberschatz", "nationality" => "Israelis/American", "birth" => "1952", "fields" => "Database Systems, Operating Systems"],
            ["id" => 2, "author" => "Andrew S. Tanenbaum", "nationality" => " Dutch/American", "birth" => "1944", "fields" => " Distributed computing, Operating Systems"],

        ];
        return view('authors', ['authors' => $authors]);
    }
}
