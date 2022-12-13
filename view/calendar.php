<?php if(session_id() == "") session_start()?>
<!doctype html>
							
<html lang="fr">

	<head>
    	<!-- Required meta tags -->
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    	<!--keywords pour le référencement du site --> 
    	<meta name="keywords" content="RESC, accupuncture,massage" />
    	<!--icone Font Awesome-->
    	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">
    	<!--sheet style perso-->
    	<link rel="stylesheet" href="../css/style.css">
        <script src="js/index.js"></script>
    	<!--framework bootstrap 5..-->
    	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
	   <title>SITE RESC</title>
	</head>

    <body style="background-color: #72C1F2"> 
        <div clas="container">
            <div class="row">        
                        <?php include_once('header.php'); ?>   
            </div>     
        </div> 
                <!--Instantiation des classes events & months-->
              <?php require('../modele/traitement_calendrier.php'); ?>
        <div class="container-fluid">
                <div class="row mt-3">
                    <div class="col">
                        <div class="dropdown dropend">
                            <a href="calendar.php?month= <?= $month->previousMonth()->month;?> & year=<?= $month->previousMonth()->year; ?>" type="button" class="btn btn-primary text-dark me-2">&lt;</a>
                        </div>
                    </div>

                    <div class="col">    
                        <div class="dropdown dropstart text-end">
                           <a href="calendar.php?month= <?= $month->nextMonth()->month;?> & year=<?= $month-> nextMonth()->year; ?>" type="button" class="btn btn-primary text-dark me-2">&gt;</a>
                        </div>
                    </div>    
                </div>   

                <h1 id="titre"><?= $month->toString(); ?></h1>
            <div class="container">
                <table class="calendrier">
                <!-- boucle sur le nombre de semaine du mois-->   
                    <?php for ($i = 0;$i<$weeks;$i++): ?>
                        <tr>
                            <!--l'entier $k min = 0 et max= 6-->
                            <?php foreach($month->Semaine as $k=>$day):
                                //enregistrement des evenements si ils y en a dans un tableau indéxé par jour 
                                $date= (clone $firstM)->modify("+" . ($k + $i * 7) . "day");
                                $eventsForDay=$events[$date->format('Y-m-d')] ?? [];?>
                            <td>
                                <!--affichage du jour -->
                                <div class="calendrier_week"><?= $day; ?></div>
                                <!--affichage de la date-->
                                <div class="calendar_day"><?=(clone $firstM)->modify("+" . ($k + $i * 7) . "day")->format("d");?></div>

                                <!--affichage de l'heure du rendez-vous-->
                                <?php foreach($eventsForDay as $event): ?>
                                <div class="calendrier_event">
                                    <a href = "../modele/action_nom_rendezvous.php?num_personne=<?=$event['num_personne'];?>&clef2=<?=$event['start']?>"> <?= (new DateTime($event['start']))->format('H:i'); ?> : Rendez-vous</a>
                                </div>
                                <?php endforeach; ?>
                            </td>
                            <?php endforeach; ?>
                        </tr>
                    <?php endfor; ?>
                </table>
            </div>
        </div><!--fin div container fluid-->

    <!-- Optional JavaScript -->

    <!-- jQuery first, then Popper.js, then Bootstrap JS -->

    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
    <!-- =========================icone ==================== -->
    <script src="https://kit.fontawesome.com/0a413bce04.js" crossorigin="anonymous"></script>

    </body>

</html>
	