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

        //je recupere l' ID du patient connectée
        $query = $pdo->prepare("SELECT  num_personne FROM personne WHERE email LIKE ?");
            $query->execute([$_SESSION['LOGGED_USER']]);
                $num_personne = $query->fetch(PDO::FETCH_ASSOC);

        //je recupere la date du rendez-vous
        $query = $pdo->prepare("SELECT  start FROM rendezvous WHERE num_personne LIKE ?");
            $word = array($num_personne['num_personne']);
                $query->execute($word);
                    $starts = $query->fetchAll(PDO::FETCH_ASSOC) ;

                      
       
      