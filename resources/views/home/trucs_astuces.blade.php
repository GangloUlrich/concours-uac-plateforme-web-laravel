@extends('composant.app')
@section('title','Trucs et Astuces')
@section('content')



<div class="jumbotron ab-jumbotron d-flex flex-column justify-content-center text-center text-white mb-2">
    <h1 class="text-black font-weight-bold"><span class="des">&nbsp</span> Trucs et astuces</h1>
    
</div>  

<div class="container  py-3 mb-3 ">
  
    <form class=""> 
      
        <input type="text" placeholder="rechercher " name="newsletter" class="form-control a-border bg-white border-success " required>
        
      
    </form>
</div>
    
<div class="container  py-2 mb-5">
    <div class="card-columns  ">

    @foreach($astuces as $astuce)
            <div class="  card a-border card-fixed shadow ">
                
                <img src="..{{$astuce->image_astuce}}" class="card-img-top a-border" alt="trucs et astuces">
            
                <div class="card-body a-border">
                    <p class="card-title font-weight-bold">{{$astuce->titre_astuce}}</p>
                    
                    
                </div>
                <div class=" mt-2 px-3 border-top pt-1 d-flex flex-row justify-content-between">
                <span class="tmps text-muted"> {{ $astuce->created_at }}</span>
                <a href="{{ route('show_astuces',['n'=>$astuce->id_astuce]) }}" class="btn btn-success a-border">Lire l'article</a>
                </div>
            </div>
        @endforeach

        <div class="  card a-border card-fixed shadow ">
            
            <img src="{{ asset('img/img1.jpg')}}" class="card-img-top a-border" alt="trucs et astuces">
           
            <div class="card-body a-border">
                <p class="card-title font-weight-bold text-justify">Some quick example text to build on the card title and make up the bulk of the card's content somewhere perspicatis.</p>
                
               <div class="mt-2 px-2 border-top pt-1 d-flex justify-content-between">
               <span class="tmps text-muted">2020-12-23 11:03:01 </span>
                <a href="#" class="btn btn-success a-border">Lire l'article</a>
                </div>
            </div>
        </div>


        <div class="  card a-border card-fixed shadow ">
            
            <img src="{{ asset('img/img2.jpg')}}" class="card-img-top a-border" alt="trucs et astuces">
           
            <div class="card-body a-border">
                <p class="card-title font-weight-bold text-justify">Some quick example text to build on the card title and make up the bulk of the card's content somewhere perspicatis.</p>
                
               <div class="mt-2 px-2 border-top pt-1 d-flex justify-content-between">
               <span class="tmps text-muted">2020-12-23 11:03:01 </span>
                <a href="#" class="btn btn-success a-border">Lire l'article</a>
                </div>
            </div>
        </div>


        <div class="  card a-border card-fixed shadow ">
            
            <img src="{{ asset('img/img8.jpg')}}" class="card-img-top a-border" alt="trucs et astuces">
           
            <div class="card-body a-border">
                <p class="card-title font-weight-bold text-justify">Some quick example text to build on the card title and make up the bulk of the card's content somewhere perspicatis.</p>
                
               <div class="mt-2 px-2 border-top pt-1 d-flex justify-content-between">
               <span class="tmps text-muted">2020-12-23 11:03:01 </span>
                <a href="#" class="btn btn-success a-border">Lire l'article</a>
                </div>
            </div>
        </div>

        <div class="  card a-border card-fixed shadow ">
            
            <img src="{{ asset('img/image7.jpg')}}" class="card-img-top a-border" alt="trucs et astuces">
           
            <div class="card-body a-border">
                <p class="card-title font-weight-bold text-justify">Some quick example text to build on the card title and make up the bulk of the card's content somewhere perspicatis.</p>
                
               <div class="mt-2 px-2 border-top pt-1 d-flex justify-content-between">
               <span class="tmps text-muted">2020-12-23 11:03:01 </span>
                <a href="#" class="btn btn-success a-border">Lire l'article</a>
                </div>
            </div>
        </div>


        <div class="  card a-border card-fixed shadow ">
            
            <img src="{{ asset('img/image5.jpg')}}" class="card-img-top a-border" alt="trucs et astuces">
           
            <div class="card-body a-border">
                <p class="card-title font-weight-bold text-justify">Some quick example text to build on the card title and make up the bulk of the card's content somewhere perspicatis.</p>
                
               <div class="mt-2 px-2 border-top pt-1 d-flex justify-content-between">
               <span class="tmps text-muted">2020-12-23 11:03:01 </span>
                <a href="#" class="btn btn-success a-border">Lire l'article</a>
                </div>
            </div>
        </div>

        <div class="  card a-border card-fixed shadow ">
            
            <img src="{{ asset('img/img3.jpg')}}" class="card-img-top a-border" alt="trucs et astuces">
           
            <div class="card-body a-border">
                <p class="card-title font-weight-bold text-justify">Some quick example text to build on the card title and make up the bulk of the card's content somewhere perspicatis.</p>
                
               <div class="mt-2 px-2 border-top pt-1 d-flex justify-content-between">
               <span class="tmps text-muted">2020-12-23 11:03:01 </span>
                <a href="#" class="btn btn-success a-border">Lire l'article</a>
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