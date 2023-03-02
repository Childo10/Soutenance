<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Mot de passe - Sécrétaire du DG</title>

    <!-- Custom fonts for this template-->
    <link href="../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Lien vers css -->
    <link href="../public/css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body>
>
 <div class="container">

<div class="card o-hidden col-lg-8 offset-lg-2 offset-md-0 border-0 shadow-lg my-5">
    <div class="card-body p-0 ">
        <!-- Nested Row within Card Body -->
        <div class="row">
            <div class="col-lg-12">
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Créer un compte!</h1>
                    </div>
                    <form class="user">
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" name="nom" id="nom"
                                    placeholder="nom">
                            </div>
                            <div class="col-sm-6">
                                <input type="text" class="form-control form-control-user" name="prenom" id="prenom"
                                    placeholder="Prénom">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="text" class="form-control form-control-user" name="username" id="exampleFirstName"
                                    placeholder="Nom d'utilisateur">
                            </div>
                            <div class="col-sm-6">
                                <input type="Email" class="form-control form-control-user" name="email" id="exampleLastName"
                                    placeholder="Email">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <input type="password" class="form-control form-control-user"
                                    id="exampleInputPassword" name="mdp" placeholder="Mot de passe">
                            </div>
                            <div class="col-sm-6">
                                <input type="password" class="form-control form-control-user"
                                    id="exampleRepeatPassword" placeholder="Repéter le mot de passe">
                            </div>
                        </div>
                        <a href="connexion_SE.php" class="btn btn-primary btn-user btn-block">
                            Enregistrer compte
                        </a>
                        <hr>
                    </form>
                    <hr>
                    <div class="text-center">
                        <a class="small" href="mdp_oublie_SE.php">Mot de passe oublié?</a>
                    </div>
                    <div class="text-center">
                        <a class="small" href="connexion_SE.php">Avez vous déja un compte? Connectez-vous!</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

</div>

<?php
    include('dashbord_footer_SE.php');
?>