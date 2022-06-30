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

        @foreach($galerie as $items){
            $galerie = Galeries::where('user_id', $id)->get();
            /* return View:make('viewname')->with('products', $products);*/
        }
        
        @foreach($photos as $items){
            $photos = Photos::where('galerie_id', $galerie->id)->get();
            /* return View:make('viewname')->with('products', $products);*/
        }


        $user = User::find($id);

        $photos->each( function( $item, $key ) {
            $item->delete();
        } );
        $galerie->each( function( $item, $key ) {
            $item->delete();

        $user->delete();

        return redirect('/');
    }


}
