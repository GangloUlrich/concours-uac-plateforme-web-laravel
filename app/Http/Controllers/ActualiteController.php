<?php

namespace App\Http\Controllers;

use App\Actualite;
use Illuminate\Http\Request;

class ActualiteController extends Controller
{
    public function index()
    {
        $actualites = Actualite::all();
        return view('admin.actualites', array(
            'actualites' => $actualites
        ));
    }

    public function index0()
    {
        $actualites = Actualite::all();
        return view('home.actualites', array(
            'actualites' => $actualites
        ));
    }

    public function index1()
    {
        $actualites = Actualite::all();
        return view('etudiant.actualites', array(
            'actualites' => $actualites
        ));
    }

    public function index2()
    {
        $actualites = Actualite::all();
        return view('recruteur.actualites', array(
            'actualites' => $actualites
        ));
    }

    public function show0($n)
    {
        $articles = Actualite::where('id_actualite', $n)->first();
        return view('home.article', array(
            'article' => $articles
        ));
    }

    public function show1($n)
    {
        $articles = Actualite::where('id_actualite', $n)->first();
        return view('etudiant.article', array(
            'article' => $articles
        ));
    }

    public function show2($n)
    {
        $articles = Actualite::where('id_actualite', $n)->first();
        return view('recruteur.article', array(
            'article' => $articles
        ));
    }

    public function editer()
    {
        return view('admin.ajouter_actualites');
    }

    public function add(Request $request)
    {
        if ($request->hasFile('image'))
        {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('/img'), $imageName);
            $actualPath = '/img/'.$imageName;
            $actualite = New Actualite;
            $actualite->image_actualite = $actualPath;
            $actualite->titre_actualite = $request->input('titre');
            $actualite->contenu_actualite = $request->input('contenu');
            $actualite->save();

            $actualites = Actualite::all();
            return view('admin.actualites', array(
                'actualites' => $actualites
            ));
        }
    }

    public function edit($n)
    {
        $actualite = Actualite::where('id_actualite', $n)->first();
        return view('admin.modifier_actualites', array(
            'actualite' => $actualite
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

            Actualite::where('id_actualite', $request->input('id_actualite'))->update(['titre_actualite' => $request->input('titre'),
                'contenu_actualite' => $request->input('contenu'),
                'image_actualite' => $actualPath]);

            /*$actualite = Actualite::where('id_actualite', $request->input('id_actualite'))->first();
            $actualite->image_actualite = $actualPath;
            $actualite->titre_actualite = $request->input('titre');
            $actualite->contenu_actualite = $request->input('contenu');
            $actualite->save();*/

            $actualites = Actualite::all();
            return view('admin.actualites', array(
                'actualites' => $actualites
            ));
        }

    }

    public function delete($n)
    {
        Actualite::where('id_actualite', $n)->delete();
        return redirect()->back();
    }
}
