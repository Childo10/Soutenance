<?php
session_start();
unset($_SESSION['users_SE']);
header("Location:".CHEMIN_PROJET."secretaire_etudes/connexion/index");

?>
