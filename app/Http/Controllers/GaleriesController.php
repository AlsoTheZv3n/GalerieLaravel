<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GaleriesController extends Controller
{
   

    public function index(){

        return view ('galerie', [
            'Galeries' => Galerie::all(),
        ]);
        
    }

    public function edit(int $id) {
        $galerie = Galerie::find($id);

        return view('galeriesEdit', [
            'galerie' => $galerie
        ]);
    }
    /*
    public function update(Request $request, int $id) {
        $galerie = Galerie::find($id);

        $name = $request->name;


        $drug->name = $name;
    

        $galerie->save();

        return redirect('/');
    }

    */



    //Alle Galerien 
    public function galeriesOverview(int $id){

        $galeries = Galerie::find($id);
        $photos = Photo::where('photo_id', $id)->get();

        return view ('galeriesOverview', [
            'galeries' => $galeries,
            'photos' => $photos,
        ]);
        
    }

    //Bilder von einer Galerie 
    public function galeriesDetailOverview(int $id){

        $galeries = Galerie::find($id);
        $photos = Photo::where('photo_id', $id)->get();

        return view ('galeriesDetailOverview', [
            'galeries' => $galeries,
            'photos' => $photos,
        ]);
        
    }


    //Einzelnes Bilder von den Bildern 
    public function galeriesview(int $id){

        $galeries = Galerie::find($id);
        $photos = Photo::where('photo_id', $id)->get();

        return view ('galeriesview', [
            'galeries' => $galeries,
            'photos' => $photos,
        ]);
        
    }


}
