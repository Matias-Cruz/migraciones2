<?php

namespace App\Http\Controllers;
use App\Models\Author;
use Illuminate\Http\Request;

class AuthorController extends Controller
{
    public function index() {
        return Author::all();
    }

    public function show($id){
        return Author::find($id);
    }

    // public function store(Request $request)
    // {
    //     return Author::updateOrCreate(
    //         [
    //             'username'=> $request->title,
    //         ],
    //         [
    //             'body' => $request->body
    //         ]
    //     );
    // }
}
