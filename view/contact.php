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

	<body style="background-color: #72C1F2">
															<!--navbar-->
		<header>
			<?php include('header.php'); ?>
		</header>

			<div class="container-fluid text-center">
				<div class="row bg-warning">
					<p id="contact" class="pt-3"> NOUS TROUVER & NOUS CONTACTER </p>
				</div>
			</div>		

			<div class="container-fluid">
				<div class="row">
					<div class="coordonnees col-lg-3 text-center pt-5 font-weight-bold">
							<br><br><br>
							<h2>RESC</h2><br>	
		    				<i>254, Boulevard Michelet 13600 la Ciotat</i><br>
		     				<i class="fa-solid fa-phone text-center"></i><span>07 09 21 36 57 06</span><br> 
		     				<i class="fa-solid fa-envelope text-center"></i> contact@resc-ciotat.fr
					</div>
					<div class=" col-lg-6 text-center" style="padding-top:50px">
						<iframe  class="w-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2908.5532984086967!2d5.6117932154830115!3d43.197882979139614!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x12c9a58595e80c6f%3A0x39d7c8e7df1acce5!2s254%20Av.%20michelet%2013600%20La%20Ciotat!5e0!3m2!1sfr!2sfr!4v1646749932022!5m2!1sfr!2sfr" height="400" loading="lazy"></iframe>
					</div>
				</div>
			</div>

			<div class="container">
				<div class="row" class="justify-content-center">
					<h3>Pour vos prises de rendez-vous</h3>	
						<div class="col-lg-12 text-center pt-0 mt-0">
											<!--formulaire sécurisé-->
							<form name="formulaire_contact" action="../modele/traitement_contact.php" method="POST">
								  	<div class="form-group">
								    	<label for="nom">Nom*:</label>
								    	<input type="text" class="form-control" placeholder="Entrer votre Nom" id="nom" required name="nom">
								  	</div>
								  	<div class="form-group">
								    	<label for="prenom">Prenom*:</label>
								    	<input type="text" class="form-control" placeholder="Entrer votre Prenom" id="prenom" required name="prenom">
								  	</div>
								  	<div class="form-group">
								    	<label for="email">Adresse e-mail*:</label>
								    	<input type="email" class="form-control" placeholder="Entrer votre email" id="email" required name="email">
								  	</div>
								  	<div class="form-group">
								    	<label for="email">Date du message*:</label>
								    	<input type="date" class="form-control" placeholder="Entrer la date" id="date" required name="date">
								  	</div>
								  	<div class="form-group mt-5">
											<label for="message"></label>
											<textarea class="text-right" name="message" id="contact" cols="60" rows="4" wrap="hard" placeholder="Veuillez entrer votre demande de rendez-vous dans cette zone" required></textarea> 
									</div>
									<?php if(!isset($_SESSION['LOGGED_USER'])) { ?>
										<div class="alert alert-danger" role="alert">
	  										Le praticien recoit des demandes de rendez vous
	  										seulement pour des patients enregistrés et connectés. Merci de vous enregistrer et de vous connecter.
										</div>
									<?php }
									  else{ ?>

										<button type="submit" class="btn btn-primary m-3">Envoyer votre demande</button>

									<?php } ?> 
											
							</form>
						</div>								
		    	</div>
		    </div><!--fin container-->	

												<!--footer-->
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