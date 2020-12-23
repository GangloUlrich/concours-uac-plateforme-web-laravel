<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class InstitutionController extends Controller
{
    public function index1()
    {
        return view('etudiant.institutions');
    }

    public function index2()
    {
        return view('recruteur.institutions');
    }
}
