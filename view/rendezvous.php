<?php if(session_id() == "") session_start()?>
<!DOCTYPE html>
<html>
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

		<!--mes fonctions javascript-->
		<script src="../js/appMail.js"></script>

		<!--framework bootstrap 5..-->
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

		<title>SITE RESC</title>

	</head>

		<body style="background-color: #72C1F2";>
				<div class="container" id="Name">
					<div class="row justify-content-center">
						<div class="col-lg-6">
							<div class="card bg-warning text-black" style="width:600px;">
								<div class="card-body">
								  <h4 class="card-title">Patient: <?=htmlspecialchars($name['nom'])." ".htmlspecialchars($name['prenom'])?></h4>
								  <p class="card-text"><?=htmlspecialchars($description['description'])?></p>
								   <p class="card-text">Référence du rendez-vous : N°  <?=htmlspecialchars($num_rdv['num_rdv'])?>  </p>

								  <a href="../view/calendar.php" type="button" class="btn btn-primary mt-5">Retour</a>
								  
								  <?php if($notification['notification'] == 1){ ?>
									  <a href="../modele/traitement_mailer.php?patient=<?=htmlspecialchars($name['email'])?>&date=<?=htmlspecialchars($start)?>&refRdv=<?=htmlspecialchars($num_rdv['num_rdv'])?>" type="button" class="btn btn-success disabled mt-5">confirmation du rendez-vous</a>
									  	<?php }else{ ?>
									  <a href="../modele/traitement_mailer.php?patient=<?=htmlspecialchars($name['email'])?>&date=<?=htmlspecialchars($start)?>&refRdv=<?=htmlspecialchars($num_rdv['num_rdv'])?>" type="button" class="btn btn-danger mt-5">confirmation du rendez-vous</a>
									  <?php } ?>
								 </div>
							</div>
						</div>
					</div>
				</div>

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