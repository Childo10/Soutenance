<?php
session_start();
unset($_SESSION['users_SDG']);
header("Location:".CHEMIN_PROJET."secretaire_dg/connexion/index");

?>
