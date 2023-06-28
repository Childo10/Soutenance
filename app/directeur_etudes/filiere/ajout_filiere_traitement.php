<?php
$data="";
$errors="";


if(isset($_POST['libfil']) && empty($_POST['libfil'])){
    $errors='Le champs est vide, veuillez le remplir';
}

if(isset($_POST['libfil']) && !empty($_POST['libfil']) && verifier_filiere_existe($_POST['libfil'])){
    $errors='Cette filière existe déjà';
}

if(isset($_POST['libfil']) && !empty($_POST['libfil']) && !verifier_filiere_existe($_POST['libfil']) ){
    $data= trim(htmlentities($_POST['libfil']));
}


if(empty($errors)){
    enregistrer_filiere($data);
    $_SESSION['message_success_global']='Filière ajoutée avec succès';
    header('location:' . CHEMIN_PROJET . 'directeur_etudes/filiere/ajout_filiere');
}
else{
    $_SESSION['data_fil']=$_POST['libfil'];
    $_SESSION['message_erreur_global']=$errors;
    header('location:' . CHEMIN_PROJET . 'directeur_etudes/filiere/ajout_filiere');
}

