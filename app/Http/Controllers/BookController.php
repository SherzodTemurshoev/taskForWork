<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Author;

class BookController extends Controller
{
    public function book()
    {
    	$books = Book::all();
    	return view('books.books', compact('books'));
    }

    public function create()
    {
    	$books = Book::all();
    	$authors = Author::all();
    	return view('books.create', compact('books', 'authors'));
    }

    public function store(Request $request)
    {
    	$this->validate($request, [
    		'name' => 'required|unique:books',
    	]);

    	$book = Book::create($request->all());
    	if ($request->input('authors')) {
    		$book->authors()->attach($request->input('authors'));
    	}
    	
    	return redirect()->route('books');
    }

    public function edit($id)
    {
    	$book = Book::findOrFail($id);
    	$authors = Author::get();
    	return view('books.edit', compact('book', 'authors'));
    }

    public function update(Request $request, $id)
    {
    	$book = Book::findOrFail($id);
    	$this->validate($request, [
    		'name' => 'required'
    	]);

    	$book->update($request->all());
    	$book->authors()->detach();
    	if ($request->input('authors')) {
    		$book->authors()->attach($request->input('authors'));
    	}

    	return redirect()->route('books');
    }

    public function destroy($id)
    {
    	$book = Book::find($id);
    	if ($book) {
            $book->authors()->detach();
            $book->delete();
        }

        return redirect()->route('books');
    }
}
