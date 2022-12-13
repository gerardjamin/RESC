<?php
            //instantiation de la classe Events
            require '../modele/Date/Events.php';
            $events = new Date\Events();

            //instantiation de la classe Month
            require '../modele/Date/Month.php';
            //Utilise les exceptions
            try {
            //la valeur des arguments passés par l'URL existent alors ($_GET[])) ou si il y a pas d'arguments cela prends la valeur (NULL ou 0)
            $month = new Date\Month($_GET['month'] ?? null,$_GET['year'] ?? null);
            //exception si il y a une erreur sur la creation de l'instance  
            }catch (\Exception $e ) {
                //on renvoie le mois courant
                $month = new Date\Month();
            }

            //recupere la date du premier lundi de la premiere semaine du mois en cours
            $firstM=$month->getFirstMonday();
            //var_dump($month->debug($firstM));

            //recupere le nombre de semaines entre $firstM & $end (sur 1 mois)
            $weeks=$month->getWeeks();

            //recupere la date du dernier jour du mois en cours (lundi($firstM) + 6 jours + 7 * nombre de semaine - une)
            $end=(clone $firstM)->modify("+" . (6 + 7 * ($weeks - 1)) . "day" );

            //tableau des evenement indéxé par jour($end par defaut = 1 mois) 
            $events= $events->getEventBetweenDays($firstM,$end);
            
            ?>