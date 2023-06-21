<?php
$data=$_SESSION['users_DE'];

$new_data="";













if (!isset($_POST["mot_de_passe"]) || empty($_POST["mot_de_passe"])) {
    $errors["mot_de_passe"] = "Le champs du mot de passe est vide.";
}

if (isset($_POST["mot_de_passe"]) && !empty($_POST["mot_de_passe"]) && strlen(($_POST["mot_de_passe"])) < 8) {
    $errors["mot_de_passe"] = "Le champs doit contenir minimum 8 caractères. Les espaces ne sont pas pris en compte.";
}

if (isset($_POST["mot_de_passe"]) && !empty($_POST["mot_de_passe"]) && strlen(($_POST["mot_de_passe"])) >= 8) {
    $new_data= htmlentities($_POST['mot_de_passe']);
}

if(empty($errors)){
    $password_exist=check_password_exist($new_data,$data['id_utilisateur']);
    //die(var_dump($password_exist));
    if($password_exist){
        delete_avatar($data['id_utilisateur']);
        $_SESSION['users_DE']['avatar']=recup_update_avatar($data['id_utilisateur']);
        header('location:' . CHEMIN_PROJET . 'directeur_etudes/profil/');
    }
    else{

    }
}
else{

}









