<?php
$data=[];
$errors=[];


if(verifier_info($_POST['matricule']) && verifier_info($_POST['codefil']) && verifier_inscription_existe($_POST['codefil'],$_POST['matricule'])){
    $errors['inscription']="Inscription impossible car elle existe déjà";
    //die(var_dump($errors['inscription']));
}

if(verifier_info($_POST['matricule']) && verifier_info($_POST['codefil']) && !verifier_inscription_existe($_POST['codefil'],$_POST['matricule'])){
    $data['matricule']=trim(htmlentities($_POST['matricule']));
    $data['codefil']=trim(htmlentities($_POST['codefil']));
}



if(verifier_info($_POST['date_ins'])){
    $data['date_ins']=trim(htmlentities($_POST['date_ins']));
  
}
else{
    $errors['date_ins']= 'Le champs date est vide, veuillez le remplir!';
}

if(verifier_info($_POST['annee_ins'])){
    $data['annee_ins']=trim(htmlentities($_POST['annee_ins']));
  
}
else{
    $errors['annee_ins']= 'Le champs année est vide, veuillez le remplir!';
}

if(empty($errors)){
    $annee=explode('-', $data['annee_ins']);
    $inscription=enregistrer_inscription($data['matricule'], $data['codefil'], $data['date_ins'],$annee[0]);
    if($inscription){
        $_SESSION['message_success_inscription']='Inscription éffectuée avec succès';
        header('location:' . CHEMIN_PROJET . 'directeur_etudes/inscription_etudiant/ajout_inscription');
    }
    else{
        $_SESSION['message_erreur_inscription']="Une erreur est survenue lors de l'inscription";
        header('location:' . CHEMIN_PROJET . 'directeur_etudes/inscription_etudiant/ajout_inscription');
    }
}
else{
    $_SESSION['errors_inscription']=$errors;
    header('location:' . CHEMIN_PROJET . 'directeur_etudes/inscription_etudiant/ajout_inscription');
}