<?php

namespace App\Http\Controllers;

use App\Astuce;
use Illuminate\Http\Request;

class AstucesController extends Controller
{
    public function index()
    {
        $astuces = Astuce::all();
        return view('admin.trucs_astuces', array(
            'astuces' => $astuces
        ));
    }

    public function index0()
    {
        $astuces = Astuce::all();
        return view('home.trucs_astuces', array(
            'astuces' => $astuces
        ));
    }

    public function index1()
    {
        $astuces = Astuce::all();
        return view('etudiant.trucs_astuces', array(
            'astuces' => $astuces
        ));
    }

    public function index2()
    {
        $astuces = Astuce::all();
        return view('recruteur.trucs_astuces', array(
            'astuces' => $astuces
        ));
    }

    public function editer()
    {
        return view('admin.ajouter_trucs_astuces');
    }

    public function add(Request $request)
    {
        if ($request->hasFile('image'))
        {
            $image = $request->file('image');
            $imageName = time().'.'.$image->getClientOriginalExtension();
            $image->move(public_path('/img'), $imageName);
            $actualPath = '/img/'.$imageName;
            $astuce = New Astuce;
            $astuce->image_astuce = $actualPath;
            $astuce->titre_astuce = $request->input('titre');
            $astuce->contenu_astuce = $request->input('contenu');
            $astuce->save();

            $astuces = Astuce::all();
            return view('admin.trucs_astuces', array(
                'astuces' => $astuces
            ));
        }
    }

    public function show0($n)
    {
        $astuces = Astuce::where('id_astuce', $n)->first();
        return view('home.show_astuce', array(
            'astuce' => $astuces
        ));
    }

    public function show1($n)
    {
        $astuces = Astuce::where('id_astuce', $n)->first();
        return view('etudiant.show_astuces', array(
            'astuce' => $astuces
        ));
    }

    public function show2($n)
    {
        $astuces = Astuce::where('id_astuce', $n)->first();
        return view('recruteur.show_astuces', array(
            'astuce' => $astuces
        ));
    }

    public function edit($n)
    {
        $astuce = Astuce::where('id_astuce', $n)->first();
        return view('admin.modifier_trucs_astuces', array(
            'astuce' => $astuce
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

            Astuce::where('id_astuce', $request->input('id_astuce'))->update(['titre_astuce' => $request->input('titre'),
                'contenu_astuce' => $request->input('contenu'),
                'image_astuce' => $actualPath]);

            /*$astuce = Actualite::where('id_actualite', $request->input('id_actualite'))->first();
            $astuce->image_actualite = $actualPath;
            $astuce->titre_actualite = $request->input('titre');
            $astuce->contenu_actualite = $request->input('contenu');
            $astuce->save();*/

            $astuces = Astuce::all();
            return view('admin.trucs_astuces', array(
                'astuces' => $astuces
            ));
        }

    }

    public function delete($n)
    {
        Astuce::where('id_astuce', $n)->delete();
        return redirect()->back();
    }
}
