<?php
$matricule="";
$est_actif="";
$activation_success="";
$activation_echec="";
$desactivation_success="";
$desactivation_echec="";



if(isset($params['3']) && !empty($params['3']) && is_numeric($params['3'])){
    $matricule=$params['3'];
   
}

if(isset($params['4'])) {
    $est_actif=$params['4'];
   
}

if($est_actif==0){
    $activer_etudiant=activation_etudiant($matricule);
    if($activer_etudiant){
        $activation_success="Etudiant activé avec succès";
        $_SESSION['message_success_activation_global']=$activation_success;
        header('location:' . CHEMIN_PROJET . 'directeur_etudes/etudiant/liste_etudiant');
        
    }
    else{
        $activation_echec="Une erreur est survenue lors de l'activation de l'étudiant";
        $_SESSION['message_erreur_activation']= $activation_echec;
        header('location:' . CHEMIN_PROJET . 'directeur_etudes/etudiant/liste_etudiant');
    }
}

if($est_actif==1){
    $desactiver_etudiant=desactivation_etudiant($matricule);
    if($desactiver_etudiant){
        $desactivation_success="Etudiant desactivé avec succès";
        $_SESSION['message_success_activation_global']= $desactivation_success;
        header('location:' . CHEMIN_PROJET . 'directeur_etudes/etudiant/liste_etudiant');
    }
    else{
        $desactivation_echec="Une erreur est survenue lors de la désactivation de l'étudiant";
        $_SESSION['message_erreur_activation']=$desactivation_echec;
        header('location:' . CHEMIN_PROJET . 'directeur_etudes/etudiant/liste_etudiant');
    }
}