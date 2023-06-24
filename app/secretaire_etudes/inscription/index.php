<?php

if (isset($_SESSION['users_SE']) and !empty($_SESSION['users_SE'])) {
    header('location:/soutenance/secretaire_etudes/dashbord/index');
}
$title = "Inscription - Sécrétaire des études";
include('./app/Commun/header.php');

$data = [];





if (isset($_SESSION['data']) && !empty($_SESSION['data'])) {
    $data = $_SESSION['data'];
}

?>

<div class="container">

    <div class="card o-hidden col-lg-8 offset-lg-2 offset-md-0 border-0 shadow-lg my-5">
        <div class="card-body p-0 ">
            <!-- Nested Row within Card Body -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="p-5">
                        <div class="text-center">
                            <?php
                            if (!empty($_SESSION['inscription-message-success-global']) or !empty($_SESSION['inscription-message-success-global'])) {
                            ?>
                                <div class="alert-message">
                                    <?= $_SESSION['inscription-message-success-global'] ?>
                                </div>
                                <style>
                                    .alert-message {
                                        position: fixed;
                                        top: 30px;
                                        left: 50%;
                                        transform: translateX(-50%);
                                        padding: 10px 20px;
                                        background-color: #007bff;
                                        color: white;
                                        font-size: 17px;
                                        border-radius: 5px;
                                        opacity: 1;
                                        transition: opacity 0.4s ease-in-out;
                                    }



                                    .hide {
                                        opacity: 0;
                                    }
                                </style>

                            <?php
                            }
                            ?>



                            <?php
                            if (!empty($_SESSION['inscription-message-erreur-global']) or !empty($_SESSION['inscription-message-erreur-global'])) {
                            ?>
                                <div class="alert-message">
                                    <?= $_SESSION['inscription-message-erreur-global'] ?>
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
                            <h1 class="h4 text-gray-900 mb-4">Créer un compte!</h1>
                        </div>
                        <form class="user" method="post" action="<?= CHEMIN_PROJET ?>secretaire_etudes/inscription/traitement">
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="nom">Nom <span class="text-danger">(*)</span> </label>
                                    <input type="text" class="form-control  <?= isset($_SESSION['errors']['nom']) ? 'is-invalid' : '' ?>"  value="<?= !empty($data['nom']) ? $data['nom'] : '' ?>" name="nom" id="nom">
                                    <?php
                                        if (isset($_SESSION['errors']['nom'])) {
                                        ?>
                                            <div class="invalid-feedback">
                                                <?= $_SESSION['errors']['nom'] ?>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                </div>
                                <div class="col-sm-6">
                                    <label for="nom">Prénom <span class="text-danger">(*)</span> </label>
                                    <input type="text" class="form-control <?= isset($_SESSION['errors']['prenom']) ? 'is-invalid' : '' ?> " name="prenom" value="<?= !empty($data['prenom']) ? $data['prenom'] : '' ?>" id="prenom">
                                    <?php
                                        if (isset($_SESSION['errors']['prenom'])) {
                                        ?>
                                            <div class="invalid-feedback">
                                                <?= $_SESSION['errors']['prenom'] ?>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                </div>
                            </div>
                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="username">Nom d'utilisateur <span class="text-danger">(*)</span> </label>
                                    <input type="text" class="form-control <?= isset($_SESSION['errors']['username']) ? 'is-invalid' : '' ?> " value="<?= !empty($sata['username']) ? $sata['username'] : '' ?>" name="username" id="username">
                                    <?php
                                        if (isset($_SESSION['errors']['username'])) {
                                        ?>
                                            <div class="invalid-feedback">
                                                <?= $_SESSION['errors']['username'] ?>
                                            </div>
                                        <?php
                                        }
                                        ?>
                                </div>
                                <div class="col-sm-6">
                                    <label for="email">Email <span class="text-danger">(*)</span> </label>
                                    <input type="Email" class="form-control <?= isset($_SESSION['errors']['email']) ? 'is-invalid' : '' ?> " value="<?= !empty($sata['email']) ? $sata['email'] : '' ?>" name="email" id="email">
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
                            </div>

                            <div class="form-group row">
                                <div class="col-sm-6 mb-3 mb-sm-0">
                                    <label for="mdp">Mot de passe <span class="text-danger">(*)</span> </label>
                                    <input type="password" class="form-control <?= isset($_SESSION['errors']['mot_de_passe']) ? 'is-invalid' : '' ?>" id="mdp" name="mot_de_passe">
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
                                <div class="col-sm-6">
                                    <label for="repeat_password">Répéter le mot de passe <span class="text-danger">(*)</span> </label>
                                    <input type="password" name="repeter_mot_de_passe" class="form-control <?= isset($_SESSION['errors']['repeter_mot_de_passe"']) ? 'is-invalid' : '' ?>" id="repeat_password">
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
                            </div>

                            <div class="form-group">
                                <div class="custom-control custom-checkbox small">
                                    <div class="custom-control custom-checkbox small">
                                    <input type="checkbox" class="custom-control-input <?= isset($_SESSION['errors']['terms_condition']) ? 'is-invalid' : '' ?> " id="customCheck" name="terms_condition"> 
                                    <label class="custom-control-label" for="customCheck">Accepter les conditions et les politiques d'utilisations
                                    </label>
                                    <?php
                                        if (isset($_SESSION['errors']['terms_condition'])) {
                                        ?>
                                            <div class="invalid-feedback">
                                                <?= $_SESSION['errors']['terms_condition'] ?>
                                            </div>
                                        <?php
                                        }
                                        ?>
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
                            <a class="small" href="<?= CHEMIN_PROJET ?>secretaire_etudes/mot_de_passe_oublie/">Mot de passe oublié?</a>
                        </div>
                        <div class="text-center">
                            <a class="small" href="<?= CHEMIN_PROJET ?>secretaire_etudes/connexion/">Avez vous déja un compte? Connectez-vous!</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

<?php
unset($_SESSION['errors']);
unset($_SESSION['inscription-message-erreur-global']);
unset($_SESSION['inscription-message-success-global']);
include('./app/Commun/dashbord_footer.php');
?>