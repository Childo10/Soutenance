<?php
$errors = [];
$erreurs = [];
$data = $_SESSION['users_SE'];
$new_data = [];
$message_erreur_global = "";
$message_success_global = "";

/*if (isset($_SESSION['users_SE']['id_utilisateur']) and !empty($_SESSION['users_SE']['id_utilisateur'])) {
    $id = $_SESSION['users_SE']['id_utilisateur'];
}*/





    if (verifier_info($_POST['nom'])) {
        $new_data['nom'] = htmlentities($_POST['nom']);
    } else {
        $errors['nom'] = 'Le champs nom est vide, veuillez le remplir';
    }

    if (verifier_info($_POST['prenom'])) {
        $new_data['prenom'] = htmlentities($_POST['prenom']);
    } else {
        $errors['prenom'] = 'Le champs prénom est vide, veuillez le remplir';
    }

    if (verifier_info($_POST['date_naissance'])) {
        $new_data['date_naissance'] = htmlentities($_POST['date_naissance']);
    } else {
        $errors['date_naissance'] = 'Le champs date_naissance est vide, veuillez le remplir ';
    }

    if (verifier_info($_POST['sexe'])) {
        $new_data['sexe'] = htmlentities($_POST['sexe']);
    } else {
        $errors['sexe'] = 'Le champs sexe est vide, veuillez le remplir ';
    }

    if (verifier_info($_POST['telephone'])) {
        $new_data['telephone'] = htmlentities($_POST['telephone']);
    } else {
        $errors['telephone'] = 'Le champs téléphone est vide, veuillez le remplir ';
    }

    if (verifier_info($_POST['adresse'])) {
        $new_data['adresse'] = htmlentities($_POST['adresse']);
    } else {
        $errors['adresse'] = 'Le champs adresse est vide, veuillez le remplir ';
    }

    $new_data['avatar'] = "";





    //if(verifier_info($_POST['email']) AND filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)){
    //$data['email']= htmlentities($_POST['email']);

    //}else{
    //$errors['email']='Email incorrect ou vide, veuillez réssayez';
    //}

    if (verifier_info($_POST['nom_utilisateur'])) {
        $new_data['nom_utilisateur'] = htmlentities($_POST['nom_utilisateur']);
    } else {
        $errors['nom_utilisateur'] = "Le champs nom_utilisateur est vide, veuillez le remplir";
    }

    if (!isset($_POST["mot_de_passe"]) || empty($_POST["mot_de_passe"])) {
        $errors["mot_de_passe"] = "Le champs du mot de passe est vide.";
    }

    if (isset($_POST["mot_de_passe"]) && !empty($_POST["mot_de_passe"]) && strlen(($_POST["mot_de_passe"])) < 8) {
        $errors["mot_de_passe"] = "Le champs doit contenir minimum 8 caractères. Les espaces ne sont pas pris en compte.";
    }

    if (verifier_info($_POST["mot_de_passe"]) && strlen(($_POST["mot_de_passe"])) >= 8) {
        $new_data['mot_de_passe'] = $_POST['mot_de_passe'];
    }

 /*if (empty($errors)) {



        $check_password = check_password_exist(($data['mot_de_passe']), $id);
        if ($check_password) {

            if (update_profil_in_db($id, $data['nom'], $data['prenom'],  $data['nom_utilisateur'])) {


                $_SESSION['users'] = recup_update_profil($id);

                $message_success_global = "Modification(s) effectuée(s) avec succès";
                $_SESSION['message_global'] = $message_success_global;


                header('location:' . CHEMIN_PROJET . 'secretaire_etudes/profil/index');
            }
        } else {
            $_SESSION['err_mdp']  = "Mot de passe incorrect, veuillez réessayer.";
            $message_erreur_global = "Mot de passe incorrect, veuillez réessayer.!";
            $_SESSION['message_global'] = $message_erreur_global;


            header('location:' . CHEMIN_PROJET . 'secretaire_etudes/profil/edit_profil');
        }
    } else {
        $_SESSION['errors'] = $errors;
        header('location:' . CHEMIN_PROJET . 'secretaire_etudes/profil/edit_profil');
    }*/

if (empty($errors)) {
    //die(var_dump($data['id_utilisateur']));
    

    if(check_password_exist(($new_data['mot_de_passe']), $data['id_utilisateur'])){
        if (mettre_a_jour_donnees_utilisateur(
            $data['id_utilisateur'],
            $new_data['nom'],
            $new_data['prenom'],
            $new_data['nom_utilisateur'],
            $new_data['adresse'],
            $new_data['date_naissance'],
            $new_data['sexe'],
            $new_data['telephone']
            
              )) {

  
                $_SESSION['users_SE'] = recup_mettre_a_jour_informations_utilisateur($data['id_utilisateur']);
                $message_success_global = "Modification(s) effectuée(s) avec succès";
                $_SESSION['message_global'] = $message_success_global;
    
                header('location:' . CHEMIN_PROJET . 'secretaire_etudes/profil/');
        
        }
    }
    else {
        $_SESSION['err_mdp']  = "Mot de passe incorrect, veuillez réessayer.";
        $message_erreur_global = "La modification a échouée. Vérifier votre mot de passe et réessayer.";
        $_SESSION['message_global'] =  $message_erreur_global;

        header('location:' . CHEMIN_PROJET . 'secretaire_etudes/profil/edit_profil');
    }

	
}
else {
    $_SESSION['errors'] = $errors;
    header('location:' . CHEMIN_PROJET . 'secretaire_etudes/profil/edit_profil');
}




