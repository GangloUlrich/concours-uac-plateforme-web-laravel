@extends('layouts.app')
@section('title','Sign in')

@section('content')
    <div class="container">
        <div class="row login">
            <div class="offset-md-3 col-md-6 log">
                <img src="{{ asset('../img/uacjob-blanc.png') }}" class="img-fluid">
                <h1 class="font-weight-bold text-danger text-center mt-1">INSCRIPTION</h1>
                <div class="row mt-5">
                    <form class="offset-1 col-10" method="POST" action="{{ route('insertion') }}">
                        {{ csrf_field() }}

                        <div class="form-group">
                            <label for="idnom" class="control-label ">Nom</label>

                            <div class="">
                                <input id="nom" type="text" class="form-control log1" name="nom" value="{{ old('email') }}" required autofocus><br>

                            </div>
                        </div>

                        <div class="form-group">
                            <label for="idprenom" class="control-label ">Prénom</label>

                            <div class="">
                                <input id="prenom" type="text" class="form-control log1" name="prenom" required><br>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="idemail" class="control-label ">Email</label>

                            <div class="">
                                <input id="email" type="email" class="form-control log1" name="email" value="{{ old('email') }}" required autofocus><br>

                            </div>
                        </div>

                        <div class="form-group">
                            <label for="idpassword" class="control-label ">Mot de passe</label>

                            <div class="">
                                <input id="password" type="password" class="form-control log1" name="password" required><br>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="idpwd" class="control-label ">Confirmer mot de passe</label>

                            <div class="">
                                <input id="pwd" type="password" class="form-control log1" name="pwd" required onkeyup="check();">
                                <span id="message"></span><br>

                                <script>
                                    var check = function () {
                                        if (document.getElementById('password').value ==
                                            document.getElementById('pwd').value) {
                                            document.getElementById('message').style.color = 'green';
                                            document.getElementById('message').innerHTML = 'Identique';
                                        } else {
                                            document.getElementById('message').style.color = 'red';
                                            document.getElementById('message').innerHTML = 'Pas identique';
                                        }
                                    }
                                </script>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="idstatut" class="control-label ">Vous-êtes ?</label>

                            <div class="">
                                <select class="form-control" id="statut" name="statut">
                                    <option value="etudiant">Etudiant</option>
                                    <option value="recruteur">Recruteur</option>
                                </select><br>
                            </div>
                        </div>



                    <!--<div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <div class="checkbox">
                                    <label>
                                        <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
                                    </label>
                                </div>
                            </div>
                        </div>-->



                        <div class="form-group ">
                            <div class="">
                                <input type="submit" name="valid_form" value="S'inscrire" class="btn btn-success btn-block a-border ">
                            </div>
                        </div>

                        <div class="form-group  mt-1">
                            <p class="text-black">Vous aviez déjà un compte?<a class="btn btn-link text-danger " href="{{ route('login') }}">
                                Se connecter
                            </a></p>
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>
@endsection
