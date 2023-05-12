<?php
session_start();
session_destroy();
header("Location:".CHEMIN_PROJET."directeur_etudes/connexion/index");

?>
