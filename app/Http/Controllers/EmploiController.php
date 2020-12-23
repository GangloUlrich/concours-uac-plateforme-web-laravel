<?php

namespace App\Http\Controllers;

use App\User;
use App\Opportunite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class EmploiController extends Controller
{
    public function index()
    {
        $emplois = Opportunite::all()->where('type', 'emploi');
        return view('admin.emplois', array(
            'emplois' => $emplois,
        ));
    }

    public function index0()
    {
        if (Auth::user()->statut == "E") {
            $emplois = Opportunite::all()->where('type', 'emploi');
            return view('etudiant.emploi', array(
                'emplois' => $emplois,
            ));
        } elseif (Auth::user()->statut == "R") {
            $emplois = Opportunite::all()->where('type', 'emploi');
            return view('recruteur.emploi', array(
                'emplois' => $emplois,
            ));
        }
    }

    public function index1()
    {
        $emplois = Opportunite::all()->where('type', 'emploi');
        return view('etudiant.emploi', array(
            'emplois' => $emplois,
        ));
    }

    public function index2()
    {
        $emplois = Opportunite::all()->where('type', 'emploi');
        return view('recruteur.emploi', array(
            'emplois' => $emplois,
        ));
    }
}
