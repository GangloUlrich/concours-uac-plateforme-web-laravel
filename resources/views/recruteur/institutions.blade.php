@extends('recruteur.template')
@section('title','Institutions')
@section('content')


<div class="jumbotron news d-flex flex-column justify-content-center text-center text-white">
    <h1 class="text-black font-weight-bold"><span class="des">&nbsp</span> Institutions</h1>
  
</div> 

   
<div class="container-fluid justify-content-center text-center p-5">
        <div class="card-columns">
            <div class="card a-border shadow-sm p-3  card-fixed2 ">
                <a href="#"><img src="{{asset('img/partenaires/logo_mesrs.png')}}" alt="Ministère de l'Enseignement Supérieur et de la Recherche Scientifique" class="img-fluid img-dark"></a>
                <p>Lorem ipsum dolor consectur@site.prefix</p>
                <a class="text-black" href="#">siteweb.prefix</a>
                <p>+000 00 00 01 01 / 00 02 02 02</p>
            </div>

            <div class="card a-border shadow-sm p-3  card-fixed2">
                <a href="#"><img src="{{asset('img/partenaires/logo-menc.png')}}" alt="Ministère du numérique et de la communication" class="img-fluid img-dark"></a>
                <p>Lorem ipsum dolor consectur@site.prefix</p>
                <a class="text-black" href="#">siteweb.prefix</a>
                <p>+000 00 00 01 01 / 00 02 02 02</p>
            </div>

            <div class="card a-border shadow-sm p-3  card-fixed2">
                <a href="#"><img src="{{asset('img/partenaires/logo-mtfp.png')}}" alt="Ministère du travail" class="img-fluid img-dark"></a>
                <p>Lorem ipsum dolor consectur@site.prefix</p>
                <a class="text-black" href="#">siteweb.prefix</a>
                <p>+000 00 00 01 01 / 00 02 02 02</p>
            </div>

            <div class="card a-border shadow-sm p-3  card-fixed2">
                <a href="#"><img src="{{asset('img/partenaires/startupvalley.jpg')}}" alt="startup valley uac" class="img-fluid img-dark"></a>
                <p>Lorem ipsum dolor consectur@site.prefix</p>
                <a class="text-black" href="#">siteweb.prefix</a>
                <p>+000 00 00 01 01 / 00 02 02 02</p>
            </div>

            <div class="card a-border shadow-sm p-3  card-fixed2">
                <a href="#"><img src="{{asset('img/mcf.png')}}" alt="Mastercard foundation à l'UAC" class="img-fluid img-dark"></a>
                <p>Lorem ipsum dolor consectur@site.prefix</p>
                <a class="text-black" href="#">siteweb.prefix</a>
                <p>+000 00 00 01 01 / 00 02 02 02</p>
            </div>

           
        </div>
    </div>


@endsection