<?php
session_start();
//par defaut l'utilisateur est un internaute
$_SESSION['AUTORISATION'] = 0;
$_SESSION['LOGGED_USER'] = NULL;
$_SESSION['nom'] = NULL;
$_SESSION['prenom'] = NULL;
//l'internaute est redirigé vers la page d'accueil
require('controleur/controlHomepage.php');
//header('Location:/view/homepage.php');
