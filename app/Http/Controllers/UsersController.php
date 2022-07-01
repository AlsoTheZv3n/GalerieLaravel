<?php

namespace App\Http\Controllers;
use App\Models\User;
use App\Models\Galeries;
use App\Models\Photos;


use Illuminate\Http\Request;

class UsersController extends Controller
{
    public function edit($id){
        $post = POST::find($id);
        return view('posts.edit')->with('post', $post);

    }

    public function destroy($id){

        $galeries = Galeries::where('user_id', $id)->get();

        foreach($galeries as $galerie) {
            $photos = Photos::where('galerie_id', $galerie->id)->get();
            $photos->each->delete();
        }

        $galeries->each->delete();

        $user = User::find($id);

        $user->delete();

        return redirect('/');
    }


}
