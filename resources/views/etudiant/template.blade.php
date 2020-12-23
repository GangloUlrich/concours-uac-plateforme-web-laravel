<!DOCTYPE html>
<html>
    <head>
        <title>Jobs UAC | @yield('title') </title>
        <meta charset="utf-8" >
        <meta name="description" content="Stop waste your time">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Fichier css  -->
        <link rel="stylesheet" href=" {{ asset('bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href=" {{ asset('css/web.css') }}">
        <link rel="icon" href="{{ asset('img/logo-uac.png') }}" />
        <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{asset('fontawesome/css/all.css')}}"/>
    </head>

    <body >

      <div class="container-fluid my-2"> 
        <div class="row">
          <div class="col-sm-12 col-md-6">
            <a href="{{ route('accueil_etudiants') }}" alt="accueil jobs uac"><img src="{{ asset('img/uacjobs.png') }}" alt="logo jobs uac"  class="navbar-img"></a>
          </div>
          <div class="col-sm-12 col-md-6  d-flex justify-content-md-end align-items-md-center a-size  ">
            <span class="text-black a-space"><i class="fas fa-envelope"></i>&nbsp vrcireip.uac@uac.bj</span>
            <span class="text-black"><i class="fas fa-phone fa-flip-horizontal"></i>+229 21 36 11 19</span>
          </div>
        </div>        
      
      </div>

      <nav class="navbar  navbar-expand-lg navbar-dark bg-green  " >
        
      
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo01" aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
         
          <ul class="navbar-nav mx-auto">
            
           <li class="nav-item dropdown  active page-scroll">
              <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               Home <span class="sr-only">(current)</span>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
               <a class="dropdown-item" href="{{ route('actualites_etudiants') }}">Actualités</a>
                <a class="dropdown-item" href=" {{ route('publications_etudiants') }}">Publications</a>
                <a class="dropdown-item" href="{{ route('galerie_etudiants') }}">Galerie</a>
              
              
              </div>
            </li>

          <li class="nav-item  ">
            <a class="nav-link text-white" href="{{ route('about_etudiants') }}">A propos</a>
          </li>
          <li class="nav-item dropdown ">
              <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             Opportunités
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
               <a class="dropdown-item" href="{{ route('stage_etudiants') }}">Stages</a>
                <a class="dropdown-item" href="{{ route('emploi_etudiants') }}">Emploi</a>
              
              
              </div>
            </li>

          <li class="nav-item dropdown ">
              <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
              Ressources educatives
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                <a class="dropdown-item" href="{{ route('trucs_astuces_etudiants') }}">Trucs et astuces </a>
                <a class="dropdown-item" href="{{ route('podcast_etudiants') }}">Podcast Employabilité</a>
                <a class="dropdown-item" href="{{ route('foire_etudiants') }}">Foire aux questions</a>
              </div>
            </li>

        
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
             Contact
            </a>
            <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
              <a class="dropdown-item" href="{{route('contact_etudiant')}}">Contacter un conseiller emploi</a>
              <a class="dropdown-item" href="{{ route('newsletter_etudiants') }}">Souscrivez aux alertes email</a>
              
            </div>
          </li>

          <li class="nav-item dropdown ">
              <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
               Partenaires
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
               <a class="dropdown-item" href="{{ route('entreprises_etudiants') }}">Entreprises</a>
                <a class="dropdown-item" href="{{ route('institutions_etudiants') }}">Institutions</a>
              
              
              </div>
            </li>

          
            
            <li class="nav-item dropdown ">
              <a class="nav-link dropdown-toggle bg-red text-white" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 @guest 
                {{route('login')}} @else <i class="fas fa-user-circle"></i> &nbsp {{ Auth::user()->name }} @endguest</a>
              </a>
              <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
               <a class="dropdown-item" href="{{ route('profil_etudiant') }}">Voir/Editer profil</a>

                  <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i>&nbsp Deconnexion</a>
                  <form id="logout-form" action="{{ route('logout') }}" method="POST" >
                      {{ csrf_field() }}
                  </form>
                
                <!--<a class="dropdown-item" href="{{ route('logout') }}"   onclick="event.preventDefault();document.getElementById('logout-form').submit();"><i class="fas fa-sign-out-alt"></i>&nbsp Deconnexion</a>

         <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none"> @csrf</form>-->
              
              
              </div>
            </li>


                      
          </ul>
         
        </div>
      </nav>

      @yield('content')

      <footer class="container-fluid bg-black text-light text-center ">
        <div class="row pt-3 mb-4"> 
          <div class="col-sm-12 col-md-3 text-left px-4">
            <img src="{{ asset('/img/uac.png') }}" alt="logo uac" class="img-fluid text-center"  width="70">
            <ul class="list-unstyled">
              <li>Universite d'Abomey-Calavi</li>
              <li>Abomey-calavi, BENIN</li>
              <li><i class="fas fa-envelope text-light"></i>&nbsp vrcireip.uac@uac.bj</li>
              <li><i class="fas fa-phone fa-flip-horizontal text-light"></i>+229 21 31 16 41</li>
            </ul>
          </div>
          <div class="col-sm-12 col-md-3 text-left px-4">
            <p class="text-success font-weight-bold">Ressources utiles</p>
            <ul class="list-unstyled">
              <li><a href="#" class="text-light">SITE OFFICIEL UAC</a></li>
              <li><a href="#" class="text-light">COURS EN LIGNE UAC</a></li>
              <li><a href="#" class="text-light">UAC STARTUP VALLEY</a></li>
              <li><a href="#" class="text-light">BEC UAC</a></li>
              <li><a href="#" class="text-light">CPUAQ UAC</a></li>
            </ul>
          </div>
          <div class="col-sm-12 col-md-3 text-left px-4">
            <p class="text-success font-weight-bold">Liens utiles</p>
            <ul  class="list-unstyled">
            <li><a href="#" class="text-light">MINISTERE DU  NUMERIQUE ET DE LA DIGITALISATION</a></li>
            <li><a href="#" class="text-light">MINISTERE DE L'ENSEIGNEMENT SUPERIEUR ET DE LA RECHERCHE SCIENTIFIQUE</a></li>
            <li><a href="#" class="text-light">MASTERCARD FONDATION A L'UAC </a></li>
            <li><a href="#" class="text-light">AGENCE UNIVERSITAIRE DE LA FRANCOPHONIE</a></li>
            </ul>
          </div>
          <div class="col-sm-12 col-md-3 text-center">
            <p class="text-success font-weight-bold">SUIVEZ-NOUS SUR</p>
            <div class="">
              <a class="text-white" href="#" alt="linkedin"><i class="fab fa-linkedin fa-2x"></i></a>
              <a class="text-white" href="#" alt="twitter"><i class="fab fa-twitter-square fa-2x "></i></a>
              <a class="text-white" href="#" alt="facebook"><i class="fab fa-facebook-square fa-2x"></i></a>
              <a class="text-white" href="#" alt="rss"><i class="fas fa-rss-square fa-2x "></i></a>
              
            </div>

          </div>
        
        </div>
        <div class="text-right"><a href="#" alt="to up" id="back-to-top" role="button" class="btn-success btn-lg back-to-top" > <i class="fas fa-chevron-circle-up fa-1x  "></i></a></div>
        
        <div class="py-4"><span class="text-light text-center">© 2020 Plateforme de diffusion des opportunités professionnelles de l'UAC.</span></div>
        
        
      </footer>


        <!-- Bootstrap JS & jquery-3 -->
        <script src=" {{ asset('js/jquery.min.js') }}"></script>
        <script src=" {{ asset('bootstrap/jquery-3.5.1.slim.min.js') }}"></script>
        <script src=" {{ asset('js/collapse.js') }}"></script>
        <script src=" {{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src=" {{ asset('js/web.js') }}"></script>

        
        
    </body>
</html>