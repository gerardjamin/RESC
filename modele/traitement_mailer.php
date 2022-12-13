<?php
//envoie de la notification du rendez-vous par email
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

//fichiers utilisés dans notre projet
require_once "../vendor/phpmailer/phpmailer/src/Exception.php";
require_once "../vendor/phpmailer/phpmailer/src/PHPMailer.php";
require_once "../vendor/phpmailer/phpmailer/src/SMTP.php";

//information du destinataire
$destinataire = htmlspecialchars($_GET['patient']);
$dateGet = htmlspecialchars($_GET['date']);
$Heure = (new DateTime($dateGet))->format('H:i');
$Date = (new DateTime($dateGet))->format('j/n/Y');
$reference = htmlspecialchars($_GET['refRdv']);
$administrateur = "jarosz.sophie@gmail.com";

//creation de l'objet PHPmailer avec la gestion des Exceptions(true)
$mail = new PHPMailer(true);

try{
	//configuration
	//$mail->SMTPDebug = SMTP::DEBUG_SERVER; //information de debug

	//configuration du SMTP (single mail transfert protocol)
	$mail->isSMTP();
	//informations du fournisseur SMTP orange
	$mail->Host = "smtp.orange.fr";
	$mail->SMTPAuth = true;
	$mail->Username = "gerard_jamin@orange.fr";
	$mail->Password = "Nartahum21";

	//charset(encodage:avec caractères accentués)
	$mail->CharSet = "utf-8";

	//destinataire
	$mail->addAddress($destinataire);
	$mail->addCC($administrateur);

	//expediteur
	$mail->setFrom("no-reply@resc.fr");

	//*******contenu***************

	//envoie du HTML: On utilisera des balises dans $message(<p></p> ou <strong></strong>....)
	$mail->isHTML(true); //Set email format to HTML
	$mail->Subject = "Confirmation du rendez-vous";
	$message ="<h3>Je vous <strong>confirme</strong> votre rendez-vous du ".$Date." à ".$Heure." avec votre praticienne</h3>";
	$mail->Body = $message;

						//*******attention l'envoie du mail est dévalidé************

	//on envoie la notification de rappel au patient
	$mail->send();

	//j'enregistre dans le champs notification une valeur 1 qui représente l'envoie de l'email de rappel de rendez-vous pour le patient
	
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

	//la requéte SQL enregistre la notification dans la table de données rendezvous
	$query = $pdo->prepare( "UPDATE `rendezvous` SET notification = 1 WHERE num_rdv = ?");
	/*j'enregistre la reference dans l'objet tableau $word */
	$word = array($reference);
	$query->execute($word) or die(print_r($db->errorInfo()));

}catch(Exception $e){

	echo "Message non envoyé. Erreur: {$mail->ErrorInfo}";
}

//je redirige l'utilisateur
require('../controleur/controlCalendrier.php');


