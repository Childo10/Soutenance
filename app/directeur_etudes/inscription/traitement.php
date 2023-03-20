<?php
session_start();
include('./app/commun/fonction.php');
$data=[];
$errors=[];
$success="";
$null=null;

//Je vérifie si les informations envoyés par le visiteur sont corrrects.


if (verifier_info($_POST['nom'])){
    $data['nom']=htmlentities($_POST['nom']) ;
}
else{
       $errors['nom'] = '<p> Nom invalide ou vide, veuillez réessayer! </p>';
}

if(verifier_info($_POST['prenom'])){
    $data['prenom']= htmlentities($_POST['prenom']) ;
}
else{
        $errors['prenom']= '<p > Prénom invalide ou vide , veuillez réesayer!</p>';
}

if (verifier_info($_POST['sexe'])){
    $data['sexe']= htmlentities($_POST['sexe']);
}
else{
        $errors['sexe'] = '<p> Sexe incorrect ou vide,veuillez reéssayer!</p>';
}

if (verifier_info($_POST['username'])){
    $data['username']= htmlentities($_POST['username']);
}
else{
        $errors['username'] = "<p> Nom d'utilisateur invalide ou vide,veuillez reéssayer!</p>";
}

if (verifier_info($_POST['date'])){
    $data['date']= htmlentities($_POST['date']);
}
else{
        $errors['date'] = "<p> Date invalide ou vide,veuillez reéssayer!</p>";
}

if (verifier_info($_POST['email'])){
    $data['email']= filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
}
else{
        $errors['email'] = '<p> Email incorrect ou vide,veuillez reéssayer!</p>';
}

if (verifier_info($_POST['mot_de_passe'])){
    $data['mot_de_passe']= sha1($_POST['mot_de_passe']);
}
else{
        $errors['mot_de_passe'] = '<p> Mot de passe 
        incorrect ou vide,veuillez reéssayer!</p>';
}



//Je vérifie si les informations entrés par léutilisateur sont corrects
if(empty($errors)){

    $bdd=database_login();
    


    //Récupération des informations saisies par l'utilisateur dans la base de données
    $req=$bdd->prepare('INSERT INTO utilisateur(nom, prenom, nom_utilisateur, sexe, date_de_naissance, email, mot_de_passe, est_actif, profil, avatar, est_supprimer, creer_le, mis_a_jour_le, email_valide)
     VALUES (:nom, :prenom, :nom_utilisateur, :sexe, :date_de_naissance, :email, :mot_de_passe, :est_actif, :profil, :avatar,:est_supprimer, :creer_le, :mis_a_jour_le, :email_valide)');
    $req->execute(array(
        'nom'=>$data['nom'],
        'prenom'=>$data['prenom'],
        'nom_utilisateur'=>$data['username'],
        'sexe'=>$data['sexe'],
        'date_de_naissance'=>$data['date'],
        'email'=>$data['email'],
        'mot_de_passe'=>$data['mot_de_passe'],
        'est_actif'=>'0',
        'profil'=>'Directeur des études', 
        'avatar'=>'null', 
        'est_supprimer'=>'0', 
        'creer_le'=>'0', 
        'mis_a_jour_le'=>'1999-10-10 14:00:00', 
        'email_valide'=>'null',

    ));

    if($req){
        $success="Inscription réussie! Vous pouvez vous connectez";
        header('location:../connexion/connexion?success='.$success);
    }


}
//Si les informations de l'utilisateur sont incorrects, je le redirige vers la page d'inscription avec des messages d'erreurs 
else{
    $_SESSION['errors']= $errors;
   header('location:/soutenance/directeur_Etudes/inscription/');
}
    
     
   



   

