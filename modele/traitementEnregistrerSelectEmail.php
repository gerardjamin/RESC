<?php
try {
    $pdo = new PDO("mysql:host=localhost;dbname=site_resc", 
        "root", 
        "",
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],
    );} 
    catch(Exception $e) { die('Erreur: '.$e->getMessage());}

 $query = $pdo->prepare("SELECT email FROM `personne`");
 $query->execute();