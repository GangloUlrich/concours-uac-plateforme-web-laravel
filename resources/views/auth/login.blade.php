@extends('layouts.app')
@section('title','Login')

@section('content')
<div class="container">
    <div class="row login">
        <div class="offset-md-3 col-md-6 log">
            <img src="{{ asset('../img/uacjob-blanc.png') }}" class="img-fluid">
            <h1 class="font-weight-bold text-danger text-center mt-1">CONNEXION</h1>
            <div class="row mt-2">
                <form class="offset-1 col-10" method="POST" action="{{ route('login') }}">
                    {{ csrf_field() }}

                    <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                        <label for="email" class="control-label ">Identifiant</label>

                        <div class="">
                            <input id="email" type="email" class="form-control log1" name="email" value="{{ old('email') }}" required autofocus><br>

                            @if ($errors->has('email'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
                        <label for="password" class="control-label ">Mot de passe</label>

                        <div class="">
                            <input id="password" type="password" class="form-control log1" name="password" required>

                            @if ($errors->has('password'))
                                <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                            @endif
                        </div>
                    </div>

                    <div class="form-group">
                        <div class="">
                            <a class="btn btn-link text-danger" href="{{ route('password.request') }}">
                                Mot de passe oublié?
                            </a>
                            
                        </div>
                    </div>



                    <div class="form-group ">
                        <div class="">
                            <input type="submit" name="valid_form" value="Se connecter" class="btn btn-success btn-block a-border">
                        </div>
                    </div>

                    <div class="form-group  mt-1">
                        <p class="text-black">Vous n'aviez pas encore de compte?<a class="btn btn-link text-danger " href="{{ route('inscription') }}">
                            Créer un compte
                        </a></p>
                    </div>


                </form>
            </div>

        </div>
    </div>
</div>
@endsection
