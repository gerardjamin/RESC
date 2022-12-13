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
$NouvelleDate = htmlspecialchars($_POST['NouvelleDate']);
$AncienneDate = htmlspecialchars($_POST['AncienneDate']);
//$reference = htmlspecialchars($_POST['reference']);
$notification = 0;
 //la requéte SQL enregistre le nouveau rendez-vous dans la table de données
$query = $pdo->prepare( "UPDATE `rendezvous` SET start = ?, notification = ? WHERE start = ?");
/*j'enregistre la date et la reference dans l'objet $word */
$word = array($NouvelleDate,$notification,$AncienneDate);
$query->execute($word) or die(print_r($db->errorInfo()));
 
//je dirige l'utilisateur
require('../controleur/controlCalendrier.php');


