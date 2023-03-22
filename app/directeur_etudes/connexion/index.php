<?php
    $title="Connexion - Directeur des études";
    include('./app/Commun/header.php');
?>

<body>
<div class="container">


<!-- Outer Row -->
<div class="row justify-content-center">

        <div class="card o-hidden border-0 col-lg-6 col-md-8 col-10 shadow-lg my-5">
            <div class="card-body p-0">
                <!-- Nested Row within Card Body -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-4">Bienvenue!</h1>
                            </div>
                            <form action="traitement"  class="user">
                                <div class="form-group">
                                    <label for="email">Entrer votre email</label>
                                    <input type="email" class="form-control"
                                        id="email" aria-describedby="emailHelp"
                                        >
                                </div>
                                <div class="form-group">
                                    <label for="mot_de_passe">Entrer votre mot de passe</label>
                                    <input type="password" name="mot_de_passe" class="form-control"
                                        id="mot_de_passe">
                                </div>
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox small">
                                        <input type="checkbox" class="custom-control-input" id="customCheck">
                                        <label class="custom-control-label" for="customCheck">Se souvenir de moi
                                            </label>
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <div class=" col-md-8 col-sm-6 offset-md-2 offset-0 mb-lg-0  text-center">
                                        <input type="submit" value="Connexion" class="mb-1 mb-md-0  btn btn-primary">
                                        <input type="reset" class="btn btn-danger">
                                    </div>
                                </div>
                               
                            </form>
                            <hr>
                            <div class="text-center">
                                <a class="small" href="/soutenance/directeur_etudes/mot_de_passe_oublie/">Mot de passe oublié ?</a>
                            </div>
                            <div class="text-center">
                                <a class="small" href="/soutenance/directeur_Etudes/inscription/">Créez un compte!</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

</div>

</div>

<?php 
    include('./app/Commun/dashbord_footer.php');
?>