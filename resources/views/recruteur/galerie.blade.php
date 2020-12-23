@extends('recruteur.template')
@section('title','Galerie')
@section('content')

<div class="jumbotron news d-flex flex-column justify-content-center text-center text-white">
    <h1 class="text-black font-weight-bold"><span class="des">&nbsp</span> Galerie</h1>
   
</div>     

<div class="container  py-2 mb-5">
    <div class="card-columns  ">
        @foreach($photos as $photo)
            <div class="card a-border p-0 ">
                <img class="card-img-top" src="..{{$photo->lien_photo}}" alt="galerie">
                <div class="card-body  p-2">
                    <p class="card-title  font-weight-bold">{{$photo->description_photo}}</p>

                </div>
            </div>
        @endforeach
        <div class="card a-border p-0 ">
              <img class="card-img-top" src="{{ asset('/img/etu-pc.jpg') }}" alt="galerie">
              <div class="card-body  p-2">
                <p class="card-title  font-weight-bold">Card title lorem ipsum dolor consectur iture perspicatis </p>
                               
              </div>
        </div>

        <div class="card a-border p-0 ">
          <img class="card-img-top" src="{{ asset('/img/image4.jpg') }}" alt="galerie">
            <div class="card-body  p-2">
              <p class="card-title  font-weight-bold">Card title lorem ipsum dolor consectur iture perspicatis </p>
                             
            </div>
      </div>

      <div class="card a-border p-0 ">
        <img class="card-img-top" src="{{ asset('/img/img9.jpg') }}" alt="galerie">
        <div class="card-body  p-2">
          <p class="card-title  font-weight-bold">Card title lorem ipsum dolor consectur iture perspicatis </p>
                         
        </div>
  </div>

  <div class="card a-border p-0 ">
    <img class="card-img-top" src="{{ asset('/img/image3.jpg') }}" alt="galerie">
    <div class="card-body  p-2">
      <p class="card-title  font-weight-bold">Card title lorem ipsum dolor consectur iture perspicatis </p>
                     
    </div>
</div>

<div class="card a-border p-0 ">
  <img class="card-img-top" src="{{ asset('/img/accord.jpg') }}" alt="galerie">
  <div class="card-body  p-2">
    <p class="card-title  font-weight-bold">Card title lorem ipsum dolor consectur iture perspicatis </p>
                   
  </div>
</div>

<div class="card a-border p-0 ">
  <img class="card-img-top" src="{{ asset('/img/acc.png') }}" alt="galerie">
  <div class="card-body  p-2">
    <p class="card-title  font-weight-bold">Card title lorem ipsum dolor consectur iture perspicatis </p>
                   
  </div>
</div>

      
    </div>
</div>

<div class="container text-center a-border d-flex flex-column flex-md-row  justify-content-center mb-4">
  <a href="#" class="btn btn-outline-danger a-space "><i class="fas fa-arrow-left"></i>&nbsp Page precedente</button>
  
  <a href="#" class="btn btn-success a-border">Page suivante &nbsp<i class="fas fa-arrow-right"></i></a>
</div>

@endsection