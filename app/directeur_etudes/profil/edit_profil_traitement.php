<?php
include('./app/commun/fonction.php');
$errors = [];
$erreurs = [];
$data = [];
$message_erreur_global = "";
$message_success_global = "";

if (isset($_SESSION['users']['id_utilisateur']) and !empty($_SESSION['users']['id_utilisateur'])) {
    $id = $_SESSION['users']['id_utilisateur'];
}






if (isset($_POST['button'])) {

    if (verifier_info($_POST['nom'])) {
        $data['nom'] = htmlentities($_POST['nom']);
    } else {
        $errors['nom'] = 'Nom incorrect ou vide, veuillez réssayez';
    }

    if (verifier_info($_POST['prenom'])) {
        $data['prenom'] = htmlentities($_POST['prenom']);
    } else {
        $errors['prenom'] = 'Prénom incorrect ou vide, veuillez réssayez';
    }

    //if(verifier_info($_POST['email']) AND filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    //$data['email']= htmlentities($_POST['email']);

    //}else{
    //$errors['email']='Email incorrect ou vide, veuillez réssayez';
    //}

    if (verifier_info($_POST['nom_utilisateur'])) {
        $data['nom_utilisateur'] = htmlentities($_POST['nom_utilisateur']);
    } else {
        $errors['nom_utilisateur'] = "Nom d'utilisateur incorrect ou vide, veuillez réssayez";
    }

    if (!isset($_POST["mot_de_passe"]) || empty($_POST["mot_de_passe"])) {
        $errors["mot_de_passe"] = "Le champs du mot de passe est vide.";
    }

    if (isset($_POST["mot_de_passe"]) && !empty($_POST["mot_de_passe"]) && strlen(($_POST["mot_de_passe"])) < 8) {
        $errors["mot_de_passe"] = "Le champs doit contenir minimum 8 caractères. Les espaces ne sont pas pris en compte.";
    }

    if (verifier_info($_POST["mot_de_passe"]) && strlen(($_POST["mot_de_passe"])) >= 8) {
        $data['mot_de_passe'] = $_POST['mot_de_passe'];
    }

    if (empty($errors)) {

        $check_password = check_password_exist(($data['mot_de_passe']), $id);
        if ($check_password) {

            if (update_profil_in_db($id, $data['nom'], $data['prenom'],  $data['nom_utilisateur'])) {


                $_SESSION['users'] = recup_update_profil($id);

                $message_success_global = "Modification réussie !";
                $_SESSION['message_global'] = $message_success_global;


                header('location:' . CHEMIN_PROJET . 'directeur_etudes/profil/index');
            }
        } else {
            $_SESSION['err_mdp'] = $err_mdp = "Mot de passe incorrect, veuillez réessayer.";
            $message_erreur_global = "Mot de passe incorrect, veuillez réessayer.!";
            $_SESSION['message_global'] = $message_erreur_global;


            header('location:' . CHEMIN_PROJET . 'directeur_etudes/profil/edit_profil');
        }
    } else {
        $_SESSION['errors'] = $errors;
        header('location:' . CHEMIN_PROJET . 'directeur_etudes/profil/edit_profil');
    }
}


