@extends('recruteur.template')
@section('title','Publications')
@section('content')

<div class="jumbotron news d-flex flex-column justify-content-center text-center text-white mb-2">
    <h1 class="text-black font-weight-bold"><span class="des">&nbsp</span> Publications</h1>
    <p>Toutes les publications</p>
</div>   

<div class="container  py-3 mb-3 ">
  
    <form class=""> 
      
        <input type="text" placeholder="rechercher dans les publications" name="newsletter" class="form-control a-border bg-white border-success " required>
        
      
    </form>
      
</div>

<div class="container mb-4">

    <div class="container-fluid bg-gray p-md-5 p-sm-3  ">
        @foreach($publications as $publication)
            <div class="row bg-white mt-4 ">
                <div class="col-sm-12 col-md-4 p-0">
                    <div class="inner">
                    <img src="..{{$publication->image_publication}}" class=" img-pub" alt="publications">
                    </div>
                </div>
                <div class="col-sm-12 col-md-8 py-4">
                    <p class="font-weight-bold">{!!  \Illuminate\Support\Str::words($publication->titre_publication,20,'...')!!}</p>
                    <span class="text-muted text-left">{{$publication->created_at}}</span>
                    <div class="d-flex justify-content-end pt-4">
                        <a href="{{ route('show_publication_recruteur',['n'=>$publication->id_publication]) }}" alt="voir la publication" ><button class="btn btn-success ">Lire plus</button></a>
                    </div>
                </div>
            </div>
        @endforeach

            <div class="row bg-white mt-4 ">
                <div class="col-sm-12 col-md-4 p-0">
                    <div class="inner"><img src="{{ asset('img/img8.jpg') }}" class="img-fluid" alt="publications"></div>
                </div>
                <div class="col-sm-12 col-md-8 py-4">
                    <p class="font-weight-bold">Lorem ipsum dolor consectur itur Lorem ipsum dolor consectur itur Lorem ipsum dolor consectur itur Lorem ipsum dolor consectur itur </p>
                        <span class="text-muted text-left">28 novembre 2020 -John Doe</span>
                        <div class="d-flex justify-content-end pt-4">
                                <button class="btn btn-success ">Lire plus</button>
                            </div>
                </div>
            </div>


            <div class="row bg-white mt-4 ">
                <div class="col-sm-12 col-md-4 p-0">
                <div class="inner"><img src="{{ asset('img/img5.jpg') }}" class="img-fluid" alt="publications"></div>
                </div>
                <div class="col-sm-12 col-md-8 py-4">
                    <p class="font-weight-bold">Lorem ipsum dolor consectur itur Lorem ipsum dolor consectur itur Lorem ipsum dolor consectur itur Lorem ipsum dolor consectur itur </p>
                        <span class="text-muted text-left">28 novembre 2020 -John Doe</span>
                        <div class="d-flex justify-content-end pt-4">
                                <button class="btn btn-success ">Lire plus</button>
                            </div>
                </div>
            </div>

            <div class="row bg-white mt-4 ">
                <div class="col-sm-12 col-md-4 p-0">
                <div class="inner"><img src="{{ asset('img/img1.jpg') }}" class="img-fluid" alt="publications"></div>
                </div>
                <div class="col-sm-12 col-md-8 py-4">
                    <p class="font-weight-bold">Lorem ipsum dolor consectur itur Lorem ipsum dolor consectur itur Lorem ipsum dolor consectur itur Lorem ipsum dolor consectur itur </p>
                        <span class="text-muted text-left">28 novembre 2020 -John Doe</span>
                        <div class="d-flex justify-content-end pt-4">
                                <button class="btn btn-success ">Lire plus</button>
                            </div>
                </div>
            </div>

            <div class="row bg-white mt-4 ">
                <div class="col-sm-12 col-md-4 p-0">
                <div class="inner"><img src="{{ asset('img/img5.jpg') }}" class="img-fluid" alt="publications"></div>
                </div>
                <div class="col-sm-12 col-md-8 py-4">
                    <p class="font-weight-bold">Lorem ipsum dolor consectur itur Lorem ipsum dolor consectur itur Lorem ipsum dolor consectur itur Lorem ipsum dolor consectur itur </p>
                        <span class="text-muted text-left">28 novembre 2020 -John Doe</span>
                        <div class="d-flex justify-content-end pt-4">
                                <button class="btn btn-success ">Lire plus</button>
                            </div>
                </div>
            </div>

            <div class="row bg-white mt-4 ">
                <div class="col-sm-12 col-md-4 p-0">
                    
                <div class="inner"><img src="{{ asset('img/img2.jpg') }}" class="img-fluid" alt="publications"></div>
                </div>
                <div class="col-sm-12 col-md-8 py-4">
                    <p class="font-weight-bold">Lorem ipsum dolor consectur itur Lorem ipsum dolor consectur itur Lorem ipsum dolor consectur itur Lorem ipsum dolor consectur itur </p>
                        <span class="text-muted text-left">28 novembre 2020 -John Doe</span>
                        <div class="d-flex justify-content-end pt-4">
                                <button class="btn btn-success ">Lire plus</button>
                            </div>
                </div>
            </div>

            <div class="row bg-white mt-4 ">
                <div class="col-sm-12 col-md-4 p-0">
                <div class="inner"><img src="{{ asset('img/img3.jpg') }}" class="img-fluid" alt="publications"></div>
                </div>
                <div class="col-sm-12 col-md-8 py-4">
                    <p class="font-weight-bold">Lorem ipsum dolor consectur itur Lorem ipsum dolor consectur itur Lorem ipsum dolor consectur itur Lorem ipsum dolor consectur itur </p>
                        <span class="text-muted text-left">28 novembre 2020 -John Doe</span>
                        <div class="d-flex justify-content-end pt-4">
                                <button class="btn btn-success ">Lire plus</button>
                            </div>
                </div>
            </div>

            <div class="row bg-white mt-4 ">
                <div class="col-sm-12 col-md-4 p-0">
                <div class="inner"><img src="{{ asset('img/img7.jpg') }}" class="img-fluid" alt="publications"></div>
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

<div class="container d-flex flex-row justify-content-between my-4">
    <button class=" btn btn-danger a-border"><i class="fas fa-arrow-left"></i>&nbsp Precedent</button>
    <button class=" btn btn-success a-border"> Suivant &nbsp<i class="fas fa-arrow-right"></i></button>
</div>


@endsection