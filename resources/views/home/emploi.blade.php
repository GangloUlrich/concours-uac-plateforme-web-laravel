@extends('composant.app')
@section('title','Emploi')
@section('content')


<div class="jumbotron news d-flex flex-column justify-content-center text-center text-white mb-2">
    <h1 class="text-black font-weight-bold"><span class="des">&nbsp</span>Emplois</h1>
    <p>Toutes les offres d'emplois</p>
</div> 


<div class="container  py-3 mb-3 ">
  
    <form class=""> 
      
        <input type="text" placeholder="rechercher dans les offres d'emplois" name="newsletter" class="form-control a-border bg-white border-success " required>
        
      
    </form>
</div>

    
<div class="container mb-4">
        <div class="card-columns">
            @foreach($emplois as $emploi)
                <div class="card a-border shadow card-fixed3">
                    <h5 class="card-header">Entreprises/Organisation</h5>
                    <img class="card-img-top a-border" src="{{ asset('/img/img9.jpg')}}" alt="emploi">
                    <div class="card-body a-border  ">
                        <h5 class="card-title font-weight-bold">{{$emploi->titre_opportunite}}</h5>
                        <p class="card-text">{{$emploi->description}}</p>
                        <span class="text-danger text-left">{{$emploi->delai}}</span><br/>
                          <div class="text-right mt-2 px-2">
                    <a href="#" class="btn btn-success">Postuler</a>
                    </div>
                    </div>
                </div>
            @endforeach
            <div class="card a-border shadow card-fixed3">
                <h5 class="card-header">Entreprises/Organisation</h5>
                <img class="card-img-top a-border" src="{{ asset('/img/img9.jpg')}}" alt="emploi">
                <div class="card-body a-border  ">
                    <h5 class="card-title font-weight-bold">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <span class="text-danger text-left">Deadline:00/00/0000</span><br/>
                      <div class="text-right mt-2 px-2">
                    <a href="#" class="btn btn-success">Postuler</a>
                    </div>
                </div>
            </div>

            <div class="card a-border shadow card-fixed3">
                <h5 class="card-header">Entreprises/Organisation</h5>
                <img class="card-img-top a-border" src="{{ asset('/img/img8.jpg')}}" alt="emploi">
                <div class="card-body a-border  ">
                    <h5 class="card-title font-weight-bold">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <span class="text-danger text-left">Deadline:00/00/0000</span><br/>
                    <div class="text-right mt-2 px-2">
                      <div class="text-right mt-2 px-2">
                    <a href="#" class="btn btn-success">Postuler</a>
                    </div>
                    </div>
                </div>
            </div>

            <div class="card a-border shadow card-fixed3">
                <h5 class="card-header">Entreprises/Organisation</h5>
                <img class="card-img-top a-border" src="{{ asset('/img/img3.jpg')}}" alt="emploi">
                <div class="card-body a-border  ">
                    <h5 class="card-title font-weight-bold">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <span class="text-danger text-left">Deadline:00/00/0000</span><br/>
                      <div class="text-right mt-2 px-2">
                    <a href="#" class="btn btn-success">Postuler</a>
                    </div>
                </div>
            </div>

            <div class="card a-border shadow card-fixed3">
                <h5 class="card-header">Entreprises/Organisation</h5>
                <img class="card-img-top a-border" src="{{ asset('/img/img2.jpg')}}" alt="emploi">
                <div class="card-body a-border  ">
                    <h5 class="card-title font-weight-bold">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <span class="text-danger text-left">Deadline:00/00/0000</span><br/>
                      <div class="text-right mt-2 px-2">
                    <a href="#" class="btn btn-success">Postuler</a>
                    </div>
                </div>
            </div>

            <div class="card a-border shadow card-fixed3">
                <h5 class="card-header">Entreprises/Organisation</h5>
                <img class="card-img-top a-border" src="{{ asset('/img/img1.jpg')}}" alt="emploi">
                <div class="card-body a-border  ">
                    <h5 class="card-title font-weight-bold">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <span class="text-danger text-left">Deadline:00/00/0000</span><br/>
                      <div class="text-right mt-2 px-2">
                    <a href="#" class="btn btn-success">Postuler</a>
                    </div>
                </div>
            </div>

            <div class="card a-border shadow card-fixed3">
                <h5 class="card-header">Entreprises/Organisation</h5>
                <img class="card-img-top a-border" src="{{ asset('/img/et.jpg')}}" alt="emploi">
                <div class="card-body a-border  ">
                    <h5 class="card-title font-weight-bold">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <span class="text-danger text-left">Deadline:00/00/0000</span><br/>
                      <div class="text-right mt-2 px-2">
                    <a href="#" class="btn btn-success">Postuler</a>
                    </div>
                </div>
            </div>

            <div class="card a-border shadow card-fixed3">
                <h5 class="card-header">Entreprises/Organisation</h5>
                <img class="card-img-top a-border" src="{{ asset('/img/img5.jpg')}}" alt="emploi">
                <div class="card-body a-border  ">
                    <h5 class="card-title font-weight-bold">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <span class="text-danger text-left">Deadline:00/00/0000</span><br/>
                      <div class="text-right mt-2 px-2">
                    <a href="#" class="btn btn-success">Postuler</a>
                    </div>
                </div>
            </div>

            <div class="card a-border shadow card-fixed3">
                <h5 class="card-header">Entreprises/Organisation</h5>
                <img class="card-img-top a-border" src="{{ asset('/img/img8.jpg')}}" alt="emploi">
                <div class="card-body a-border  ">
                    <h5 class="card-title font-weight-bold">Special title treatment</h5>
                    <p class="card-text">With supporting text below as a natural lead-in to additional content.</p>
                    <span class="text-danger text-left">Deadline:00/00/0000</span><br/>
                      <div class="text-right mt-2 px-2">
                    <a href="#" class="btn btn-success">Postuler</a>
                    </div>
                </div>
            </div>

           

        </div>
    </div>
    

    <div class="container text-center a-border d-flex flex-column flex-md-row  justify-content-center mb-4">
        <a href="#" class="btn btn-outline-danger a-space "><i class="fas fa-arrow-left"></i>&nbsp Page precedente</button>
        
        <a href="#" class="btn btn-success a-border">Page suivante &nbsp<i class="fas fa-arrow-right"></i></a>
      </div>



@endsection