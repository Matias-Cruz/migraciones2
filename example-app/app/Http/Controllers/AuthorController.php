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
            'name' => $request->name,
            'last_names' => $request->last_names,
            'image' => $request->file('image')->store('public/images'),
            // 'image' => Storage::files('image'),
        ]
        );
    }

    public function storeWImage(Request $request)
    {
        // firstOrCreate
        return Author::firstOrCreate(
        [
            'name' => $request->name,
            'last_names' => $request->last_names,
            // 'image' => $request->file('image')->store('public/images'),
            // 'image' => Storage::files('image'),
        ]
        );
    }

    public function update(Request $request, $id){
        $author = Author::find($id);
        $author-> name = $request-> name;
        $author-> last_names = $request-> last_names;
        $author-> image = $request-> image;
        $author-> save();
    }

    public function destroy(Author $id){
        return Author::destroy($id->id);
    }
}
