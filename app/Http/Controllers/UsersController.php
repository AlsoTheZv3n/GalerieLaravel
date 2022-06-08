<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function edit($id){
        $post = POST::find($id);
        return view('posts.edit')->with('post', $post);

    }
}
