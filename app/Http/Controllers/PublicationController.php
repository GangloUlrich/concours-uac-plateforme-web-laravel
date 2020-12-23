<?php

namespace App\Http\Controllers;

use App\Publication;
use Illuminate\Http\Request;

class PublicationController extends Controller
{
    public function index()
    {
        $publications = Publication::all();
        return view('admin.publications', array(
            'publications' => $publications
        ));
    }

    public function index0()
    {
        $publications = Publication::all();
        return view('home.publications', array(
            'publications' => $publications
        ));
    }

    public function index1()
    {
        $publications = Publication::all();
        return view('etudiant.publications', array(
            'publications' => $publications
        ));
    }

    public function index2()
    {
        $publications = Publication::all();
        return view('recruteur.publications', array(
            'publications' => $publications
        ));
    }
    public function show0($n)
    {
        $publications = Publication::where('id_publication', $n)->first();
        return view('home.show_publication', array(
            'publication' => $publications
        ));
    }

    public function show1($n)
    {
        $publications = Publication::where('id_publication', $n)->first();
        return view('etudiant.show_publication', array(
            'publication' => $publications
        ));

    }

    public function show2($n)
    {
        $publications = Publication::where('id_publication', $n)->first();
        return view('recruteur.show_publication', array(
            'publication' => $publications
        ));
    }


    public function editer()
    {
        return view('admin.ajouter_publications');
    }

    public function add(Request $request)
    {
        if ($request->hasFile('image'))
        {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('/img'), $imageName);
            $actualPath = '/img/'.$imageName;
            $publication = New Publication;
            $publication->image_publication = $actualPath;
            $publication->titre_publication = $request->input('titre');
            $publication->contenu_publication = $request->input('contenu');
            $publication->save();

            $publications = Publication::all();
            return view('admin.publications', array(
                'publications' => $publications
            ));
        }
    }

    public function edit($n)
    {
        $publication = Publication::where('id_publication', $n)->first();
        return view('admin.modifier_publications', array(
            'publication' => $publication
        ));
    }

    public function update(Request $request)
    {
        if ($request->hasFile('image'))
        {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('/img'), $imageName);
            $actualPath = '/img/'.$imageName;

            Publication::where('id_publication', $request->input('id_publication'))->update(['titre_publication' => $request->input('titre'),
                'contenu_publication' => $request->input('contenu'),
                'image_publication' => $actualPath]);

            /*$publication = Publication::where('id_publication', $request->input('id_publication'))->first();
            $publication->image_publication = $actualPath;
            $publication->titre_publication = $request->input('titre');
            $publication->contenu_publication = $request->input('contenu');
            $publication->save();*/

            $publications = Publication::all();
            return view('admin.publications', array(
                'publications' => $publications
            ));
        }

    }

    public function delete($n)
    {
        Publication::where('id_publication', $n)->delete();
        return redirect()->back();
    }
}
