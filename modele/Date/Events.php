<?php
//container de classes
namespace Date;
//___________________________________________________________________________________________

/**************************retourne un tableau avec les evenements compris entre $start & $end
 * 
	$start: argument de type dateTime de départ
	$end: argument de type dateTime de fin
*/

class Events{
/*
getEventBetweenMonth() retourne l'ensemble des evenements dans un tableau indéxé par mois
$end: de type \dateTime
$start:de type \dateTime
$results:array
l'objet DateTime represente la date et l'heure dans la zone specifiée dans le fichier de configuration ( php.ini)
*/
public function getEventBetweenMonth(\dateTime $start,\dateTime $end): array{

try {
    $pdo = new \PDO("mysql:host=localhost;dbname=site_resc", 
        "root", 
        "",
        [\PDO::ATTR_ERRMODE => \PDO::ERRMODE_EXCEPTION],
    );} 
catch(Exception $e) { die('Erreur: '.$e->getMessage());}

//format():formatage de la date de debut & de fin dans la requette sql
$sql= " SELECT * FROM rendezvous WHERE start BETWEEN '{$start->format('y-m-d 00:00:00')}' AND
		  '{$end->format('y-m-d 23:59:59')}'";

 	$state = $pdo->query($sql);
 	//recuperation de tous les champs entre la date de debut et de fin de l'evenement
    $results = $state->fetchAll();
	return $results;
}
/*
getEventBetweenDays(): retourne l'ensemble des evenements sur 1 jour et
groupe ces evenements dans un meme tableau pour ce meme jour
$end: \dateTime
$start:\dateTime
$results:array
*/
public function getEventBetweenDays(\dateTime $start,\dateTime $end): array{
	//totalité des evenements compris entre $start et $end (ici du mois en cours)
	$events=$this->getEventBetweenMonth($start,$end);
	//creation d'un tableau
	$days = [];
	foreach($events as $event){

		//explode:on ne retient que la partie date de start ("2022-07-30      15:25:13") 
		$date = explode(' ',$event['start'])[0];

			if(!isset($days[$date])){
				//tableau indexe par la date du jour
				$days[$date]=[$event];

			}else{
				$days[$date][] = $event;
			}
	}
	return $days;
}
}//fin classe events