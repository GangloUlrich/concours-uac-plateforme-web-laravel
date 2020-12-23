@extends('etudiant.template')
@section('title', 'Profil')
@section('content')

    <div class="jumbotron news d-flex flex-column justify-content-center text-center text-white mb-0">
        <h1 class="text-black font-weight-bold"><span class="des">&nbsp</span>Profil</h1>

    </div>

    <div class="container-fluid bg-light mt-0 ">
        <div class="container text-right my-1"><a href="#" alt="editer profil " class="text-danger">EDITER LE PROFIL</a>
        </div>
        <div class="container  my-3 shadow-sm  text-center bg-white py-2 ">
            <div class="row ">
                <div class="col-md-3 col-sm-12 d-flex justify-content-center mb-2  text-center">
                    <img src="{{ asset('img/profil.png') }} " alt="photo de profil" class="img-fluid circle">
                </div>
                <div class="col-md-9 text-left col-sm-12 d-flex flex-column justify-content-center  ">
                    <h2 class="font-weight-bold text-success">{{ Auth::user()->name }}
                        {{ Auth::user()->etudiant()->first()->prenom }}
                    </h2>
                    <div class="w-75  border bg-black "></div>
                    <p>Etudiant en lorem ipsum dolor consectut | itur perspicatis </p>
                </div>
            </div>

        </div>

        <div class="container  shadow-sm bg-white my-3 text-center p-md-5 py-2">
            <h4 class="text-left font-weight-bold text-success"> A PROPOS</h4>
            <div class="w-100 border bg-black "></div><br />
            <p class="text-justify">Sed ut perspiciatis unde omnis iste natus error sit voluptatem ccusantium doloremque
                laudantium, totam rem aperiam, eaque ipsa quae ab illo entore veritatis et quasi architecto beatae vitae
                dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas aspernit conséquuntur magni dolores eos qui
                ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet,
                consectetur, adipisci velit, sed quia non numquam eius modi.Sed ut perspiciatis unde omnis iste natus error
                sit voluptatem ccusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo entore veritatis
                et quasi architecto beatae vitae dicta sunt explicabo. Nemo enim ipsam voluptatem quia voluptas aspernit
                conséquuntur magni dolores eos qui ratione voluptatem sequi nesciunt. Neque porro quisquam est, qui dolorem
                ipsum quia dolor sit amet, consectetur, adipisci velit, sed quia non numquam eius modi.tempora incidunt ut
                labore et dolore magnam aliquam quaerat en volim.</p>
        </div>


        <div class="container  shadow-sm bg-white my-3  text-center p-md-5 py-2">
            <h4 class="text-left font-weight-bold text-success">MON PARCOURS</h4>
            <div class="w-100 border bg-black "></div><br />
            <div class="row text-left">
                <div class="col-1 m-md-0 mb-2"><span><i class="fas fa-building icon-building"></i></span></div>
                <div class="col-11 m-0 poste">
                    <p class="font-weight-bold text-left">Ecole/Universite</p>
                    <p>filiere</p><span class="text-muted tmps">aout 2020-septembre 2020</span>
                </div>

            </div>
            <div class="row text-left mt-3">
                <div class="col-1 m-md-0 mb-2"><span><i class="fas fa-building icon-building"></i></span></div>
                <div class="col-11 m-0 poste">
                    <p class="font-weight-bold text-left">Ecole /Universite</p>
                    <p>filiere</p><span class="text-muted tmps">aout 2020-septembre 2020</span>
                </div>

            </div>
            <div class="row text-left mt-3">
                <div class="col-1 m-md-0 mb-2"><span><i class="fas fa-building icon-building"></i></span></div>
                <div class="col-11 m-0 poste">
                    <p class="font-weight-bold text-left">Formation/conference /Meetup</p>
                    <p>filiere</p><span class="text-muted tmps">aout 2020-septembre 2020</span>
                </div>

            </div>
        </div>



        <div class="container  shadow-sm bg-white my-3  text-center p-md-5 py-2">
            <h4 class="text-left font-weight-bold text-success">EXPERIENCES PROFESSIONNELLES</h4>
            <div class="w-100 border bg-black "></div><br />
            <div class="row text-left">
                <div class="col-1 m-md-0 mb-2"><span><i class="fas fa-briefcase icon-building"></i></span></div>
                <div class="col-11 m-0 poste">
                    <p class="font-weight-bold text-left">Entreprise/organisation</p>
                    <p>poste occupé</p><span class="text-muted tmps">aout 2020-septembre 2020</span>
                </div>

            </div>
            <div class="row text-left mt-3">
                <div class="col-1 m-md-0 mb-2"><span><i class="fas fa-briefcase icon-building"></i></span></div>
                <div class="col-11 m-0 poste">
                    <p class="font-weight-bold text-left">Entreprise/organisation</p>
                    <p>poste occupé</p><span class="text-muted tmps">aout 2020-septembre 2020</span>
                </div>

            </div>
            <div class="row text-left mt-3">
                <div class="col-1 m-md-0 mb-2"><span><i class="fas fa-briefcase icon-building"></i></span></div>
                <div class="col-11 m-0 poste">
                    <p class="font-weight-bold text-left">Entreprise/Organisation</p>
                    <p>poste occupé</p><span class="text-muted tmps">aout 2020-septembre 2020</span>
                </div>

            </div>
        </div>




    </div>

@endsection
