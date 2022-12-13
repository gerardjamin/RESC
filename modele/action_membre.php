<?php
//Si aucune session n'est ouverte(ID session=NULL)
if(session_id() == "") session_start();
//***********************************************************************************************************
                        


                        //je me connecte a la base de données site_resc
   try {
    $pdo = new PDO("mysql:host=localhost;dbname=site_resc", 
        "root", 
        "",
        [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION],
    );} 
    catch(Exception $e) { die('Erreur: '.$e->getMessage());}

//je verifie que l'adresse email existe dans la base de données
    $query = $pdo->prepare("SELECT  email FROM personne WHERE email LIKE ?");
    $query->execute([$_POST['email']]);
    $email = $query->fetch(PDO::FETCH_ASSOC);

if($email != NULL ) {

            //je récupère le password de la base de données
            $query = $pdo->prepare("SELECT nom,prenom,password,role_id FROM personne WHERE email = ?");
            $query->execute([$_POST['email']]) or die(print_r($db->errorInfo()));
            $membre = $query->fetch();
            $pass = $membre['password'];
            $role = $membre['role_id'];
            $nom = $membre['nom'];
            $prenom = $membre['prenom'];

                //je vérifie la validité du mot de passe
            if (password_verify($_POST['pass'], $pass)){ 
                    
                        $_SESSION['LOGGED_USER'] = $_POST['email'];
                        //patient ou administrateur
                        $_SESSION['AUTORISATION'] = $role;
                        $_SESSION['nom'] = $nom;
                        $_SESSION['prenom'] = $prenom;
                        //je redirige l'utilisateur
                        require('../controleur/controlHomepage.php');
                    
                       }else{ 
                       $_SESSION['errorMessage'] = sprintf('Les informations envoyées ne permettent pas de vous identifier : (%s/%s)',
                                    $_POST['email'],
                                    $_POST['password']
                                );
                            //Ferme la session du visiteur
                            //session_destroy(); 
                            //on réaffiche la page de connection
                            //include_once('../view/AccesMembre.php');}
                            require('../controleur/controlMembre.php');}

    }else{

            $_SESSION['errorMessage'] = sprintf('Cette adresse email n\'existe pas ! : (%s/%s)',
            $_POST['email'],
            $_POST['password']
            );
            //Ferme la session du visiteur
            //session_destroy();
            //on réaffiche la page de connection 
            require('../controleur/controlMembre.php');           
    }


 


