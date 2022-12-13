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
	<header>
		<?php include('header.php'); ?>
	</header>


	<div class="container">

		<form name="formulaire_rendezvous" action="../modele/traitementAffichageMessageContact.php" method="POST">
			<div class="row justify-content-center">

				<div class="col-lg-6">
					<div  class="form-group mt-5">  
						<input type="radio" name="Valid" value="1" required> Tous les messages
					</div>
				</div>

				<div class="col-lg-6">
					<div  class="form-group mt-5">
						<input type="radio" name="Valid" value="2"required>Tous les massages non lus
					</div>
				</div>
			</div>

			<div class="row">
				<div class="col-lg-12">
						<button type="submit" class="btn btn-primary mt-5 ">LIRE</button>
				</div>
			</div>
				
		</form>

	</div><!--fin container-->		

		<!--position importante -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Optional JavaScript -->

<!-- jQuery first, then Popper.js, then Bootstrap JS -->

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- =========================icone ==================== -->
<script src="https://kit.fontawesome.com/0a413bce04.js" crossorigin="anonymous"></script>
<!--position importante -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>