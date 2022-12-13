<?php
//container de toutes les classes appellées dans ce fichier
namespace Date;
//___________________________________________________________________________________________

class Month {

	//partie statique:

	//liste des jours de la semaine 
	public $Semaine =['lundi','mardi','mercredi','jeudi','vendredi','samedi','dimanche'];
	//liste des mois
	private $months=['janvier','fevrier','mars','avril','mai','juin','juillet','aout','septembre','octobre',
	'novembre','decembre'];
	public $year;
	public $month;

	public function debug($variable){
    return '<pre>' . print_r($variable,true) . '</pre>';
	}

	//partie dynamique
	
	/*
	*******************CONSTRUCTEUR DE LA CLASSE Month en utilisant les exceptions (@throws Exception) **********************Ce constructeur va permettre de construire l'objet month**************
	param $month: le mois compris entre 1 et 12
	param year: compris entre 1 et ....
	si pas de parametres a l'appel de la fonction: month et year sont  null sinon ceux sont des entiers
	@throws Exception : Cette méthode peut renvoyer des exceptions
	On indique que les arguments sont optionnels et muable en entier
	*/
	public function __construct(?int $month=null, ?int $year=null){
		//cas ou il y a pas de parametre
		if($month === null){
			//renvoie le mois courant en type entier
			$month = intval(date('m'));
		}
		if($year === null){
			//renvoie la date courante en type entier
			$year = intval(date('Y'));
		}

		//cas ou les paramettres existent
		//utilisation des exceptions
		if($month <1 || $month > 12){
			throw new \Exception(message: "Le mois $month n'est pas valide");
		}
		//choix arbitraire de l'année 1970
		if($year < 1970){
			throw new \Exception(message: "L'année est inférieur à 1970");
		}
		//accède à la valeur mois courant
		$this->month= $month;
		//accède à la valeur année courante
		$this->year= $year;
	}

	//partie méthodes:

	/*
	toString() Retourne le mois en toute lettre (ex:janvier 2022) 
	@Return string
	$$arg passés par URL(1,2,8,...;2016,2022,1989....)
	**Ne pas oublier que l'index 0 du tableau $months[] est janvier
	**Ne pas oublier que l'index 0 du tableau $semaine[] est lundi
	*/
	public function toString(): string {
		return $this->months[$this->month - 1] . ' ' . $this->year;
	}
	/*
	getWeeks() Retourne le nombre de semaines du mois en cour
	dateTime: c'est une classe PHP "\"
	$start: date du premier jour du mois en cour.. en string
	$end: date du dernier jour du mois en cours.. en string (1er jour du mois en cours + 1 mois - 1 jour)
	$end - $start égale au nombre de semaines du mois
	format:Année, mois et jour avec tirets 2008-6-30
	W: Numéro de semaine du mois en cour.. dans l'année 
	@return:int
	*/
	public function getWeeks(): int{

		//date de début du mois
		$start=$this->getFirstDay();
		//date de fin on passe en format relatif, on rajoute 1 mois et on enlève 1 jour
		$end=  (clone $start)->modify('+1 month -1 day');
		//renvoie le nombre de semaines du mois en cours, on rajoute toujours 1
		$weeks = intval($end->format('W')) - intval($start->format('W')) +1;
		//si $start est sur l'année d'avant alors
		if($weeks < 0){
			$weeks = intval($end->format('W'));
		}
		return $weeks;	
	}       
	/*
	getFirstDay() crée un nouveau dateTime et Renvoie le premier jour du mois en cours
	le constructeur de cet objet __construct("Y"-"M"-"J") de type dateTime utilise l'option Date Format(Y-M-J)  
	\dateTime est une classe de PHP et non pas de namespace Date
	*/
	public function getFirstDay(): \dateTime {
		return new \dateTime("{$this->year}-{$this->month}-01");
	}
/*
	getFirstMonday() Renvoie le premier lundi du mois en cours de type dateTime
	*/
	public function getFirstMonday(): \dateTime {
		//renvoie le précédent lundi
		$first = $this->getFirstDay()->modify('last monday');
		//si c'est un lundi "N" alors on ne rajoute pas 1 semaine
		if($first->format('N') === '1' ? $first : $first->getFirstDay()->modify('last monday'))
		return $first;
	}
	//*****************fleche de navigation**************************** 
/*
	**nextMonth() Retourne une nouvelle instance de la classe(mois + 1)
*/
	public function nextMonth():Month{
		//premier element index 0
		$month = $this->month + 1;
		$year = $this->year;
			if($month > 12){
				$month = 1;
				$year = $year + 1;
			}
		return new Month($month,$year);
	}
/*
	**previousMonth() Retourne une nouvelle instance de la classe(mois - 1)
*/
	public function previousMonth():Month{
		$month = $this->month - 1;
		$year = $this->year;
			if($month < 1){
				$month = 12;
				$year = $year - 1;
			}
		return new Month($month,$year);
	}
}//fin classe Month