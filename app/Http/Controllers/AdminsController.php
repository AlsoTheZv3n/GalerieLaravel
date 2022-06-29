<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class AdminsController extends Controller
{
    public function index(){

        return view ('admin', [
            'Users' => User::all(),
        ]);
        
    }


    public function edit(int $id) {
        $user = User::find($id);

        return view('adminEdit', [
            'user' => $user,
            'users' => User::all(),
        ]);
    }

    public function update(Request $request, int $id) {
        $user = User::find($id);

        $user->username = $request->name;
        $user->save();
        return redirect('/');


    }

}
