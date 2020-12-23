@extends('composant.app')
@section('title','Accueil')
@section('content')


  <div class="jumbotron text-center d-flex  flex-column justify-content-center text-white ">
    
    
      <div class="text-white bg-grad">
       
        <h1 class=" font-weight-bold">BIENVENUE SUR LA PLATEFORME JOBS UAC</h1>
        <p>Trouver ici des opportunités de stages ,d'emplois ,des actualites et bien d'autres pour developper votre carrière.</p>
        <p class="text-yellow">Bonne suite à vous !</p>
        
      </div>
  </div>
  
    
   

    <div class="container py-3">
        <h2 class="text-success text-center font-weight-bold "><span class="des" >&nbsp</span>ACTUALITES</h2>
        
    </div>

    <div class="container">
            <div class="card-deck slideanim ">
                  <div class="card a-bordure">
                        <img class="card-img-top" src="{{ asset('img/etu-pc.jpg') }}" alt="cours en ligne uac">
                        <div class="card-body px-0 py-2">
                          <p class="card-title">Card title lorem ipsum dolor consectur iture perspicatis </p>
                          
                        </div>
                  </div>
                  <div class="card a-bordure">
                          <img class="card-img-top" src="{{ asset('/img/uac-map.jpg')}}" alt="vue du ciel uac">
                          <div class="card-body px-0 py-2">
                            <p class="card-title">Card title lorem ipsum dolor consectur iture perspicatis </p>
                          </div>
                  </div>
                  <div class="card a-bordure">
                        <img class="card-img-top" src="{{ asset('/img/uac-etu.jpg') }}" alt="etudiants uac">
                        
                        <div class="card-body px-0 py-2">
                          <p class="card-title">Card title lorem ipsum dolor consectur iture perspicatis </p>  

                        </div>
                  </div>
            </div>


          <div class="container py-3">
              <h2 class="text-success text-center font-weight-bold "><span class="des" >&nbsp</span>OPPORTUNITES</h2>
          </div>

            <div class="card-deck ">
                <div class="card a-bordure">
                  <img class="card-img-top" src="{{ asset('/img/img5.jpg') }}" alt="actualites">
                  <div class="card-body px-0 py-2">
                    <p class="card-title text-blue">Card title lorem ipsum dolor consectur iture perspicatis </p>  
              
                </div>
                  
                </div>
                <div class="card a-bordure">
                  <img class="card-img-top" src="{{ asset('/img/img1.jpg') }}" alt="actualites">
                  <div class="card-body px-0 py-2">
                    <p class="card-title text-blue">Card title lorem ipsum dolor consectur iture perspicatis </p>  
              
                </div>
                </div>
                <div class="card a-bordure">
                  <img class="card-img-top" src="{{ asset('/img/img2.jpg')}}" alt="actualites">
                  
                  <div class="card-body px-0 py-2">
                    <p class="card-title text-blue">Card title lorem ipsum dolor consectur iture perspicatis </p>  
              
                </div>      
              
                </div>
            </div>

            <div class="container-fluid text-center bg-green mt-md-5 p-2">
                <h2 class="text-white text-center font-weight-bold"><span class="des">&nbsp</span>PUBLICATIONS</h2>
            </div>
            <div class="container-fluid d-flex justify-content-end bg-gray mt-4 p-3">
                <button class="btn btn-outline-danger">Toutes les publications</button>
            </div>

        <div class="container-fluid bg-gray p-md-5 p-sm-3 ">

            <div class="row bg-white mt-4 slideanim">
                    <div class="col-sm-12 col-md-4 p-0">
                        <img src="{{ asset('img/img8.jpg') }}" alt="publication" class="img-fluid">
                    </div>
                    <div class="col-sm-12 col-md-8 py-4">
                         <p class="font-weight-bold">Lorem ipsum dolor consectur itur Lorem ipsum dolor consectur itur Lorem ipsum dolor consectur itur Lorem ipsum dolor consectur itur </p>
                            <span class="text-muted text-left">28 novembre 2020 -John Doe</span>
                             <div class="d-flex justify-content-end pt-4">
                                    <button class="btn btn-success ">Lire plus</button>
                                </div>
                        </div>
            </div>

            <div class="row bg-white mt-4 slideanim">
              <div class="col-sm-12 col-md-4 p-0">
                <img src="{{ asset('img/light.jpg') }}" alt="publication" class="img-fluid">
              </div>
              <div class="col-sm-12 col-md-8 py-4">
                   <p class="font-weight-bold">Lorem ipsum dolor consectur itur Lorem ipsum dolor consectur itur Lorem ipsum dolor consectur itur Lorem ipsum dolor consectur itur </p>
                      <span class="text-muted text-left">28 novembre 2020 -John Doe</span>
                       <div class="d-flex justify-content-end pt-4">
                              <button class="btn btn-success ">Lire plus</button>
                          </div>
                  </div>
            </div>

            <div class="row bg-white mt-4 slideanim">
              <div class="col-sm-12 col-md-4 p-0">
                <img src="{{ asset('img/vision-uac.jpg') }}" alt="publication" class="img-fluid">
              </div>
              <div class="col-sm-12 col-md-8 py-4">
                   <p class="font-weight-bold">Lorem ipsum dolor consectur itur Lorem ipsum dolor consectur itur Lorem ipsum dolor consectur itur Lorem ipsum dolor consectur itur </p>
                      <span class="text-muted text-left">28 novembre 2020 -John Doe</span>
                      <div class="d-flex justify-content-end pt-4">
                              <button class="btn btn-success ">Lire plus</button>
                          </div>
                  </div>
          </div>  
        </div>
</div>
 
<div class="card-group container mt-md-5">
  <div class="card a-card1 text-center d-flex justify-content-center">
    <span><i class="fas fa-tools text-white fa-3x"></i></span>
    <a href="{{route('trucs_astuces')}}" class="text-white a-border carte"><h3 class="font-weight-bold">Trucs et astuces</h3></a>
  </div>
  <div class="card a-card3 text-center d-flex justify-content-center">
    <span><i class="fas fa-briefcase text-white fa-3x"></i></span>
    <a href="{{route('stage')}}" class="text-white a-border carte"><h3 class="font-weight-bold">Stages</h3></a>
  </div>
  <div class="card a-card2 text-center d-flex justify-content-center">
    <span><i class="fas fa-microphone text-white fa-3x"></i></span>
    <a href="{{ route('podcast') }}" class="text-white a-border carte "><h3 class="font-weight-bold">Podcast employabilité</h3></a>
  </div>
  
</div>

  


<div class="col-12 bg-yellow art"></div>

<div class="container-fluid mt-3 py-4 pl-5 slideanim">
  <h2 class="font-weight-bold ">Abonnez-vous à la newsletter</h2>
  <p>Soyez les premiers informés des nouvelles opportunites</p>
  <form class="form-inline">
    
    <input type="text" placeholder="votre adresse email" name="newsletter" class="form-control w-35 w-sm-50 ipt" required>
    <input type="submit"  value="Envoyer" class="btn btn-success1 ipt">
  </form>
</div>
  


  
@endsection