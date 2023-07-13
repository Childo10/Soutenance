<?php
$data=[];
$errors=[];

if(isset($_SESSION['numprof'])){
    $numprof=$_SESSION['numprof'];
}


if (verifier_info($_POST['nom'])){
    $data['nom']=trim(htmlentities($_POST['nom']));
  
}
else{
       $errors['nom'] = 'Le champs nom est vide , veuillez le remplir!';
}

if(verifier_info($_POST['prenom'])){
    $data['prenom']= trim(htmlentities($_POST['prenom']));
    }
   
else{
        $errors['prenom']= 'Le champs prénom est vide , veuillez le remplir!';
}

if(verifier_info($_POST['sexe'])){
    $data['sexe']= trim(htmlentities($_POST['sexe']));
    }
   
else{
        $errors['sexe']= 'Le champs sexe est vide , veuillez le remplir!';
}

if(empty($errors)){
    $_SESSION['data']=$data;
    $modifier=modifier_professeur($numprof, $data['nom'], $data['prenom'],$data['sexe']);
    if($modifier){
        $_SESSION['message_success_professeur']='Modification effectuée avec succès';
        header('location:' . CHEMIN_PROJET . 'directeur_etudes/professeur/liste_professeur');
    }
    else{
        $_SESSION['message_erreur_etudiant']="Une erreur est survenue lors de l'enregistrement";
        header('location:' . CHEMIN_PROJET . 'directeur_etudes/professeur/modifier_professeur');
    }
   
}
else{
    $_SESSION['data']=$_POST;
    $_SESSION['errors_prof']=$errors;
    header('location:' . CHEMIN_PROJET . 'directeur_etudes/professeur/modifier_professeur');
}