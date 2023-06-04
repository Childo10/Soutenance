<?php
$_SESSION['errors'] = [];
$data = [];
$errors = [];
$success = "";

//Je vérifie si les données envoyées par l'utilisateur sont correctes.
if (isset($_POST['email']) and !empty($_POST['email']) and filter_var($_POST['email'], FILTER_VALIDATE_EMAIL)) {
    $data['email'] = htmlspecialchars($_POST['email']);
} else {
    $errors['email'] = '<p>Le champs email est vide, veuillez réessayer</p>';
}


if (!isset($_POST["mot_de_passe"]) || empty($_POST["mot_de_passe"])) {
    $errors["mot_de_passe"] = "Le champs du mot de passe est vide.";
}

if (isset($_POST["mot_de_passe"]) && !empty($_POST["mot_de_passe"]) && strlen(($_POST["mot_de_passe"])) < 8) {
    $errors["mot_de_passe"] = "Le champs doit contenir minimum 8 caractères. Les espaces ne sont pas pris en compte.";
}


if (verifier_info($_POST["mot_de_passe"]) && strlen(($_POST["mot_de_passe"])) >= 8) {
    $data['mot_de_passe'] = $_POST['mot_de_passe'];
}

//Je récupère les données dans la variable super globale
$_SESSION['data'] = $data;


//S'il n'y a pas d'erreurs, je me connecte à la base de données. 
if (empty($errors)) {

    //Je vérifie si l'utilisateur existe dans la base de données
    $data_users = recuperer_donnees_utilisateur($data['email'], $data['mot_de_passe'], 'Directeur des études', 1, 0);
    die(var_dump($data_users));
    //si oui, je le connecte et j'enregistre ses données dans une session.
    if (!empty($data_users) and is_array($data_users)) {
        $_SESSION['users'] = $data_users;
        $_SESSION['data'] = "";

        //Si l'utilisateur appuie sur le checkbox "se souvenir de moi"
        if (isset($_POST['se_souvenir']) and !empty($_POST['se_souvenir'])) {

            //Je crée un cookie pour enregistrer ses données.
            setcookie(
                "data_users",
                json_encode($data['email']),
                [
                    'expires' => time() + 365 * 24 * 3600,
                    'path' => '/',
                    'secure' => true,
                    'httponly' => true,

                ]
            );
        }
        //S'il ne coche pas sur le checkbox "se souvenir de moi"
        //Je modifie le cookie en le vidant
        else {
            setcookie(
                "data_users",
                "",
                [
                    'expires' => time() + 365 * 24 * 3600,
                    'path' => '/',
                    'secure' => true,
                    'httponly' => true,


                ]
            );
        }

        header('location:' . CHEMIN_PROJET . 'directeur_etudes/dashbord/index');
    } else {
        $_SESSION["erreur_connexion_global"] = "Email ou mot de passe incorrect, veuillez réessayer";

        header('location:' . CHEMIN_PROJET . 'directeur_Etudes/connexion/');
    }
} else {
    $_SESSION['errors'] = $errors;
    header('location:' . CHEMIN_PROJET . 'directeur_Etudes/connexion/');
}
