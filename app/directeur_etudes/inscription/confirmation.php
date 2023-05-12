<?php 

include('./app/commun/fonction.php');


if (check_id_utilisateur_exist_in_db($params[3], $params[4], "VALIDATION_COMPTE", 1, 0)){
    if(maj($params[3]) && maj1($params[3])){
        $_SESSION['success'] = "Inscription éffectué avec succès. Vous pouvez vous connecter";
        header('location:'.CHEMIN_PROJET.'directeur_etudes/connexion/index');
    }else{
        echo 'échec';
    }
}
else{
    echo 'échec';
}
