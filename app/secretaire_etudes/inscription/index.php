<?php
    $title="Inscription -Sécrétaire des études";
    include('./app/Commun/header.php');
?>

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
                                <label for="nom">Nom <span class="text-danger">(*)</span> </label>
                                <input type="text" class="form-control" name="nom" id="nom">
                            </div>
                            <div class="col-sm-6">
                            <label for="nom">Prénom <span class="text-danger">(*)</span> </label>
                                <input type="text" class="form-control" name="prenom" id="prenom">
                            </div>
                        </div>
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label for="username">Nom d'utilisateur <span class="text-danger">(*)</span> </label>
                                <input type="text" class="form-control" name="username" id="username">
                            </div>
                            <div class="col-sm-6">
                                <label for="email">Email <span class="text-danger">(*)</span> </label>
                                <input type="Email" class="form-control" name="email" id="email">
                            </div>
                        </div>
                        
                        <div class="form-group row">
                            <div class="col-sm-6 mb-3 mb-sm-0">
                                <label for="mdp">Mot de passe <span class="text-danger">(*)</span> </label>
                                <input type="password"  class="form-control"
                                    id="mdp" name="mot_de_passe" >
                            </div>
                            <div class="col-sm-6">
                            <label for="repeat_password">Répéter le mot de passe <span class="text-danger">(*)</span> </label>
                                <input type="password" name="repeter_mot_de_passe" class="form-control"
                                    id="repeat_password" >
                            </div>
                        </div>
                        
                                <div class="form-group">
                                    <div class="custom-control custom-checkbox small">
                                        <input type="checkbox" class="custom-control-input" id="customCheck">
                                        <label class="custom-control-label" for="customCheck">Accepter les conditions et les politiques d'utilisations
                                            </label>
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <div class=" col-md-8 col-sm-6 offset-md-2 offset-0 mb-lg-0  text-center">
                                        <input type="submit" value="Inscription" class="mb-1 mb-md-0  btn btn-primary">
                                        <input type="reset" class="btn btn-danger">
                                    </div>
                                </div>
                               
                      
                    </form>
                    <hr>
                    <div class="text-center">
                        <a class="small" href="/soutenance/secretaire_etudes/mot_de_passe_oublie/">Mot de passe oublié?</a>
                    </div>
                    <div class="text-center">
                        <a class="small" href="/soutenance/secretaire_etudes/connexion/">Avez vous déja un compte? Connectez-vous!</a>
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