<?php
if (isset($_SESSION['users_SE']) and !empty($_SESSION['users_SE'])) {
    header('location:/soutenance/secretaire_etudes/dashbord/index');
}

$title = "Rénitialisation mot de passe - secretaire des études";
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
                            <form action="<?= CHEMIN_PROJET ?>secretaire_etudes/mot_de_passe_oublie/renitialisation_traitement" method="post" class="user">
                                <div class="form-group">
                                    <label for="mdp">Nouveau mot de passe <span class="text-danger">(*)</span> </label>
                                    <input type="password" name="mot_de_passe" class="form-control <?= isset($_SESSION['errors']['mot_de_passe']) ? 'is-invalid' : '' ?> " id="mdp" aria-describedby="emailHelp">
                                    <?php
                                    if (isset($_SESSION['errors']['mot_de_passe'])) {
                                    ?>
                                        <div class="invalid-feedback">
                                            <?= $_SESSION['errors']['mot_de_passe'] ?>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                </div>

                                <div class="form-group">
                                    <label for="new_mdp">Retaper le nouveau mot de passe <span class="text-danger">(*)</span></label>
                                    <input type="password" name="repeter_mot_de_passe" class="form-control <?= isset($_SESSION['errors']['repeter_mot_de_passe']) ? 'is-invalid' : '' ?> " id="new_mdp" aria-describedby="emailHelp">
                                    <?php
                                    if (isset($_SESSION['errors']['repeter_mot_de_passe'])) {
                                    ?>
                                        <div class="invalid-feedback">
                                            <?= $_SESSION['errors']['repeter_mot_de_passe'] ?>
                                        </div>
                                    <?php
                                    }
                                    ?>
                                </div>

                                <div class="form-group row">
                                    <div class=" col-md-8 col-sm-6 offset-md-2 offset-0 mb-lg-0  text-center">
                                        <input type="submit" value="Envoyer" class="mb-1 mb-md-0  btn btn-primary">
                                        <input type="reset" class=" btn btn-danger ">
                                    </div>
                                </div>

                            </form>

                            <div class="text-center">
                                <a class="small" href=" <?= CHEMIN_PROJET ?>secretaire_etudes/connexion/">Avez vous déja un compte? Connectez-vous!</a>
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
unset($_SESSION['errors']);
include('./app/Commun/dashbord_footer.php');
?>