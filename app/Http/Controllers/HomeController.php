<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $id = auth()->id();

        $users = User::find($id);

        if($users->statut == 'E')
            return view('etudiant.accueil');
        else
            return view('recruteur.accueil');
    }
}
