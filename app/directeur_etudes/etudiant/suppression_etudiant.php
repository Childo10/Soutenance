<?php
$_SESSION['message_suppression_success']="";
$_SESSION['message_suppression_erreur']="";

if(isset($params['3']) && !empty($params['3']) && is_numeric($params['3'])){
    $matricule=$params['3'];
    $supprimer_etudiant=suppression_logique_etudiant($matricule);
    if( $supprimer_etudiant){
        $_SESSION['message_suppression_success']='Etudiant supprimé avec succès';
        header('location:' . CHEMIN_PROJET . 'directeur_etudes/etudiant/liste_etudiant');
    }
    else{
        $_SESSION['message_suppression_erreur']='Erreur lors de la suppression de cette filière';
        header('location:' . CHEMIN_PROJET . 'directeur_etudes/liste/liste_etudiant');
    }
}