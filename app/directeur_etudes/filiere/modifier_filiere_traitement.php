<?php
$codefil="";
$data="";
$errors="";


if(isset($_POST['libfil']) && empty($_POST['libfil'])){
    $errors='Le champs est vide, veuillez le remplir';
}

if(isset($_POST['libfil']) && !empty($_POST['libfil']) && verifier_filiere_existe($_POST['libfil'])){
    $errors='Modification impossible! Cette filière existe déjà!';
}

if(isset($_POST['libfil']) && !empty($_POST['libfil']) && !verifier_filiere_existe($_POST['libfil']) ){
    $data= trim(htmlentities($_POST['libfil']));
}
$_SESSION['data']=$_POST['libfil'];

if(empty($errors)){
    $modifier_filiere=modifier_filiere($_SESSION['codefil'], $data);
    $_SESSION['message_success_global']='Modification effectué avec succès';
    header('location:' . CHEMIN_PROJET . 'directeur_etudes/filiere/liste_filiere');
}
else{
    $_SESSION['data_fil']=$_POST['libfil'];
    $_SESSION['message_erreur_global']=$errors;
    header('location:' . CHEMIN_PROJET . 'directeur_etudes/filiere/modifier_filiere');
}