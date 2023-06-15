<?php
$errors = [];
$erreur_global ="";
$data = [];

if (isset($_SESSION['users_DE']['id_utilisateur']) and !empty($_SESSION['users_DE']['id_utilisateur'])) {
    //die($_SESSION['users_DE']['id_utilisateur']);
    $id = $_SESSION['users_DE']['id_utilisateur'];
}





if (isset($_POST["mdp"]) && empty($_POST["mdp"])) {
    $errors["mdp"] = "Le champs du mot de passe est vide.";
}


if (isset($_POST["mdp"]) && !empty($_POST["mdp"]) && strlen(($_POST["mdp"])) < 8) {
    $errors["mdp"] = "Le champs doit contenir minimum 8 caractères. Les espaces ne sont pas pris en compte.";
}

if (verifier_info($_POST["mdp"]) && strlen(($_POST["mdp"])) >= 8) {
    $data['mdp'] = $_POST['mdp'];
}


if (empty($errors)){
    if (check_password_exist($data['mdp'], $id)) {
        //die(var_dump($data['mdp']));
        if (desactiver_utilisateur($id)) {
            session_destroy();
            header("Location:" . CHEMIN_PROJET . "directeur_etudes/connexion/");
        }
        else{
            $erreur_global= "Echec lors de la désactivation de votre compte!";
            $_SESSION['erreur_globale'] = $erreur_global;
            header("Location:" . CHEMIN_PROJET . "directeur_etudes/profil/");

        }
    }
    else{
        $erreur_global = "Echec lors de la désactivation de votre compte. Mot de de passe incorrect!";
        $_SESSION['erreur_globale'] = $erreur_global;
        header("Location:" . CHEMIN_PROJET . "directeur_etudes/profil/");
    }
}
else{
    $_SESSION['errors'] = $errors;
    header("Location:" . CHEMIN_PROJET . "directeur_etudes/profil/");
}
