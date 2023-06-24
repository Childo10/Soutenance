<?php
$data=$_SESSION['users_DE'];

$new_data="";

$_SESSION['photo-erreurs'] = "";

$_SESSION['photo_success']="";

if (!isset($_POST["mot_de_passe"]) || empty($_POST["mot_de_passe"])) {
    $_SESSION['photo-erreurs']  = "Le champs du mot de passe est vide.";
}

if (isset($_POST["mot_de_passe"]) && !empty($_POST["mot_de_passe"]) && strlen(($_POST["mot_de_passe"])) < 8) {
    $_SESSION['photo-erreurs'] =  "Le champs doit contenir minimum 8 caractères. Les espaces ne sont pas pris en compte.";
}

if (isset($_POST["mot_de_passe"]) && !empty($_POST["mot_de_passe"]) && strlen(($_POST["mot_de_passe"])) >= 8) {
    $new_data= htmlentities($_POST['mot_de_passe']);
}

if(empty($_SESSION['photo-erreurs'])){
    $password_exist=check_password_exist($new_data,$data['id_utilisateur']);
    //die(var_dump($password_exist));
    if($password_exist){
        delete_avatar($data['id_utilisateur']);
        $_SESSION['users_DE']['avatar']=recup_update_avatar($data['id_utilisateur']);
        $_SESSION['photo_success']="Suppression de photo réussie!";
        header('location:' . CHEMIN_PROJET . 'directeur_etudes/profil/');
    }
    else{
        $_SESSION['photo-erreurs']="La suppression a échoué! Mot de passe incorrect!";
        header('location:'. CHEMIN_PROJET . 'directeur_etudes/profil/');
    }
}
else{
    header('location:'. CHEMIN_PROJET . 'directeur_etudes/profil/');
}









