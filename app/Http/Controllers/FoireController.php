<?php

namespace App\Http\Controllers;

use App\Question;
use Illuminate\Http\Request;

class FoireController extends Controller
{
    public function index()
    {
        $questions = Question::all();
        return view('admin.faq', array(
            'questions' => $questions
        ));
    }

    public function index0()
    {
        $questions = Question::all();
        return view('home.foire', array(
            'questions' => $questions
        ));
    }

    public function index1()
    {
        $questions = Question::all();
        return view('etudiant.foire', array(
            'questions' => $questions
        ));
    }

    public function index2()
    {
        $questions = Question::all();
        return view('recruteur.foire', array(
            'questions' => $questions
        ));
    }

    public function add(Request $request)
    {
        Question::create([
            'libelle' => $request->input('question')
        ]);
        return redirect()->back();
    }

    public function edit($n)
    {
        $quiz = Question::where('id_question', $n)->first();
        $questions = Question::all();
        return view('admin.modifier_questions', array(
            'questions' => $questions,
            'quiz' => $quiz));
    }

    public function update(Request $request)
    {
        $id= $request->input('id_question');

        Question::where('id_question', $id)->update(['libelle' => $request->input('question')]);

        $questions = Question::all();
        return view('admin.faq', array(
            'questions' => $questions
        ));
    }

    public function delete($n)
    {
        Question::where('id_question',$n)->delete();
        return redirect()->back();
    }
}
