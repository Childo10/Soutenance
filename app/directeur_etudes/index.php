<?php
session_start();
include('./app/commun/fonction.php');
$params = explode('/', $_GET['p']);
$profile = "Directeur_Etudes";
$default_ressource = "connexion";
$default_action = "index";
$default_action_folder = "app/" . $profile . "/" . $default_ressource . "/" . $default_action . ".php";

if (isset($_GET['p']) && !empty($_GET['p'])) {
    $ressource = (isset($params[1]) && !empty($params[1])) ? $params[1] : $default_ressource;
    $action = (isset($params[2]) && !empty($params[2])) ? $params[2] : $default_action;
    $action_folder = "app/" . $profile . "/" . $ressource . "/" . $action . ".php";
    // Suppression des éléments de paramètres correspondant à la ressource et à l'action
//$params = array_slice($params, 3);
//die(var_dump($params));

if (file_exists($action_folder)) {
// Passage des paramètres supplémentaires à l'url en tant que requete GET
//$queryString= http_build_query($params);
//die(var_dump($queryString));
//$action_folder .='?'. $queryString;
require_once $action_folder;
} else {
require_once $default_action_folder;
}
} else {
require_once $default_action_folder;
}

