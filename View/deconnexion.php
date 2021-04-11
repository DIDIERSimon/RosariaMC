<?php

session_start();
$_SESSION = array();
session_destroy();
header("Location: index.php");

?>

<a href="index.php">revenir a la page d'accueil</a>
