<?php
$matricule="";
$est_actif="";
$activation_success="";
$activation_echec="";
$desactivation_success="";
$desactivation_echec="";



if(isset($params['3']) && !empty($params['3']) && is_numeric($params['3'])){
    $numins=$params['3'];
    
   
}

if(isset($params['4'])) {
    $est_actif=$params['4'];

   
}

if($est_actif==0){
    $activer_inscription=activation_inscription( $numins);
    if($activer_inscription){
        $activation_success="Inscription activée avec succès";
        $_SESSION['message_success_activation_global']=$activation_success;
        header('location:' . CHEMIN_PROJET . 'directeur_etudes/inscription_etudiant/liste_inscription');
        
    }
    else{
        $activation_echec="Une erreur est survenue lors de l'activation de l'inscription";
        $_SESSION['message_erreur_activation']= $activation_echec;
        header('location:' . CHEMIN_PROJET . 'directeur_etudes/inscription_etudiant/liste_inscription');
    }
}

if($est_actif==1){
    $desactiver_inscription=desactivation_inscription($numins);
    if($desactiver_inscription){
        $desactivation_success="Inscription desactivée avec succès";
        $_SESSION['message_success_activation_global']= $desactivation_success;
        header('location:' . CHEMIN_PROJET . 'directeur_etudes/inscription_etudiant/liste_inscription');
    }
    else{
        $desactivation_echec="Une erreur est survenue lors de la désactivation de l'inscription";
        $_SESSION['message_erreur_activation']=$desactivation_echec;
        header('location:' . CHEMIN_PROJET . 'directeur_etudes/inscription_etudiant/liste_inscription');
    }
}