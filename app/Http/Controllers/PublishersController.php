<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Publishers;

class PublishersController extends Controller
{
    public function index()
    {
        $publishers = Publishers::all();
        return view('publishers', compact('publishers'));
    }

    public function show($id)
    {
        $publisher = Publishers::findOrFail($id);
        return view('publishers.show', compact('publisher'));
    }
}
