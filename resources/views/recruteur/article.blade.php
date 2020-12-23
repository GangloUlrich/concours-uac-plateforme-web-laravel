@extends('recruteur.template')
@section('title','actualites')
@section('content')


    <div class="container-fluid bg-light py-2 ">
        <div class="container bg-white  shadow p-4  my-4">

            <h2 class="font-weight-bold">{{$article->titre_actualite}}</h2>
            <span class="text-left text-muted">{{$article->created_at}}</span>
            <div class="w-100 border-top p-1 bg-green my-3"></div>
            <p class="text-justify article">{{$article->contenu_actualite}}</p>
            <div class="text-center m-5">
                <img src="{{$article->image_actualite}}" alt="photo uac" class="img-fluid">
            </div>
        </div>
    </div>

    {{-- Dans le fichier css media queries on ajoute

    .article{
        line-height: 30px;
        font-size:1em;

    } --}}


@endsection