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

        return view('galeriesEdit', [
            'galerie' => $galerie
        ]);
    }



    public function create(Request $request) {
        
        $request->validate([
        'name'=>'required',
        'image' => 'required|mimes:jpeg,jpg,png|max:5048'
        ]);
        
        
        $newImageName = time() . '-' . $request->name . '.' . $request->image->extension();

        $request->image->move(public_path('Bilder'), $newImageName);


        $galerie = Galerie::create ([
        'name'=> $request->input('name'),
        'image_path' => $newImageName

        ]);


        $galerie = new galerie();

        $name = $request->name;
        
        $galerie->galeriename = $name;
        $galerie->user_id = auth()->user()->id;
        
        $galerie->save();

        return redirect('/');
    }

    /*
    public function update(Request $request, int $id) {
        $galerie = Galerie::find($id);

        $name = $request->name;


        $drug->name = $name;
    

        $galerie->save();

        return redirect('/');
    }

    public function galeriesOverview(int $id){

        $galeries = Galerie::find($id);
        $photos = Photo::where('photo_id', $id)->get();

        return view ('galeriesOverview', [
            'galeries' => $galeries,
            'photos' => $photos,
        ]);
        
    }

    public function galeriesDetailOverview(int $id){

        $galeries = Galerie::find($id);
        $photos = Photo::where('photo_id', $id)->get();

        return view ('galeriesDetailOverview', [
            'galeries' => $galeries,
            'photos' => $photos,
        ]);
        
    }

    public function galeriesview(int $id){

        $galeries = Galerie::find($id);
        $photos = Photo::where('photo_id', $id)->get();

        return view ('galeriesview', [
            'galeries' => $galeries,
            'photos' => $photos,
        ]);
        
    }

    */


}
