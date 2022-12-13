<?php
//fonction de debug
function debug($variable){
    echo '<pre>' . print_r($variable, true) . '</pre>';
}

//j'enregistre les valeurs des champs du formulaire  dans des variables
$email = htmlspecialchars($_POST['email']);
$message = htmlspecialchars($_POST['message']);
$nom = htmlspecialchars($_POST['nom']);
$prenom = htmlspecialchars($_POST['prenom']);
$nouveau = 0;
$date = htmlspecialchars($_POST['date']);

// je verifie que tous les champs ont été remplis
if (!isset($_POST['email']) || !isset($_POST['message']) || !isset($_POST['nom']) || !isset($_POST['nom']) || !isset($_POST['prenom']))
        {
        	echo('Il faut remplir tous les champs pour soumettre le formulaire.');
            return;
        }else{

         //je me connecte a la base de données site_resc
           try {
            $pdo = new PDO("mysql:host=localhost;dbname=site_resc", 
                "root", 
                "",
                [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],
            );} 
            catch(Exception $e) { die('Erreur: '.$e->getMessage());}

    //je verifie si le format de  l'email est valide
            if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
        
                $query = $pdo->prepare( "INSERT into `contact` (nom,prenom,email,message,new,date) VALUES (?,?,?,?,?,?)");
                //j'enregistre les informations dans l'objet $word
                $word = array($nom,$prenom,$email,$_POST['message'],$nouveau,$date);
                //j'affiche les erreurs possibles de la base de données
                $query->execute($word) or die(print_r($db->errorInfo())); 
               
                require('../controleur/controlAffichagecontact.php');

            }//fin if je vérifie l'email
        }//fin else je verifie les champs


