<?php 
 $id_utilisateur  = $params[3];
 $token  = $params[4];
 $_SESSION['id']=$id_utilisateur ;

if (check_token_exist($id_utilisateur ,  $token , "MOT_DE_PASSE_OUBLIE")){
    if(suppression_logique_token($id_utilisateur) && activation_compte_utilisateur($id_utilisateur)){
        $_SESSION['validation-compte-message-success'] = "Votre compte est a présent vérifié. Vous pouvez vous changer votre mot de passe";
    }else{
        $_SESSION['validation-compte-message-erreur'] = "Oups!!! Une erreur s'est produite lors de la vérification du compte. Veuillez contacter un administrateur";
    }

}else{
    $_SESSION['validation-compte-message-erreur'] = "Oups!!! la clé d'activation de vérification est introuvable. Veuillez contacter un administrateur";
}

header('location: ' . CHEMIN_PROJET. 'secretaire_etudes/mot_de_passe_oublie/renitialisation');