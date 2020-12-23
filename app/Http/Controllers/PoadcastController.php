<?php

namespace App\Http\Controllers;

use App\Poadcast;
use Illuminate\Http\Request;

class PoadcastController extends Controller
{
    public function index()
    {
        $poadcasts = Poadcast::all();
        return view('admin.poadcast', array(
            'poadcasts' => $poadcasts
        ));
    }

    public function index1()
    {
        return view('etudiant.poadcast');
    }

    public function index2()
    {
        return view('recruteur.poadcast');
    }

    public function add(Request $request)
    {
        Poadcast::create([
            'titre_poadcast' => $request->input('titre'),
            'lien_poadcast' => $request->input('lien')
        ]);
        return redirect()->back();
    }

    public function edit($n)
    {
        $poadcast = Poadcast::where('id_poadcast', $n)->first();
        $poadcasts = Poadcast::all();
        return view('admin.modifier_poadcast', array(
            'poadcasts' => $poadcasts,
            'poadcast' => $poadcast));
    }

    public function update(Request $request)
    {
        $id= $request->input('id_poadcast');

        Poadcast::where('id_poadcast', $id)->update(['titre_poadcast' => $request->input('titre'),
            'lien_poadcast' => $request->input('lien')]);

        $poadcasts = Poadcast::all();
        return view('admin.poadcast', array(
            'poadcasts' => $poadcasts
        ));
    }

    public function delete($n)
    {
        Poadcast::where('id_poadcast',$n)->delete();
        return redirect()->back();
    }
}
