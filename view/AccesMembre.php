<?php if(session_id() == "") session_start()?>
<!DOCTYPE html>
<html>
<html lang="fr">

<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<!--keywords pour le référencement du site --> 
<meta name="keywords" content="RESC, accupuncture,massage" />
<!--mes fonctions javascript-->
<script src="../js/index.js"></script>
<!--icone Font Awesome-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css">

<!--sheet style perso-->
<link rel="stylesheet" href="../css/style.css">
<!--Pour les icônes dans le champ de saisie ( Eye Icon)-->
<!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">-->

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<title>Accés Membre</title>

</head>

	 <body style="background-color: #72C1F2">
	 	<header>
			<?php include('header.php'); ?>
		</header>
	        <div id="container">
	        	<!-- The Modal -->
	  					<div class="row" class="justify-content-center">
				        	<h2 class="text-justify text-center font-weight-bold">Connexion</h2>
				        		<?php if(isset($_SESSION['errorMessage'])) : ?>
						        	<div style="background-color: #72C1F2";>
						        		<?php echo($_SESSION['errorMessage']);$_SESSION['errorMessage'] = " "; ?>
						        	</div>
					    </div>
	    				<?php endif; ?>
			            <!-- zone de connexion -->
			        <div class="col-lg-12 text-center pt-0 mt-0">

			            <form name="formulaire_connexion" action="../modele/action_membre.php" method="POST">
			                <div class="form-group">
						<label for="email">Adresse Email:*</label>
						<input type="email" class="form-control form-control-sm" placeholder="Entrer votre email" id="mail" name="email" required>
					   </div>
					   <div class="form-group">
						<label for="password">Mot de Passe:*</label>
						<input type="password" class="form-control form-control-sm" placeholder="Entrer votre mot de passe" id="pass" name="pass" required value="neant" > 	    	
					   </div>
					   <div class="form-group">
						<input type="checkbox" onclick="Toggle('pass')">Show Password
					   </div>	
			             <p><a href="../view/CreationCompte.php">Creation de votre compte</a></p>
			             <button type="submit" class="btn btn-primary">Accéder à mon compte</button></form>
			        </div><!--fin col-->
			    </div><!--fin row-->
	        </div><!--fin container-->
	    
				<!-- Optional JavaScript -->

				<!-- jQuery first, then Popper.js, then Bootstrap JS -->

	<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script><!-- =========================icone ==================== -->
	<script src="https://kit.fontawesome.com/0a413bce04.js" crossorigin="anonymous"></script>

	</body>
</html>	