<?php
//je me connecte à la  BDD(create object PDO)
//nom de la base de donnees = site_resc
//traitement de l'erreur de connection

    try {
        $pdo = new PDO("mysql:host=localhost;dbname=site_resc", 
            "root", 
            "",
            [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],
        );} 
        catch(Exception $e) { die('Erreur: '.$e->getMessage());}

//j'enregistre les valeurs des champs du formulaire  dans des variables
$reference = htmlspecialchars($_POST['AncienneDate']);

 //la requéte SQL annule le rendez-vous dans la table de données si il existe
$query = $pdo->prepare( "DELETE FROM `rendezvous` WHERE start = ?");
/*j'enregistre la reference dans l'objet $word */
$word = array($reference);
$query->execute($word) or die(print_r($db->errorInfo()));

//je redirige l'utilisateur
require('../controleur/controlCalendrier.php');
