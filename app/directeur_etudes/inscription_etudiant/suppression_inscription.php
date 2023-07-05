<?php
$_SESSION['message_suppression_success']="";
$_SESSION['message_suppression_erreur']="";

if(isset($params['3']) && !empty($params['3']) && is_numeric($params['3'])){
    $numins=$params['3'];
    $supprimer_inscription=suppression_logique_inscription($numins);
    if( $supprimer_inscription){
        $_SESSION['message_suppression_success']='Inscription supprimé avec succès';
        header('location:' . CHEMIN_PROJET . 'directeur_etudes/inscription_etudiant/liste_inscription');
    }
    else{
        $_SESSION['message_suppression_erreur']="Erreur lors de la suppression de l'inscription";
        header('location:' . CHEMIN_PROJET . 'directeur_etudes/inscription_etudiant/liste_inscription');
    }
}