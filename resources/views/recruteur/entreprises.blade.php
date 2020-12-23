@extends('recruteur.template')
@section('title','Entreprises')
@section('content')


<div class="jumbotron news d-flex flex-column justify-content-center text-center text-white">
    <h1 class="text-black font-weight-bold"><span class="des">&nbsp</span>Entreprises</h1>
  
</div> 

    <div class="container-fluid justify-content-center text-center p-5">
        <div class="card-columns">
            <div class="card a-border shadow-sm">
                <a href="#"><img src="{{asset('img/uac.png')}}" alt="uac " class="img-fluid img-dark"></a>
                <p>Lorem ipsum dolor consectur@site.prefix</p>
                <a class="text-black" href="#">siteweb.prefix</a>
                <p>+000 00 00 01 01 / 00 02 02 02</p>
            </div>

            <div class="card a-border shadow-sm">
                <a href="#"><img src="{{asset('img/uac.png')}}" alt="uac " class="img-fluid img-dark"></a>
                <p>Lorem ipsum dolor consectur@site.prefix</p>
                <a class="text-black" href="#">siteweb.prefix</a>
                <p>+000 00 00 01 01 / 00 02 02 02</p>
            </div>

            

           
        </div>
    </div>


@endsection