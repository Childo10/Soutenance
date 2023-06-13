<?php
$title = "Rénitialisation mot de passe - Directeur des études";
include('./app/Commun/header.php');
?>

<div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

        <div class="col-xl-6 col-lg-8 col-md-9">

            <div class="card o-hidden border-0 shadow-lg my-5">
                <div class="card-body p-0">
                    <!-- Nested Row within Card Body -->
                    <div class="row">
                    </div>
                    <div class="col-lg-12">
                        <div class="p-5">
                            <div class="text-center">
                                <h1 class="h4 text-gray-900 mb-2">Rénitialiser votre mot de passe!</h1>
                            </div>
                            <form action="<?= CHEMIN_PROJET ?>directeur_etudes/mot_de_passe_oublie/traitement" method="post" class="user">
                                <div class="form-group">
                                    <label for="mdp">Nouveau mot de passe <span class="text-danger">(*)</span> </label>
                                    <input type="password" name="mdp" class="form-control" id="mdp" aria-describedby="emailHelp">
                                </div>

                                <div class="form-group">
                                    <label for="new_mdp">Retaper le nouveau mot de passe <span class="text-danger">(*)</span></label>
                                    <input type="password" name="new_mdp" class="form-control" id="new_mdp" aria-describedby="emailHelp">
                                </div>

                                <div class="form-group row">
                                    <div class=" col-md-8 col-sm-6 offset-md-2 offset-0 mb-lg-0  text-center">
                                        <input type="submit" value="Envoyer" class="mb-1 mb-md-0  btn btn-primary">
                                        <input type="reset" class=" btn btn-danger ">
                                    </div>
                                </div>

                            </form>

                            <div class="text-center">
                                <a class="small" href=" <?= CHEMIN_PROJET ?>directeur_etudes/connexion/">Avez vous déja un compte? Connectez-vous!</a>
                            </div>
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