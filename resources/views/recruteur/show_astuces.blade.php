@extends('recruteur.template')
@section('title','actualites')
@section('content')


    <div class="container-fluid bg-light py-2 ">
        <div class="container bg-white  shadow p-4  my-4">

            <h2 class="font-weight-bold">{{$astuce->titre_astuce}}</h2>
            <span class="text-left text-muted">{{$astuce->created_at}}</span>
            <div class="w-100 border-top p-1 bg-green my-3"></div>
            <p class="text-justify article">{{$astuce->contenu_astuce}}</p>
            <div class="text-center m-5">
                <img src="{{$astuce->image_astuce}}" alt="photo uac" class="img-fluid">
            </div>
        </div>
    </div>

    

@endsection