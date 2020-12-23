<?php

namespace App\Http\Controllers;

use App\User;
use App\Opportunite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class StageController extends Controller
{
    public function index()
    {
        $stages = Opportunite::all()->where('type', 'stage');
        return view('admin.stages', array(
            'stages' => $stages,
        ));
    }

    public function index0()
    {
        if (Auth::user()->statut == "E") {
            $stages = Opportunite::all()->where('type', 'stage');
            return view('etudiant.stage', array(
                'stages' => $stages,
            ));
        } elseif (Auth::user()->statut == "R") {
            $stages = Opportunite::all()->where('type', 'stage');
            return view('recruteur.stage', array(
                'stages' => $stages,
            ));
        }
    }

    public function index1()
    {
        $stages = Opportunite::all()->where('type', 'stage');
        return view('etudiant.stage', array(
            'stages' => $stages,
        ));
    }

    public function index2()
    {
        $stages = Opportunite::all()->where('type', 'stage');
        return view('recruteur.stage', array(
            'stages' => $stages,
        ));
    }

    public function delete($id)
    {
        Opportunite::where('id_opportunite', $id)->delete();
        return redirect()->back();
    }

    public function editer()
    {
        return view('admin.ajouter_opportunites');
    }

    public function add(Request $request)
    {
        $type = $request->input('type');
        if ($request->input('active') == "oui") {
            Opportunite::create([
                'recruteur_id' => $request->input('id_recruteur'),
                'type' => $request->input('type'),
                'titre_opportunite' => $request->input('titre'),
                'description' => $request->input('description'),
                'delai' => $request->input('delai'),
                'activation' => '1'
            ]);
        } else {
            Opportunite::create([
                'recruteur_id' => $request->input('id_recruteur'),
                'type' => $request->input('type'),
                'titre_opportunite' => $request->input('titre'),
                'description' => $request->input('description'),
                'delai' => $request->input('delai'),
                'activation' => '0'
            ]);
        }

        if ($type == "stage") {
            $stages = Opportunite::all()->where('type', 'stage');
            return view('admin.stages', array(
                'stages' => $stages,
            ));
        } else {
            $emplois = Opportunite::all()->where('type', 'emploi');
            return view('admin.emplois', array(
                'emplois' => $emplois,
            ));
        }
    }

    public function edit($id)
    {
        $opportunites = Opportunite::where('id_opportunite', $id)->first();
        return view('admin.modifier_stage', array(
            'opportunites' => $opportunites
        ));
    }

    public function update(Request $request)
    {
        $id = $request->input('id_opportunites');
        $type = $request->input('type');

        if ($type == "stage") {
            Opportunite::where('id_opportunite', $id)->update([
                'titre_opportunite' => $request->input('titre'),
                'description' => $request->input('description'),
                'delai' => $request->input('delai')
            ]);

            $stages = Opportunite::all()->where('type', $type);
            return view('admin.stages', array(
                'stages' => $stages,
            ));
        } elseif ($type == 'emploi') {
            Opportunite::where('id_opportunite', $id)->update([
                'titre_opportunite' => $request->input('titre'),
                'description' => $request->input('description'),
                'delai' => $request->input('delai')
            ]);

            $emplois = Opportunite::all()->where('type', $type);
            return view('admin.emplois', array(
                'emplois' => $emplois,
            ));
        }
    }

    public function lock($id)
    {
        $opportunite = Opportunite::where('id_opportunite', $id)->first();
        $actif = $opportunite->activation;

        if ($actif == false) {
            Opportunite::where('id_opportunite', $id)->update(['activation' => '1']);
            return redirect()->back();
        } else {
            Opportunite::where('id_opportunite', $id)->update(['activation' => '0']);
            return redirect()->back();
        }
    }
}
