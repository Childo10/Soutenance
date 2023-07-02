<?php
$_SESSION['message_suppression_success']="";
$_SESSION['message_suppression_erreur']="";

if(isset($params['3']) && !empty($params['3']) && is_numeric($params['3'])){
    $codefil=$params['3'];
    $supprimer_filiere=suppression_logique_filiere($codefil);
    if( $supprimer_filiere){
        $_SESSION['message_suppression_success']='Filière supprimée avec succès';
        header('location:' . CHEMIN_PROJET . 'directeur_etudes/filiere/liste_filiere');
    }
    else{
        $_SESSION['message_suppression_erreur']='Erreur lors de la suppression de cette filière';
        header('location:' . CHEMIN_PROJET . 'directeur_etudes/filiere/liste_filiere');
    }
}