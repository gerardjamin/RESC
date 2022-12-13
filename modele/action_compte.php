<?php
session_start();
//******************************************************************************************************
//j'enregistre les valeurs du formulaire  dans des variables
$nom=htmlspecialchars($_POST['nom']);
$prenom=htmlspecialchars($_POST['prenom']);
$email=htmlspecialchars($_POST['email']);
$password=htmlspecialchars($_POST['password']);
$autorisation=htmlspecialchars($_POST['autorisation']);

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


//**********************je recupere l'adresse email de la BDD si l'adresse existe deja************************
$query = $pdo->prepare("SELECT  email FROM personne WHERE email LIKE ?");
    $query->execute([$_POST['email']]);
    //style de retour de la base de données (ici: tableau associatif)
        $emailChecked = $query->fetch(PDO::FETCH_ASSOC);

//je teste si l'adresse email entrée par l'utilisateur existe déja dans la base de données, si l'adresse
//n'existe pas je stocke les informations de l'utilisateur dans la base de données et ensuite je renvoie l'utilisateur vers la page d'accueil
if($emailChecked['email'] != $_POST['email'] ) {

            //je verifie si le format de  l'email est valide
            if (!filter_var($_POST['email'], FILTER_VALIDATE_EMAIL) === false) {
               //la requéte SQL enregistre l'utilisateur avec un mot de passe crypté
                $query = $pdo->prepare( "INSERT into `personne` (nom,prenom,email,password,role_id) VALUES (?,?,?,?,?)");
                $password = password_hash($_POST['password'], PASSWORD_DEFAULT);
                //j'enregistre les informations dans l'objet $word
                $word = array($nom,$prenom,$_POST['email'],$password,$autorisation);
                $query->execute($word) or die(print_r($db->errorInfo()));
                
                //je dirige l'utilisateur vers la page d'acceuil
                require('../controleur/controlHomepage.php');
                exit(); 
                  
                } else { 
                            $_SESSION['errorMessage'] = sprintf('Entrez une adresse email valide ! : (%s/%s)',
                            $_POST['email'],
                            $_POST['password']
                            );
                             require('../controleur/controlCreation.php'); 
                             //include_once('../view/CreationCompte.php');
            }//fin else email valide

    } else {
            $_SESSION['errorMessage'] = sprintf('Cette adresse email existe déja ! : (%s/%s)',
            $_POST['email'],
            $_POST['password']
            );  
            //je dirige l'utilisateur
            require('../controleur/controlHomepage.php');
    }//fin else email existe deja 

   




