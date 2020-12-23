<?php

namespace App\Http\Controllers;

use App\Galerie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

class GalerieController extends Controller
{
    public function index()
    {
        $photos = Galerie::all();
        return view('admin.galerie', array(
            'photos' => $photos
        ));
    }

    public function index0()
    {
        $photos = Galerie::all();
        return view('home.galerie', array(
            'photos' => $photos
        ));
    }

    public function index1()
    {
        $photos = Galerie::all();
        return view('etudiant.galerie', array(
            'photos' => $photos
        ));
    }

    public function index2()
    {
        $photos = Galerie::all();
        return view('recruteur.galerie', array(
            'photos' => $photos
        ));
    }

    public function add(Request $request)
    {
        if ($request->hasFile('image'))
        {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('/img'), $imageName);
            $actualPath = '/img/'.$imageName;
            $photo = New Galerie;
            $photo->lien_photo = $actualPath;
            $photo->description_photo = $request->input('description');
            $photo->save();
            return redirect()->back();
        }
    }

    public function edit($n)
    {
        $photo = Galerie::where('id_photo', $n)->first();
        $photos = Galerie::all();
        return view('admin.modifier_photos', array(
            'photos' => $photos,
            'photo' => $photo));
    }

    public function update(Request $request)
    {
        $id= $request->input('id_photo');

        if ($request->hasFile('image'))
        {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('/img'), $imageName);
            $actualPath = '/img/'.$imageName;

            Galerie::where('id_photo', $request->input('id_photo'))->update(['lien_photo' => $actualPath,
                'description_photo' => $request->input('description')]);

            /*$photo = Galerie::where('id_photo', $request->input('id_photo'))->first();
            $photo->lien_photo = $actualPath;
            $photo->description_photo = $request->input('description');
            $photo->save();*/

            $photos = Galerie::all();
            return view('admin.galerie', array(
                'photos' => $photos
            ));
        }
    }

    public function delete($n)
    {
        Galerie::where('id_photo',$n)->delete();
        return redirect()->back();
    }
}
