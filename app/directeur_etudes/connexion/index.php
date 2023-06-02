<?php
//Si l'utilisateur est connecté, je le redirige vers le dashbord.
if (isset($_SESSION['users']) and !empty($_SESSION['users'])) {
    header('location:' . CHEMIN_PROJET . '/directeur_etudes/dashbord/index');
}






$title = "Connexion - Directeur des études";
include('./app/Commun/header.php');

$data = [];
if (isset($_SESSION['data']) && !empty($_SESSION['data'])) {
    $data = $_SESSION['data'];
}

if (isset($_COOKIE['data_users']) and !empty($_COOKIE['data_users'])) {
    $users_mail = json_decode($_COOKIE['data_users']);
}

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

                            <!----message d'erreur de connexion----->
                            <?php
                                if (!empty($_SESSION["erreur_connexion_global"]) or !empty($_SESSION["erreur_connexion_global"])) {
                                ?>
                                    <div class="alert-message">
                                        <?= $_SESSION["erreur_connexion_global"]?>
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
                                            font-size: 16px;
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


                                <!----message de succès global après validation de mail----->
                                <?php
                                if (!empty($_SESSION['validation-compte-message-success']) or !empty($_SESSION['validation-compte-message-success'])) {
                                ?>
                                    <div class="alert-message">
                                        <?= $_SESSION['validation-compte-message-success'] ?>
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
                                            font-size: 16px;
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


                                <!----message d'erreur global après validation de mail----->
                                <?php
                                if (!empty($_SESSION['validation-compte-message-erreur']) or !empty($_SESSION['validation-compte-message-erreur'])) {
                                ?>
                                    <div class="alert-message">
                                        <?= $_SESSION['validation-compte-message-erreur'] ?>
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
                                            font-size: 16px;
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


                                <div class="text-center">

                                    <h1 class="h4 text-gray-900 mb-4">Bienvenue!</h1>
                                </div>
                                <form action="traitement" method="post" class="user">
                                    <div class="form-group">
                                        <label for="email">Entrer votre email</label>
                                        <input type="email" name="email" id="email" aria-describedby="emailHelp" value="<?php if (isset($data['email']) && !empty($data['email'])) {
                                                                                                                            echo $data['email'];
                                                                                                                        } elseif (isset($users_mail)) {
                                                                                                                            echo $users_mail;
                                                                                                                            unset($_SESSION['data']);
                                                                                                                        } else {
                                                                                                                            echo '';
                                                                                                                        } ?>" class="form-control <?= isset($_SESSION['errors']['email']) ? 'is-invalid' : '' ?> <?= isset($_SESSION["erreur_connexion_global"]) ? 'is-invalid' : '' ?>">

                                        <?php
                                        if (isset($_SESSION['errors']['email'])) {
                                        ?>
                                            <div class="invalid-feedback">
                                                <?= $_SESSION['errors']['email'] ?>
                                            </div>
                                        <?php
                                        } elseif (isset($users_mail) and isset($_SESSION['errors']['email'])) {
                                            echo "";
                                        }
                                        ?>
                                    </div>
                                    <div class="form-group">
                                        <label for="mot_de_passe">Entrer votre mot de passe</label>
                                        <input type="password" name="mot_de_passe" value="<?php if (isset($data['mot_de_passe']) && !empty($data['mot_de_passe'])) {
                                                                                                echo $data['mot_de_passe'];
                                                                                            } else {
                                                                                                echo '';
                                                                                            } ?>" class="form-control <?= isset($_SESSION['errors']['mot_de_passe']) ? 'is-invalid' : '' ?> <?= isset($_SESSION["erreur_connexion_global"]) ? 'is-invalid' : '' ?>" id="mot_de_passe">
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
                                        <div class="custom-control custom-checkbox small">
                                            <input type="checkbox" name="se_souvenir" class="custom-control-input" id="customCheck">
                                            <label class="custom-control-label" for="customCheck">Se souvenir de moi
                                            </label>
                                        </div>

                                    </div>
                                    <div class="form-group row">
                                        <div class=" col-md-8 col-sm-6 offset-md-2 offset-0 mb-lg-0  text-center">
                                            <input type="submit" value="Connexion" class="mb-1 mb-md-0  btn btn-primary">
                                            <input type="reset" value="Annuler" class="btn btn-danger">
                                        </div>
                                    </div>

                                </form>
                                <hr>
                                <div class="text-center">
                                    <a class="small" href="<?= CHEMIN_PROJET ?>directeur_etudes/mot_de_passe_oublie/">Mot de passe oublié ?</a>
                                </div>

                                <div class="text-center">
                                    <a class="small" href="<?= CHEMIN_PROJET ?>directeur_Etudes/inscription/">Créez un compte!</a>
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
    unset($_SESSION["erreur_connexion_global"]);
    unset($_SESSION["validation-compte-message-erreur"]);
    unset($_SESSION["validation-compte-message-success"]);


    include('./app/Commun/dashbord_footer.php');
    ?>