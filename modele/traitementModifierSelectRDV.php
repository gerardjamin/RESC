<?php

//recuperation de l'adresse email
$email=htmlspecialchars($_GET['var1']);

//connection a la base de données
try {
    $pdo = new PDO("mysql:host=localhost;dbname=site_resc", 
        "root", 
        "",
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],
    );} 
    catch(Exception $e) { die('Erreur: '.$e->getMessage());
}

//je verifie que l'adresse email existe dans la base de données
    $query = $pdo->prepare("SELECT  email FROM personne WHERE email LIKE ?");
    $query->execute([$_GET['var1']]);
    $email = $query->fetch(PDO::FETCH_ASSOC);

if($email != NULL ) {

   //prepare la requette
 $query = $pdo->prepare("SELECT num_personne FROM `personne` WHERE email LIKE ?");
 $query->execute([$_GET['var1']]);
 $reponse = $query->fetch(PDO::FETCH_ASSOC);

//prepare la requette
 $query = $pdo->prepare("SELECT * FROM `rendezvous` WHERE num_personne LIKE ?");
 $word = array($reponse['num_personne']);
 $query->execute($word);

//reponse de la requette AJAX (ensemble des RDV pour une personne)
 while($row = $query->fetch(PDO::FETCH_ASSOC)){ 
    //reponse du serveur       
    echo $row['start']."/";}

}else{

    echo "?"; 
}
   


    