@extends('recruteur.template')
@section('title', 'Profil')
@section('content')

    <div class="jumbotron news d-flex flex-column justify-content-center text-center text-white mb-0">
        <h1 class="text-black font-weight-bold"><span class="des">&nbsp</span>Rechercher Profil</h1>

    </div>

    <div class="container  py-3 mb-3 ">

        <form class="">

            <input type="text" placeholder="rechercher un profil étudiant" name="newsletter"
                class="form-control a-border bg-white border-success " required>


        </form>

    </div>
@endsection
