<?php
$errors=[];
$data_email="";
$data="";


if(!isset($_POST['email']) or empty($_POST['email'])){
    $errors['email'] = '<p> Le champs Email est vide,veuillez le remplir !</p>';
}
if(isset($_POST['email']) && !empty($_POST['email']) && !filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    $errors['email'] = '<p> Email incorrect,veuillez reéssayer!</p>';
    
}
if (isset($_POST['email']) && !empty($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) && !check_email_exist_by_profil($_POST['email'],'Sécrétaire du directeur générale')) {
    $errors['email']="<p> Désolé,cet adresse email n'existe pas<p>";
    
}


if (verifier_info($_POST['email']) && filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) && check_email_exist_by_profil($_POST['email'], 'Sécrétaire du directeur générale')){
    $data_email= htmlentities($_POST['email']);
  }
 

 
 if(empty($errors)){
    $token = uniqid("");
    $id_utilisateur = recuperer_id_utilisateur_par_son_mail($data_email);
    
    if (insertion_token($id_utilisateur, 'MOT_DE_PASSE_OUBLIE', $token)) {
        $objet = 'Validation de votre inscription';
        ob_start(); // Démarre la temporisation de sortie
        include 'app/secretaire_dg/mot_de_passe_oublie/message_mail.php'; // Inclut le fichier HTML dans le tampon
        $template_mail = ob_get_contents(); // Récupère le contenu du tampon
        ob_end_clean(); // Arrête et vide la temporisation de sortie

        if (send_email($data["email"], $objet, $template_mail)) {
            $message_success_global = "Veuillez consulter votre compte email pour changer votre mot de passe.";
            header('location: ' . CHEMIN_PROJET. 'secretaire_dg/mot_de_passe_oublie/renitialisation');
        } else {
            $message_erreur_global = "Echec de l'envoi du mail. Veuillez vérifier votre connexion.";
            header('location: ' . CHEMIN_PROJET. 'secretaire_dg/mot_de_passe_oublie/');
        }
   
    }
    $_SESSION['data']=$data_email;
}
else{
    $_SESSION['data']= $_POST['email'];
    $_SESSION['errors']=$errors;
    header('location: ' . CHEMIN_PROJET. 'secretaire_dg/mot_de_passe_oublie/');

}

$_SESSION['changement-message-erreur-global'] = $message_erreur_global;
$_SESSION['changement-message-success-global'] = $message_success_global;
header('location: ' . CHEMIN_PROJET. 'secretaire_dg/mot_de_passe_oublie/');
   

  