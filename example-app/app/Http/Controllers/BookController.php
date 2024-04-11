<?php

namespace App\Http\Controllers;
use App\Models\Book;
use Illuminate\Http\Request;

class BookController extends Controller
{
    public function index() {
        return Book::all();
    }

    public function show($id){
        return Book::find($id);
    }

    public function store(Request $request)
    {
        $book = new Book();

        $book-> name = $request-> name;

        $book->save();
        // return redirect()->route('users');
    }

    public function update(Request $request, $id){
        $book = Book::find($id);
        $book-> name = $request-> name;
        $book-> save();
    }

    public function delete($id){
        $book = Book::find($id);
        $book -> delete();
    }
}
