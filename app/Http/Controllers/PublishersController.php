<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PublishersController extends Controller
{
    public function index()
    {
        $publishers = [
            ["id" => 1, "name" => "John Wiley & Sons", "country" => "United States", "founded" => "1807", "genere" => "Academic"],
            ["id" => 2, "name" => "Pearson Education", "country" => "United Kingdom", "founded" => "1844", "genere" => "Education"],
        ];
        return view('publishers', ['publishers' => $publishers]);
    }
}
