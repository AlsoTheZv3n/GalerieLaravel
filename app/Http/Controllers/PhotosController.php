<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Photos;

class PhotosController extends Controller
{
   


    public function index(int $galerieId) {

        return view ('galerieDetailOverview', [
            'Photos' => Photos::where('galerie_Id', $galerieId)->get(),
        ]);

    }

    public function view(int $photosId) {

        return view ('galeriesView', [
            'photo' => Photos::find($photosId),
        ]);

    }



    public function create(Request $request, int $galerieId) {
        
        $request->validate([
        'name'=>'required',
        'image' => 'required|mimes:jpeg,jpg,png|max:5048'
        ]);
        
        
        $newImageName = time() . '-' . $request->name . '.' . $request->image->extension();

        $request->image->move(public_path('Bilder'), $newImageName);

        $photo = new Photos();

        $name = $request->name;
        $photo->path = $newImageName;
        
        $photo->imagename = $name;
        $photo->galerie_id = $galerieId;
        
        $photo->save();

        return redirect('/');
    }


    public function edit(int $id) {
        $photo = Photos::find($id);

        return view('photosEdit', [
            'photo' => $photo
        ]);
    }

    public function update(Request $request, int $id) {
        $photo = Photos::find($id);

        $photo->imagename = $request->name;
        $photo->save();
        return redirect('/');


    }

}
