<?php

namespace App\Http\Controllers;
use App\Models\Author;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AuthorController extends Controller
{
    public function index() {
        return Author::all();
    }

    public function show($id){
        return Author::find($id);
    }

    public function store(Request $request)
    {
        // firstOrCreate
        return Author::firstOrCreate(
        [
            'name' => $request->username,
            'image' => Storage::files('image'),
        ]
        );
    }
}
