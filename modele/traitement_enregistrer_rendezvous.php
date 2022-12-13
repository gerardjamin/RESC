<?php
if(session_id() == "") session_start();
//j'enregistre les valeurs du formulaire  dans des variables
$nature=htmlspecialchars($_POST['nature']);
$date_Forms=htmlspecialchars($_POST['date']);
$description=htmlspecialchars($_POST['description']);
$email = htmlspecialchars($_POST['email']);

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

//**********************je recupere l'adresse email dans la BDD si l'adresse existe deja************************
$query = $pdo->prepare("SELECT  email FROM personne WHERE email LIKE ?");
    $query->execute([$_POST['email']]);
        $email = $query->fetch(PDO::FETCH_ASSOC);

//si le patient existe alors on procede a l'enregistrement du rendez-vous
if($email != NULL) {

                //requette de la recuperation de l'ID du patient (!!attention a la syntaxe sql)
                $query = $pdo->prepare("SELECT  num_personne FROM personne WHERE  email LIKE ?");
                    //la fonction n'axcepte que le type tableau
                    $query->execute([ $_POST['email'] ]);
                        $num_personne = $query->fetch(PDO::FETCH_ASSOC);

                         //la requéte SQL enregistre le rendez-vous dans la table de données
                        $query = $pdo->prepare( "INSERT INTO `rendezvous` (num_personne,nature,description,start) VALUES (?,?,?,?)");
                            //j'enregistre les informations dans l'objet $word
                            $word = array($num_personne['num_personne'],$nature,$description,$date_Forms);
                                $query->execute($word) or die(print_r($db->errorInfo()));


                                //$_SESSION['errorMessage'] = sprintf('Le rendez-vous à bien été enregistré dans la base de données ! ');

                                //je dirige l'utilisateur
                                require('../controleur/controlCalendrier.php');

                            }else{
                                     $_SESSION['errorMessage'] = sprintf('Le patient dois etre enregistrer dans la base de données ! ');
                                       require('../controleur/controlCreation.php'); 
                                 };





                            






