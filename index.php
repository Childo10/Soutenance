<?php
require 'vendor/autoload.php';
define('CHEMIN_PROJET', '/soutenance/');
define('DATABASE_HOST', 'localhost');
define('DATABASE_NAME', 'gestion_emploi');
define('DATABASE_USERNAME', 'root');
define('DATABASE_PASSWORD', 'root');
define('EMAIL_ADDRESS', 'childohouedanou1998@gmail.com ');
define('EMAIL_PASSWORD', 'ylbdsjngxhbzfetz');


$default_profile = "etudiant";
$default_profile_folder = "app/etudiant/index.php?";
$params = [];

if (isset($_GET['p']) && !empty($_GET['p'])) {
    $params = explode('/', $_GET['p']);
    $profile = (isset($params[0]) && !empty($params[0])) ? $params[0] : $default_profile;
    $profile_folder = "app/" . $profile . "/index.php";


    // Suppression du premier élément de $params correspondant au profil
    //$params = array_slice($params, 1);
    //die(var_dump($params));
    // Conversion des paramètres en un tableau clé-valeur

    if (file_exists($profile_folder)) {
        // Passage des paramètres supplémentaires à l'inclusion du fichier d'index du profil
        //$queryString= http_build_query($params);
        //$profile_folder .= '?' . $queryString;
        //die(var_dump($profile_folder));
        include $profile_folder;
    } else {
        include $default_profile_folder;
    }
} else {
    include $default_profile_folder;
}
