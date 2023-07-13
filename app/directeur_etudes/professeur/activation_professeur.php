<?php
$numprof="";
$est_actif="";
$activation_success="";
$activation_echec="";
$desactivation_success="";
$desactivation_echec="";



if(isset($params['3']) && !empty($params['3']) && is_numeric($params['3'])){
    $numprof=$params['3'];
   
}

if(isset($params['4'])) {
    $est_actif=$params['4'];
   
}

if($est_actif==0){
    $activer_professeur=activation_professeur($numprof);
    if($activer_professeur){
        $activation_success="Professeur activé(e) avec succès";
        $_SESSION['message_success_activation_global']=$activation_success;
        header('location:' . CHEMIN_PROJET . 'directeur_etudes/professeur/liste_professeur');
        
    }
    else{
        $activation_echec="Une erreur est survenue lors de l'activation de ce professeur";
        $_SESSION['message_erreur_activation']= $activation_echec;
        header('location:' . CHEMIN_PROJET . 'directeur_etudes/professeur/liste_professeur');
    }
}

if($est_actif==1){
    $desactiver_professeur=desactivation_professeur($numprof);
    if($desactiver_professeur){
        $desactivation_success="Professeur desactivé(e) avec succès";
        $_SESSION['message_success_activation_global']= $desactivation_success;
        header('location:' . CHEMIN_PROJET . 'directeur_etudes/professeur/liste_professeur');
    }
    else{
        $desactivation_echec="Une erreur est survenue lors de la désactivation du professeur";
        $_SESSION['message_erreur_activation']=$desactivation_echec;
        header('location:' . CHEMIN_PROJET . 'directeur_etudes/professeur/liste_professeur');
    }
}