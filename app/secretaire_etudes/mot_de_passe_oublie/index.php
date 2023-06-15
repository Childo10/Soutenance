<?php
if (isset($_SESSION['users_SE']) and !empty($_SESSION['users_SE'])) {
    header('location:/soutenance/secretaire_etudes/dashbord/');
}

$title = "Mot de passe oublié - Sécrétaire des études";
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
                                <?php
                                if (isset($_SESSION['changement-message-erreur-global']) && !empty($_SESSION['changement-message-erreur-global'])) {
                                ?>
                                    <div class="alert-message">
                                        <?= $_SESSION['changement-message-erreur-global'] ?>
                                    </div>
                                    <style>
                                        .alert-message {
                                            position: fixed;
                                            top: 30px;
                                            left: 50%;
                                            transform: translateX(-50%);
                                            padding: 10px 20px;
                                            background-color: red;
                                            color: white;
                                            font-size: 17px;
                                            border-radius: 5px;
                                            opacity: 1;
                                            transition: opacity 3s ease-in-out;
                                        }



                                        .hide {
                                            opacity: 0;
                                        }
                                    </style>

                                <?php
                                }
                                ?>

                                <h1 class="h4 text-gray-900 mb-2">Mot de passe oublié ? </h1>
                                <p class="mb-4">Nous comprenons, des choses arrivent. Entrez simplement votre adresse e-mail ci-dessous et nous vous
                                    enverrons un lien pour réinitialiser votre mot de passe!</p>
                            </div>
                            <form action="<?= CHEMIN_PROJET ?>secretaire_etudes/mot_de_passe_oublie/traitement" method="post" class="user">
                                <div class="form-group">
                                    <label for="email">Entrer votre adresse email <span class="text-danger">(*)</span> </label>
                                    <input type="email" name="email" class="form-control <?= isset($_SESSION['errors']['email']) ? 'is-invalid' : '' ?>" value="<?= isset($_SESSION['data']) ? $_SESSION['data']: '' ?>" id="email" aria-describedby="emailHelp">
                                    <?php
                                        if (isset($_SESSION['errors']['email'])) {
                                        ?>
                                            <div class="invalid-feedback">
                                                <?= $_SESSION['errors']['email'] ?>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                </div>

                                <div class="form-group row">
                                    <div class=" col-md-8 col-sm-6 offset-md-2 offset-0 mb-lg-0  text-center">
                                        <input type="submit" value="Envoyer" class="mb-1 mb-md-0  btn btn-primary">
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