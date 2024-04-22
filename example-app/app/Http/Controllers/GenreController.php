<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;

class GenreController extends Controller
{
    public function index() {
        return Genre::all();
    }

    public function destroy(Genre $genre){
        return Genre::destroy($genre->id);
    }

    public function hardDelete(){
        return Genre::onlyTrashed()->forceDelete();
    }
}
