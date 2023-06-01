<?php
include('./app/commun/fonction.php');
$erreurs = [];


if (isset($_SESSION['users']['id_utilisateur']) and !empty($_SESSION['users']['id_utilisateur'])) {
    $id = $_SESSION['users']['id_utilisateur'];
}




//Traitement du changement de mot de passe

if (isset($_POST['changer_mot_de_passe'])) {
    if (!isset($_POST["mdp_actuel"]) || empty($_POST["mdp_actuel"])) {
        $erreurs["mdp_actuel"] = "Le champs du mot de passe est vide.";
    }

    if (!isset($_POST["mdp_nouveau"]) || empty($_POST["mdp_nouveau"])) {
        $erreurs["mdp_nouveau"] = "Le champs du mot de passe est vide.";
    }

    if (isset($_POST["mdp_actuel"]) && !empty($_POST["mdp_actuel"]) && strlen(($_POST["mdp_actuel"])) < 8) {
        $erreurs["mdp_actuel"] = "Le champs doit contenir minimum 8 caractères. <br> Les espaces ne sont pas pris en compte.";
    }

    if (isset($_POST["mdp_nouveau"]) && !empty($_POST["mdp_nouveau"]) && strlen(($_POST["mdp_nouveau"])) < 8) {
        $erreurs["mdp_nouveau"] = "Le champs doit contenir minimum 8 caractères. <br>  Les espaces ne sont pas pris en compte.";
    }

    if (verifier_info($_POST["mdp_actuel"]) && strlen(($_POST["mdp_actuel"])) >= 8) {
        $donnees['mdp_actuel'] = $_POST['mdp_actuel'];
    }

    if (verifier_info($_POST["mdp_nouveau"]) && strlen(($_POST["mdp_nouveau"])) >= 8) {
        $donnees['mdp_nouveau'] = $_POST['mdp_nouveau'];
    }


    if (empty($erreurs)) {
        if (check_password_exist($donnees['mdp_actuel'], $id)) {

            $bdd = database_login();
            $requete = "UPDATE utilisateur SET mot_de_passe=:mot_de_passe WHERE id_utilisateur= :id";
            $requete_prepare = $bdd->prepare($requete);
            $requete_execute = $requete_prepare->execute(array(
                'mot_de_passe' => sha1($donnees['mdp_nouveau']),
                'id' => $id
            ));
            if ($requete_execute) {
                session_destroy();
                header("Location:" . CHEMIN_PROJET . "directeur_etudes/connexion/index");
            }
        } else {
            $_SESSION['erreur'] = 'Mot de passe incorrect, veuillez reéssayer';
            header('location:' . CHEMIN_PROJET . 'directeur_etudes/profil/index');
        }
    } else {
        $_SESSION['erreurs'] = $erreurs;
        header('location:' . CHEMIN_PROJET . 'directeur_etudes/profil/index');
    }
}