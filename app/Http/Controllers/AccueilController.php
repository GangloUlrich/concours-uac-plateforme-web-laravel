<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccueilController extends Controller
{
    public function index()
    {
        return view('admin.dashboard');
    }

    public function index1()
    {
        return view('etudiant.accueil');
    }

    public function index2()
    {
        return view('recruteur.accueil');
    }
}
