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
        // updateOrCreate
        // return User::updateOrCreate(
        //     [
        //         'username'=> $request->username,
        //     ],
        //     [
        //         'body' => $request->body
        //     ]
        // );

        // firstOrCreate
        return User::firstOrCreate(
        [
            'username' => $request->username
        ]
    );

        // firstOrNew
        // $user = User::firstOrNew(
        //     [
        //         'username'=> $request->username,
        //     ],
        //     [
        //         'body'=> $request->body,
        //     ],
        //     // [
        //     //     'username'=> $request->username,
        //     // ],
        
        // );
        
        // $user->save();
        
        // where (es reeemplazado por firstOrCreate)
        // $user = User::whereName('username',$request->username);
        // if (!$user) return User::create($request->all());
        // return response()->json($user);
        // whereName
        // return User::whereName($request->name)->firstOr(function () use ($request) {
        //     return User::create([
        //         'name'=>$request->name,
        //     ]);
        // });

        // Simple
        // $user = new User();

        // $user-> username = $request-> username;

        // $user->save();
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
