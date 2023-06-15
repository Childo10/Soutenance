<?php

$data=[];
$errors=[];
$_SESSION['data']=[];
$_SESSION['success']="";
$message_erreur_global = "";
$message_success_global = "";


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



if (!isset($_POST['terms_condition'])){
    $errors['terms_condition'] = "<p>Veuillez accepter les termes et conditions!</p>";
}




if (verifier_info($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) ){
    if(check_email_exist($_POST['email'])){
        $errors['email']="<p> Désolé,cet adresse email existe déjà <p>";
    }
    else{
        $data['email']= htmlentities($_POST['email']);
       
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
    $data['mot_de_passe']=($_POST['mot_de_passe']);
    
}









//Je vérifie si les informations entrées par l'utilisateur sont correctes
if(empty($errors)){

    $data['profil']= "Sécrétaire du directeur générale";
     //inscrire_utilisateur($data["nom"], $data["prenom"], $data["username"],$data["email"], $data["mot_de_passe"], $data["profil"]);

    if (inscrire_utilisateur($data["nom"], $data["prenom"], $data["username"],$data["email"], $data["mot_de_passe"], $data["profil"]  )){
        $token = uniqid("");
        $id_utilisateur = recuperer_id_utilisateur_par_son_mail($data['email']);
        
        if (!insertion_token($id_utilisateur, 'VALIDATION_COMPTE', $token)) {
            $message_erreur_global = "Votre inscription s'est effectué avec succès mais une erreur est survenue lors de la génération de la clè de validation de votre compte. Veuillez contacter un administrateur.";
       
        }
        else{
            $objet = 'Validation de votre inscription';
            ob_start(); // Démarre la temporisation de sortie
            include 'app/directeur_dg/inscription/message_mail.php'; // Inclut le fichier HTML dans le tampon
            $template_mail = ob_get_contents(); // Récupère le contenu du tampon
            ob_end_clean(); // Arrête et vide la temporisation de sortie

            if (send_email($data["email"], $objet, $template_mail)) {
                $message_success_global = "Votre inscription s'est effectuée avec succès. Veuillez consulter votre adresse mail pour valider votre compte.";
                header('location: ' . CHEMIN_PROJET. 'secretaire_dg/inscription');
            } else {
                $message_erreur_global = "Votre inscription s'est effectuée avec succès mais une erreur est survenue lors de l'envoi du mail de validation de votre compte. Veuillez contacter un administrateur.";
                header('location: ' . CHEMIN_PROJET. 'secretaire_dg/inscription');
            }
        }
    }
    
    else {
        $message_erreur_global = "Oups ! Une erreur s'est produite lors de l'enregistrement de l'utilisateur.";
        header('location: ' . CHEMIN_PROJET . 'secretaire_dg/inscription');
    }
    } else {
        $_SESSION['data']= $data;
        $_SESSION['errors'] = $errors;
        header('location: ' . CHEMIN_PROJET . 'secretaire_dg/inscription');
    }
    $_SESSION['inscription-message-erreur-global'] = $message_erreur_global;
    $_SESSION['inscription-message-success-global'] = $message_success_global;
   header('location: ' . CHEMIN_PROJET. 'secretaire_dg/inscription');


    
