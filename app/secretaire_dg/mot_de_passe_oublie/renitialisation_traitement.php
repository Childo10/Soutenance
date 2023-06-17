<?php
$errors = [];

    $id = $_SESSION['id'];




//Traitement du changement de mot de passe

if (!isset($_POST["mot_de_passe"]) || empty($_POST["mot_de_passe"])) {
    $errors["mot_de_passe"] = "Le champs du mot de passe est vide.";
}

if (isset($_POST["mot_de_passe"]) && !empty($_POST["mot_de_passe"]) && strlen(($_POST["mot_de_passe"])) < 8) {
    $errors["mot_de_passe"] = "Le champs doit contenir minimum 8 caractères. Les espaces ne sont pas pris en compte.";
}

if (isset($_POST["mot_de_passe"]) && !empty($_POST["mot_de_passe"]) && strlen(($_POST["mot_de_passe"])) >= 8 && empty($_POST["repeter_mot_de_passe"])) {
    $errors["repeter_mot_de_passe"] = "Entrez votre mot de passe à nouveau.";
}

if ((isset($_POST["repeter_mot_de_passe"]) && !empty($_POST["repeter_mot_de_passe"]) && strlen(($_POST["mot_de_passe"])) >= 8 && $_POST["repeter_mot_de_passe"] != $_POST["mot_de_passe"])) {
    $errors["repeter_mot_de_passe"] = "Mot de passe erroné. Entrez le mot de passe du précédent champs";
}

if(verifier_info($_POST["mot_de_passe"]) && verifier_info($_POST["repeter_mot_de_passe"]) && strlen(($_POST["mot_de_passe"])) >= 8 && strlen(($_POST["repeter_mot_de_passe"])) >= 8 && $_POST["repeter_mot_de_passe"] == $_POST["mot_de_passe"]){
    $data['mot_de_passe']= htmlentities($_POST['mot_de_passe']);
    
}


    if (empty($errors)) {
        if(update_password($id, $data['mot_de_passe'])) {
                session_destroy();
                header("Location:" . CHEMIN_PROJET . "secretaire_dg/connexion/index");
            }
        
        }
     else {
        $_SESSION['errors'] = $errors;
        header('location:' . CHEMIN_PROJET . 'secretaire_dg/mot_de_passe_oublie/renitialisation');
    }