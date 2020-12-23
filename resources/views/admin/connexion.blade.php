<!DOCTYPE html>
<html>
    <head>
        <title>Jobs UAC </title>
        <meta charset="utf-8" >
        <meta name="description" content="Stop waste your time">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Fichier css  -->
        <link rel="stylesheet" href=" {{ asset('bootstrap/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href=" {{ asset('css/web.css') }}">
        <link rel="icon" href="../img/logo-uac.png" />
        <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Lato" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="{{asset('fontawesome/css/all.css')}}"/>
    </head>

    <body class="administration p-md-5 pt-5 m-0">
        <div class="container d-flex justify-content-center align-items-center ">
            
            <div class="card a-border ">

                <div class="card-header">
                    <h2 class="text-center">PANNEL ADMINISTRATEUR</h2>
                </div>

                <div class="card card-body">
                    <h3 class="text-center font-weight-bold">Connexion</h3>
                    
                    <form action="{{route('connexion_admin')}}" method="post">
                        {{csrf_field()}}
                        <div class="form-group">
                            <label for="identifiant">Identifant</label>
                            <input type="text" id="identifiant" name="identifiant" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <label for="identifiant">Mot de passe</label>
                            <input type="password" id="password" name="password" class="form-control" required>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-block btn-success a-border" >Se connecter</button>
                        </div>


                    </form>
                </div>
            </div>
        </div>        
        

    </body>

</html>