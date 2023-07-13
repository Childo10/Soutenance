<?php
$data=[];
$errors=[];




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
    $enregistrer=enregistrer_professeur( $data['nom'], $data['prenom'],$data['sexe']);
    if($enregistrer){
        $_SESSION['message_success_professeur']='Professeur ajoutée avec succès';
        header('location:' .  CHEMIN_PROJET . 'directeur_etudes/professeur/ajout_professeur');
    }
    else{
        $_SESSION['message_erreur_professeur']="Une erreur est survenue lors de l'enregistrement";
        header('location:' . CHEMIN_PROJET . 'directeur_etudes/professeur/ajout_professeur');
    }
   
}
else{
    $_SESSION['errors_prof']=$errors;
    header('location:' . CHEMIN_PROJET . 'directeur_etudes/professeur/ajout_professeur');
}