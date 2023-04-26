<?php
session_start();
include('./app/commun/fonction.php');
$data=[];
$errors=[];
$_SESSION['data']=[];
$_SESSION['success']="";


//Je vérifie si les informations envoyés par le visiteur sont corrrects.


if (verifier_info($_POST['nom'])){
    $data['nom']=htmlentities($_POST['nom']);
  
}
else{
       $errors['nom'] = '<p> Nom invalide ou vide, veuillez réessayer! </p>';
}

if(verifier_info($_POST['prenom'])){
    $data['prenom']= htmlentities($_POST['prenom']);
    }
   
else{
        $errors['prenom']= '<p > Prénom invalide ou vide , veuillez réesayer!</p>';
}


if (verifier_info($_POST['username'])){
    if(check_username_exist($_POST['username']))
        $errors['username']="<p> Désolé,ce nom d'utilisateur existe déjà <p>";
    
    else{
        $data['username']= htmlentities($_POST['username']);
       
    }
}
else{
        $errors['username'] = "<p> Nom d'utilisateur invalide ou vide,veuillez reéssayer!</p>";
}



if (verifier_info($_POST['email'])){
    if(check_email_exist($_POST['email'])){
        $errors['email']="<p> Désolé,cet adresse email existe déjà <p>";
    }
    else{
        $data['email']= filter_var($_POST['email'], FILTER_VALIDATE_EMAIL);
       
    }
}
else{
        $errors['email'] = '<p> Email incorrect ou vide,veuillez reéssayer!</p>';
}



if (!isset($_POST["mot_de_passe"]) || empty($_POST["mot_de_passe"])) {
    $errors["mot_de_passe"] = "Le champs du mot de passe est vide.";
}

if (isset($_POST["mot_de_passe"]) && !empty($_POST["mot_de_passe"]) && strlen(($_POST["mot_de_passe"])) < 8) {
    $errors["mot_de_passe"] = "Le champs doit contenir minimum 8 caractères. Les espaces ne sont pas pris en compte.";
}

if (isset($_POST["mot_de_passe"]) && !empty($_POST["mot_de_passe"]) && strlen(($_POST["mot_de_passe"])) >= 8 && empty($_POST["repeter_mot_de_passe"])) {
    $errors["repeter_mot_de_passe"] = "Entrez votre mot de passe à nouveau.";
}

if ((isset($_POST["repeter_mot_de_passe"]) && !empty($_POST["repeter_mot_de_passe"]) && strlen(($_POST["mot_de_passe"])) >= 8 && $_POST["repeter_mot_de_passe"] != $_POST["mot_de_passe"])) {
    $errors["repeter_mot_de_passe"] = "Mot de passe erroné. Entrez le mot de passe du précédent champs";
}

if(verifier_info($_POST["mot_de_passe"]) && verifier_info($_POST["repeter_mot_de_passe"]) && strlen(($_POST["mot_de_passe"])) >= 8 && strlen(($_POST["repeter_mot_de_passe"])) >= 8 && $_POST["repeter_mot_de_passe"] == $_POST["mot_de_passe"]){
    $data['mot_de_passe']= sha1($_POST['mot_de_passe']);
    
}
$_SESSION['data']= $data;








//Je vérifie si les informations entrés par léutilisateur sont corrects
if(empty($errors)){

    $bdd=database_login();
    $data['profil']= "Directeur des études";
   
    


    //Récupération des informations saisies par l'utilisateur dans la base de données
    $req=$bdd->prepare('INSERT INTO utilisateur(nom, prenom, nom_utilisateur,email,mot_de_passe,profil)
     VALUES (:nom, :prenom, :nom_utilisateur,  :email, :mot_de_passe, :profil)');
    $req->execute(array(
        'nom'=>$data['nom'],
        'prenom'=>$data['prenom'],
        'nom_utilisateur'=>$data['username'],
        'email'=>$data['email'],
        'mot_de_passe'=>$data['mot_de_passe'],
        'profil'=>$data['profil']
       
    ));

    if($req){
        $_token = uniqid("");
        $id_utilisateur = select_user_id($data['email'])[0]['id'];
        if (insertion_token($id_utilisateur, 'VALIDATION_COMPTE', $_token)){
            $_SESSION['validation_compte']=[];
            $_SESSION['validation_compte']['id_utilisateur']=$id_utilisateur;
            $_SESSION['validation_compte']['token']=recuperer_token($id_utilisateur)[0]['token'];
        }
    $objet = 'Validation de compte';
        $objet = 'Validation de compte';
        $corps = buffer_html_file('../soutenance/app/directeur_etudes/inscription/message_mail.php');
        if (email($data["email"], $objet, $corps)){
            die ('Envoyé');
        } else {
            die ('Non envoyé');
        }
        $_SESSION['success']="Inscription réussie! Vous pouvez vous connectez";
        header('location:../connexion/index');
    }
    else{
        header('location:/soutenance/directeur_Etudes/inscription/');
    }


}
//Si les informations de l'utilisateur sont incorrects, je le redirige vers la page d'inscription avec des messages d'erreurs 
else{
    $_SESSION['errors']= $errors;
   header('location:/soutenance/directeur_Etudes/inscription/');
}
