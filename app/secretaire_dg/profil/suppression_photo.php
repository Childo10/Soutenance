<?php
$data=$_SESSION['users_SDG'];

$new_data="";

$_SESSION['photo-erreurs_SDG'] = "";

$_SESSION['photo_success_SDG']="";

if (!isset($_POST["mot_de_passe"]) || empty($_POST["mot_de_passe"])) {
    $_SESSION['photo-erreurs_SDG']  = "Le champs du mot de passe est vide.";
}

if (isset($_POST["mot_de_passe"]) && !empty($_POST["mot_de_passe"]) && strlen(($_POST["mot_de_passe"])) < 8) {
    $_SESSION['photo-erreurs_SDG'] =  "Le champs doit contenir minimum 8 caractères. Les espaces ne sont pas pris en compte.";
}

if (isset($_POST["mot_de_passe"]) && !empty($_POST["mot_de_passe"]) && strlen(($_POST["mot_de_passe"])) >= 8) {
    $new_data= htmlentities($_POST['mot_de_passe']);
}

if(empty($_SESSION['photo-erreurs_SE'])){
    $password_exist=check_password_exist($new_data,$data['id_utilisateur']);
    
    if($password_exist){
        delete_avatar($data['id_utilisateur']);
        $_SESSION['users_SDG']['avatar']=recup_update_avatar($data['id_utilisateur']);
        $_SESSION['photo_success_SDG']="Suppression de photo réussie!";
        header('location:' . CHEMIN_PROJET . 'secretaire_dg/profil/');
    }
    else{
        $_SESSION['photo-erreurs_SDG']="La suppression a échoué! Mot de passe incorrect!";
        header('location:'. CHEMIN_PROJET . 'secretaire_dg/profil/');
    }
}
else{
    header('location:'. CHEMIN_PROJET . 'secretaire_dg/profil/');
}









