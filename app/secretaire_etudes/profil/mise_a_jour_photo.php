<?php
$_SESSION['photo-erreurs_SE'] = "";

$data=$_SESSION['users_SE'];

$_SESSION['photo_success_SE']="";


$donnees = [];

$erreurs = [];

$new_data="";

$dossierUtilisateur="public/images/image_utilisateurs/";


if (!isset($_POST["mot_de_passe"]) || empty($_POST["mot_de_passe"])) {
    $_SESSION['photo-erreurs_SE'] = "Le champs du mot de passe est vide.";
}

if (isset($_POST["mot_de_passe"]) && !empty($_POST["mot_de_passe"]) && strlen(($_POST["mot_de_passe"])) < 8) {
    $_SESSION['photo-erreurs_SE'] = "Le champs doit contenir minimum 8 caractères. Les espaces ne sont pas pris en compte.";
}

if (isset($_POST["mot_de_passe"]) && !empty($_POST["mot_de_passe"]) && strlen(($_POST["mot_de_passe"])) >= 8) {
    $new_data= htmlentities($_POST['mot_de_passe']);
}



    if(isset($_POST['ajout_photo'])){

    if (check_password_exist(($new_data), $data['id_utilisateur'])) {
        //die(var_dump($new_data));

        if (isset($_FILES["image"]) && $_FILES["image"]["error"] == 0) {
          

            if ($_FILES["image"]["size"] <= 3000000) {

                $file_name = $_FILES["image"]["name"];

                $file_info = pathinfo($file_name);

                $file_ext = $file_info["extension"];

                $allowed_ext = ["png", "jpg", "jpeg", "gif"];

                if (in_array(strtolower($file_ext), $allowed_ext)) {

                    move_uploaded_file($_FILES['image']['tmp_name'], $dossierUtilisateur . basename($_FILES['image']['name']));

                    $profiledonnees["image"] = CHEMIN_PROJET. $dossierUtilisateur . basename($_FILES['image']['name']);
                    

                    if (update_avatar($data['id_utilisateur'], $profiledonnees["image"])) {
                       // die(var_dump($_SESSION['users_DE']));
                        $_SESSION['users_SE']['avatar']=recup_update_avatar($data['id_utilisateur']);
                        $_SESSION['photo_success_SE']='Mise à jour de photo réussie';
                        //die(var_dump($_SESSION['users_DE']['avatar']));
                        header('location:' . CHEMIN_PROJET . 'secretaire_etudes/profil/');
                        
                        

                    } else {

                        $_SESSION['photo-erreurs_SE'] = "La mise à jour de l'image à echouer.";
                        header('location:' . CHEMIN_PROJET . 'secretaire_etudes/profil/');
                    }
                } else {
                    $_SESSION['photo-erreurs_SE'] = "L'extension de votre image n'est pas pris en compte. <br> Extensions autorisées [ PNG/JPG/JPEG/GIF ]";
                    header('location:' . CHEMIN_PROJET . 'secretaire_etudes/profil/');
                }
            } else {
                $_SESSION['photo-erreurs_SE'] = "Fichier trop lourd. Poids maximum autorisé : 3mo";
                header('location:' . CHEMIN_PROJET . 'secretaire_etudes/profil/');
            }
        } else {
            
             $_SESSION['photo-erreurs_SE'] ="Une erreur est survenue lors du choix votre image,assurez vous que la taille de votre image est inférieur ou égal à 2mo";
            header('location:' . CHEMIN_PROJET . 'secretaire_etudes/profil/');
        }
    } else {
       
        $_SESSION['photo-erreurs_SE'] = "La mise à jour à echouer. Vérifier votre mot de passe et réessayez.";
        header('location:' . CHEMIN_PROJET . 'secretaire_etudes/profil/');
    }
}
else{
    $_SESSION['photo-erreurs_SE']="Une erreur est survenue lors du choix votre image,assurez vous que la taille de votre image est inférieur ou égal à 2mo";
    header('location:' . CHEMIN_PROJET . 'secretaire_etudes/profil/');
}




