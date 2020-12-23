@extends('composant.app')
@section('title','newsletter')
@section('content')
<div class="jumbotron news d-flex flex-column justify-content-center text-center text-white">
    <h1 class="text-black font-weight-bold"><span class="des">&nbsp</span> Souscrivez aux alertes email</h1>
  
</div> 

<div class="container mb-4 p-md-5 text-center bg-light">
    <p class="font-weight-bold">Soyez les premiers informés des nouvelles opportunites</p>
    <div class="d-flex justify-content-center">
  <form class="form-inline">
    
    <input type="text" placeholder="votre adresse email" name="newsletter" class="form-control  w-sm-50 ipt" required>
    <input type="submit"  value="Envoyer" class="btn btn-success1 ipt">
  </form>
    </div>
</div>
    
@endsection