@extends('composant.app')
@section('title','Contactez un conseiller en emploi')
@section('content')

<div class="jumbotron news d-flex flex-column justify-content-center text-center text-white m-0">
    <h1 class="text-black font-weight-bold"><span class="des">&nbsp</span>Contacter un conseiller en emploi</h1>
    
</div>

<div class="container-fluid bg-light py-2 ">
        <div class="container bg-white py-2 my-4">
            <div class="container p-5">
  
    <form class="" action="" method="POST"> 
        {{ csrf_field() }}

        <div class="form-group">
            <label for="nom">Nom</label>
            <input type="text" name="nom" id="nom"  class="form-control" >
        </div>  
        
        <div class="form-group">
            <label for="prenom">Prenom</label>
            <input type="text" name="prenom" id="prenom"  class="form-control" >
        </div>   

        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" name="email" id="email"  class="form-control" >
        </div>   

        <div class="form-group">
            <label for="message">Message</label>
            <textarea class="form-control" rows="5"></textarea>
        </div>   
        
        <button type="submit" class="btn btn-success a-border">Envoyer</button>
    </form>
      
    </div>
</div>
</div>
@endsection