<?php
$data = [];
$errors = [];
$_SESSION['data'] = [];
$_SESSION['message_success_global'] = "";



//Je vérifie si les informations envoyés par le visiteur sont corrrects.


if (!verifier_info($_POST['capacite'])) {
    $errors['capacite'] = '<p> Le champs est vide, veuillez le remplir! </p>';
}


if (verifier_info($_POST['capacite']) && !est_positif($_POST['capacite'])) {
    $errors['capacite'] = '<p> Veuillez entrer une valeur positive! </p>';
}


if (verifier_info($_POST['capacite']) && est_positif($_POST['capacite'])) {
    $data['capacite'] = trim(htmlentities($_POST['capacite'] . ' ' . 'places'));
}


if (verifier_info($_POST['Typesal'])) {
    $data['Typesal'] = trim(htmlentities($_POST['Typesal']));
} else {
    $errors['Typesal'] = '<p> Le champs est vide, veuillez le remplir! </p>';
}




if (!verifier_info($_POST['nbmax'])) {
    $errors['nbmax'] = '<p> Le champs est vide, veuillez le remplir! </p>';
}


if (verifier_info($_POST['nbmax']) && !est_positif($_POST['nbmax'])) {
    $errors['nbmax'] = '<p> Veuillez entrer une valeur positive! </p>';
}

if (verifier_info($_POST['nbmax']) && est_positif($_POST['nbmax'])) {
    $data['nbmax'] = trim(htmlentities($_POST['nbmax']));
}



if (!verifier_info($_POST['Nb_defectueux'])) {
    $errors['Nb_defectueux'] = '<p> Le champs est vide, veuillez le remplir! </p>';  
} 


if (verifier_info($_POST['Nb_defectueux']) && !est_positif($_POST['Nb_defectueux'])) {
    $errors['Nb_defectueux'] = '<p> Veuillez entrer une valeur positive! </p>';
} 


if (verifier_info($_POST['Nb_defectueux']) && est_positif($_POST['Nb_defectueux'])) { 
    $data['Nb_defectueux'] = trim(htmlentities($_POST['Nb_defectueux']));
} 





if (!verifier_info($_POST['Nb_dispo'])) {
    $errors['Nb_dispo'] = '<p> Le champs est vide, veuillez le remplir! </p>';
   
} 


if (verifier_info($_POST['Nb_dispo']) && !est_positif($_POST['Nb_dispo'])) {
    $errors['Nb_dispo'] = '<p>Veuillez entrer une valeur positive!</p>';
} 

if (verifier_info($_POST['Nb_dispo']) && est_positif($_POST['Nb_dispo'])) {
    $data['Nb_dispo'] = trim(htmlentities($_POST['Nb_dispo']));
} 



$_SESSION['data']=$_POST;
if (empty($errors)) {
    $modifier_salle = "";

    $modifier_salle= modifier_salle($_SESSION['numsal'], $data['capacite'], $data['Typesal'], $data['nbmax'], $data['Nb_defectueux'], $data['Nb_dispo']);
    if ($modifier_salle) {
        $_SESSION['message_success_global'] = 'Salle modifiée avec succès';
        header('location:' . CHEMIN_PROJET . 'directeur_etudes/salle/Liste_salle');
    } else {
        $_SESSION['message_erreur_global'] = "Une erreur est survenue lors de la modification";
        header('location:' . CHEMIN_PROJET . 'directeur_etudes/salle/Modifier_salle');
    }
} else {
    $_SESSION['errors_salle'] = $errors;
    header('location:' . CHEMIN_PROJET . 'directeur_etudes/salle/Modifier_salle');
}
