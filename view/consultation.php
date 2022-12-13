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

	<!--framework bootstrap 5..-->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

	<title>SITE RESC</title>

	</head>

	<body style="background-color: #72C1F2";>
		<header>
			<?php include('header.php'); ?>
		</header>  									<!--FIN barre de navigation-->
		<div class="container">
			<div class="card mt-3" style="max-width: 1500px;background-color: #72C1F2;">
			    <div class="row">
				      <div class="col-lg-4 text-center">
				        <img src="../photo/infirmiere.jpg" class="rounded-circle w-80 mx-3" height="300" alt="not found">
				        <a href="contact.php" type="button" class="btn btn-warning my-5">Prenez Rendez Vous</a>
				      </div>
			      <div class="praticienne col-lg-6 text-center">
			        <div class="card-body">
			          <h3 class="card-title">Gladys Pozinski</h3>
			        	  	<p class="card-text mt-5 text-center">

			        	  		<ul class="list-group mx-5">
								  <li class="list-group-item" style="background-color: #72C1F2;">Infirmière diplomée d’état depuis 1984</li>
								  <li class="list-group-item" style="background-color: #72C1F2;">Maitrise en science humaine et sociale</li>
								  <li class="list-group-item" style="background-color: #72C1F2;">Master en science de l’éducation filière encadrement, évaluation et formation</li>
								  <li class="list-group-item" style="background-color: #72C1F2;">Optimisation dans la prise en charge des pathologies gynécologiques</li>
								  <li class="list-group-item" style="background-color: #72C1F2;">Certification en éducation thérapeutique (diététique et relaxation)</li>
								   <li class="list-group-item" style="background-color: #72C1F2;">Praticienne de la méthode RESC</li>
								</ul>
											
							</p>
			        </div><!--fin cardbody-->
			      </div> <!--fin col-->
			    </div><!--fin row-->
			</div>

					
			<div class="row">
				<div class="col-lg-6 text-center">
					<i class="font-weight-bold text-uppercase">Jours de consultations</i><br>
					<i class="">Lundi,Mercredi,Jeudi</i><br>
					<i class="">Le matin de 9h à 12h et l'aprés midi de 12h à 17h</i>
				</div>

				<div class="col-lg-6 text-center">
					<i class="font-weight-bold text-uppercase">tarifs</i><br>
					<i class="">Normal/Réduit*</i><br>
					<i class="">40€/30€</i>
					<i class="">*Enfants & Etudiants</i><br>
				</div>

			</div><!--fin row-->

			<div class="row">
				<div class="col-lg-6 text-center">
					<br>
					<i class="text-uppercase text-dark">Pour qui ?</i><br>
					<i class=" star fas fa-star"></i>
					<i class="text-dark">Pour tout patient de la naissance à la fin de vie</i><br>
				</div>
				
			</div><!--fin row-->
			
		</div> <!--fin container-->

		<footer>
			<?php include('footer.php') ?>
		</footer>



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



	
