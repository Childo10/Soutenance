<?php
session_start();
unset($_SESSION['users_DE']);
header("Location:".CHEMIN_PROJET."directeur_etudes/connexion/index");

?>
