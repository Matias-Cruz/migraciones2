<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index() {
        return User::all();
    }

    public function show($id){
        return User::find($id);
    }

    public function store(Request $request)
    {
        $user = new User();

        $user-> username = $request-> username;

        $user->save();
        // return redirect()->route('users');
    }

    public function update(Request $request, $id){
        $user = User::find($id);
        $user-> username = $request-> username;
        $user-> save();
    }

    public function delete($id){
        $user = User::find($id);
        $user -> delete();
    }
}
