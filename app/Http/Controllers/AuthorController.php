<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Book;
use App\Author;

class AuthorController extends Controller
{
    public function author()
    {
    	$authors = Author::all();
    	return view('authors.authors', compact('authors'));
    }

    public function create()
    {
    	$author = new Author();
    	$books = Book::get();
    	return view('authors.create', compact('author', 'books'));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:authors',
        ]);

    	$author = Author::create($request->all());
    	if ($request->input('book')) {
    		$author->books()->attach($request->input('book'));
    	}
    	
    	return redirect()->route('authors');
    }

    public function show($id)
    {
        
    }

    public function edit($id)
    {
    	$author = Author::findOrFail($id);
        $books = Book::all();
        return view('authors.edit', compact('author', 'books'));
    }

    public function update(Request $request, $id)
    {
        $author = Author::findOrFail($id);
        $this->validate($request, [
            'name' => 'required',
        ]); 

    	$author->update($request->all());
        // $author->fill($request->all());
        // $author->save();
    	$author->books()->detach();
    	if ($request->input('book')) {
    		$author->books()->attach($request->input('book'));

    	}

    	return redirect()->route('authors');
    }

    public function destroy($id)
    {
        $author = Author::find($id);
        if ($author) {
            $author->books()->detach();
            $author->delete();
        }

        return redirect()->route('authors');
    }

}
