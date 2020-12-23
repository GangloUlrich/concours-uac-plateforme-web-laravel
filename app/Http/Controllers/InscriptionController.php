<?php

namespace App\Http\Controllers;

use App\Gandaho;
use App\User;
use App\Etudiant;
use App\Recruteur;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class InscriptionController extends Controller
{
    public function index()
    {
        return view('home.inscription');
    }

    public function store(Request $request)
    {
        if($request->input('statut') == 'etudiant')
        {
            User::create([
                'name' => $request->input('nom'),
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password')),
                'statut' => 'E'
            ]);

            $id = User::where('email', $request->input('email'))->first();

            $identifiant = $id->id;

            Etudiant::create([
                'user_id' => $identifiant,
                'prenom' => $request->input('prenom')
            ]);

            Session::flash('success', "Enregistré(e) avec succès.");
            return redirect()->route('login');
        }
        elseif ($request->input('statut') == 'recruteur'){
            User::create([
                'name' => $request->input('nom'),
                'email' => $request->input('email'),
                'password' => Hash::make($request->input('password')),
                'statut' => 'R'
            ]);

            $id = User::where('email', $request->input('email'))->first();

            $identifiant = $id->id;

            Recruteur::create([
                'user_id' => $identifiant,
                'prenom' => $request->input('prenom')
            ]);

            Session::flash('success', "Enregistré(e) avec succès.");
            return redirect()->route('login');
        }
        else{

        }
    }

    public function profil()
    {
        return view('admin.profil');
    }

    public function show()
    {
        $users = User::all();
        return view('admin.utilisateurs', array(
            'users' => $users,
        ));
    }

    public function delete($id)
    {
        $user = User::find($id);
        $statut = $user->statut;
        if ($statut == 'E')
        {
            User::find($id)->delete();
            Etudiant::where('user_id', $id)->delete();
            return redirect()->back();
        }
        elseif ($statut == 'R')
        {
            User::find($id)->delete();
            Recruteur::where('user_id', $id)->delete();
            return redirect()->back();
        }else{

        }
    }

    public function edit($id)
    {
        $users = User::find($id);
        return view('admin.modifier_utilisateurs', array(
            'users' => $users
        ));
    }

    public function update(Request $request)
    {
        $id= $request->input('id_users');
        $statut= $request->input('statut');

        if ($statut == 'E')
        {
            User::find($id)->update(['name' => $request->input('nom'),
                'email' => $request->input('mail')]);

            Etudiant::where('user_id', $id)->update(['prenom' => $request->input('prenom'),
                'contact' => $request->input('contact'),
                'age' => $request->input('age'),
                'entite' => $request->input('entite'),
                'niveau' => $request->input('niveau'),
                'competences' => $request->input('competences')]);

            $users = User::all();
            return view('admin.utilisateurs', array(
                'users' => $users,
            ));
        }
        elseif ($statut == 'R')
        {
            User::find($id)->update(['name' => $request->input('nom'),
                'email' => $request->input('mail')]);

            Recruteur::where('user_id', $id)->update(['prenom' => $request->input('prenom'),
                'contact' => $request->input('contact'),
                'nom_entreprise' => $request->input('entreprise'),
                'domaine' => $request->input('domaine'),
                'poste' => $request->input('poste')]);

            $users = User::all();
            return view('admin.utilisateurs', array(
                'users' => $users,
            ));
        }
    }

    public function show_one($id)
    {
        $users = User::find($id);
        return view('admin.voir_utilisateurs', array(
            'users' => $users
        ));
    }

    public function admin(Request $request)
    {
        if (Gandaho::where('identifiant', $request->input('identifiant'))->first() and Gandaho::where('pass', $request->input('password'))->first())
        {
            return redirect()->route('dashboard');
        }else{
            return redirect()->back();
        }
    }
}
