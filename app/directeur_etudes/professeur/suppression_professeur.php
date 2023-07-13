<?php
$_SESSION['message_suppression_success']="";
$_SESSION['message_suppression_erreur']="";

if(isset($params['3']) && !empty($params['3']) && is_numeric($params['3'])){
    $numprof=$params['3'];
    $supprimer_professeur=suppression_logique_professeur($numprof);
    if( $supprimer_professeur){
        $_SESSION['message_suppression_success']='Professeur supprimé(e) avec succès';
        header('location:' . CHEMIN_PROJET . 'directeur_etudes/professeur/liste_professeur');
    }
    else{
        $_SESSION['message_suppression_erreur']='Erreur lors de la suppression de ce professeur';
        header('location:' . CHEMIN_PROJET . 'directeur_etudes/professeur/liste_professeur');
    }
}