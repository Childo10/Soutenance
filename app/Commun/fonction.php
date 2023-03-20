<?php
function verifier_info($info): bool{
    return(isset($info) AND !empty($info));
}

function database_login(){
    $bdd= "";
    try {
        $bdd= new PDO('mysql:host=localhost; dbname=gestion_emploi; charset=utf8','root', '',array(PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION));
    } 
    catch (Exception $e) {
        die('Erreur : '. $e->getMessage());
    }
    return $bdd;
}
