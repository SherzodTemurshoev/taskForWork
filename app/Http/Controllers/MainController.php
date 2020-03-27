<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Author;

class MainController extends Controller
{
    public function index()
    {
    	return view('index');
    }

}
