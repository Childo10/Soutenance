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


function check_username_exist($username){
    $users="false";
    $bdd= database_login();
    $req= $bdd->prepare('SELECT id_utilisateur from utilisateur WHERE nom_utilisateur=?');
    $req->execute([$username]);
    $users= $req->fetch();
    return $users;
    

}

function check_email_exist($email){
    $users="false";
    $bdd= database_login();
    $req= $bdd->prepare('SELECT id_utilisateur from utilisateur WHERE email=?');
    $req->execute([$email]);
    $users= $req->fetch();
    return $users;
    

}