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

//passage des arguments par URL
$num_personne = htmlspecialchars($_GET['num_personne']);
$start = htmlspecialchars($_GET['clef2']);

    $query = $pdo->prepare("SELECT  nom,prenom,email FROM personne WHERE num_personne LIKE ?");
        $query->execute([$_GET['num_personne']]);
        $name = $query->fetch(PDO::FETCH_ASSOC);

    $query = $pdo->prepare("SELECT  description,num_rdv FROM rendezvous WHERE num_personne LIKE ?");
        $query->execute([$_GET['num_personne']]);
        $description = $query->fetch(PDO::FETCH_ASSOC); 

            //reference du rendez-vous
    $query = $pdo->prepare("SELECT  num_rdv FROM rendezvous WHERE num_personne LIKE :num_personne AND start LIKE :start");
        //On donne la valeur $num_personne dans le tableau dont la clef est num_personne
        $query->execute(array(
                                ':num_personne'=>$num_personne,
                                ':start'=>$start));
        $num_rdv = $query->fetch(PDO::FETCH_ASSOC); 

        //notification email
        $query = $pdo->prepare("SELECT  notification FROM rendezvous WHERE num_rdv LIKE ?");
        $word = array($num_rdv['num_rdv']);
        $query->execute($word);

        $notification = $query->fetch(PDO::FETCH_ASSOC); 

            //je transmet toutes les données au fichier rendez-vous.php via controlRendezvous.php
            require('../controleur/controlRendezvous.php');
            