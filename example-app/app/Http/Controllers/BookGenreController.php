<?php

namespace App\Http\Controllers;

use App\Models\BookGenre;
use Illuminate\Http\Request;

class BookGenreController extends Controller
{
    public function index() {
        return BookGenre::all();
    }
}
