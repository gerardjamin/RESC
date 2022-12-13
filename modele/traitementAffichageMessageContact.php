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

    $valid = $_POST['Valid'];

    if($valid == 2){
        //je recupere les messages non lus dans la base de données
        $contacts = $pdo->prepare("SELECT  * FROM contact WHERE new = 0");   
        $contacts->execute();

        //Passage des messages à l'etat lus
        $query = $pdo->prepare( "UPDATE `contact` SET new = 1");
        $query->execute() or die(print_r($db->errorInfo()));
        }else{
        //je recupere tous les messages
        $contacts = $pdo->prepare("SELECT  * FROM contact WHERE new = 1 OR new = 0");   
        $contacts->execute(); 
        };  
        
        require('../controleur/controlAffichagemessage.php');
        