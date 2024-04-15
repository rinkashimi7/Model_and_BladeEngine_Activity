<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index()
{
    $books = \App\Models\Book::all();

    return view('index', compact('books'));
}
}