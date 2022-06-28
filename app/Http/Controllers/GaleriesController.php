<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Galeries as Galerie;


class GaleriesController extends Controller
{
   

    public function index(){

        return view ('galeriesOverview', [
            'Galeries' => Galerie::all(),
        ]);
        
    }

    public function edit(int $id) {
        $galerie = Galerie::find($id);

        return view('galerieEdit', [
            'galerie' => $galerie
        ]);
    }

    public function update(Request $request, int $id) {
        $galerie = Galerie::find($id);

        $galerie->galeriename = $request->name;
        $galerie->save();
        return redirect('/');


    }





    public function create(Request $request) {
        
        $request->validate([
        'name'=>'required',
        'image' => 'required|mimes:jpeg,jpg,png|max:5048'
        ]);
        
        
        $newImageName = time() . '-' . $request->name . '.' . $request->image->extension();

        $request->image->move(public_path('Bilder'), $newImageName);

        $galerie = new Galerie();

        $name = $request->name;
        $galerie->image_path = $newImageName;
        
        $galerie->galeriename = $name;
        $galerie->user_id = auth()->user()->id;
        
        $galerie->save();

        return redirect('/');
    }



}
