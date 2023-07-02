<?php
$codefil="";
$est_actif="";
$activation_success="";
$activation_echec="";
$desactivation_success="";
$desactivation_echec="";



if(isset($params['3']) && !empty($params['3']) && is_numeric($params['3'])){
    $codefil=$params['3'];
   
}

if(isset($params['4'])) {
    $est_actif=$params['4'];
   // die(var_dump( $est_actif));
   
}

if($est_actif==0){
    $activer_filiere=activation_filiere( $codefil);
    if($activer_filiere){
        $activation_success="Filière activée avec succès";
        $_SESSION['message_success_activation_global']=$activation_success;
        header('location:' . CHEMIN_PROJET . 'directeur_etudes/filiere/liste_filiere');
        
    }
    else{
        $activation_echec="Une erreur est survenue lors de l'activation de la filière";
        $_SESSION['message_erreur_activation']= $activation_echec;
        header('location:' . CHEMIN_PROJET . 'directeur_etudes/filiere/liste_filiere');
    }
}

if($est_actif==1){
    $desactiver_filiere=desactivation_filiere( $codefil);
    if($desactiver_filiere){
        $desactivation_success="Filière desactivée avec succès";
        $_SESSION['message_success_activation_global']= $desactivation_success;
        header('location:' . CHEMIN_PROJET . 'directeur_etudes/filiere/liste_filiere');
    }
    else{
        $desactivation_echec="Une erreur est survenue lors de l'activation de la filière";
        $_SESSION['message_erreur_activation']=$desactivation_echec;
        header('location:' . CHEMIN_PROJET . 'directeur_etudes/filiere/liste_filiere');
    }
}