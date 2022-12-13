<?php if(session_id() == "") session_start()?>
<!DOCTYPE html>

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
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
		<title>Creation Compte</title>
		</head>

		<body style="background-color: #72C1F2";>
		<header>
			<?php include('header.php'); ?>
		</header>
					
						</div><!--fin row-->
							<h2 id="Acces">CREER UN COMPTE</h2>
								<div class="alert alert-danger" role="alert">
  								 <?php if(isset($_SESSION['errorMessage'])){
								    echo($_SESSION['errorMessage']);
								    $_SESSION['errorMessage'] = " ";} ?>
								</div>
								
						<div class="row justify-content-center">
							<div class="col-lg-4">
								<form action="../modele/action_compte.php" onsubmit="return confirmPassword()" method="POST" name="myform" id="myform" >
										 
										 	<div class="form-group">
										    <label for="nom">Nom:*</label>
										    <input type="text" class="form-control" placeholder="Entrer le nom" id="nom" name="nom" required>
										  	</div>

										  	<div class="form-group">
										    <label for="prenom">Prenom:*</label>
										    <input type="text" class="form-control" placeholder="Entrer le prenom" id="prenom" name="prenom" required>
										 	</div>

										 	<div class="form-group">
										    <label for="email">Adresse e-mail:*</label>
										    <input type="email" class="form-control" placeholder="Entrer l'adresse e-mail" id="email" name="email" required>
										  	</div>

										  	<div class="form-group">
										    <label for="password">Mot de Passe:*</label>
										    <input type="password" class="form-control" placeholder="Entrer le mot de passe"  id="pass" name="password"  onblur = "PasswordVerify()" required >
										  	</div>

										  	<div class="form-group position-relative">
										  	<i class="position-absolute bottom-50 end-0 fas icon-password fa-eye fa-eye-slash absolute" onclick="Toggle('pass')"></i>
										  	</div>

										  	<div class="form-group">
										  	<label for="passConfirme"><b>Confirmer votre mot de passe</b></label>
				               				<input type="password" class="form-control" placeholder="Confirmez le mot de passe" name="passConfirme" id= "passConfirme" required >
				               				</div>
									  	  
									  	    <div class="form-group position-relative">
										  	<i class="position-absolute bottom-50 end-0 fas icon-password fa-eye fa-eye-slash absolute" onclick="Toggle('passConfirme')"></i>
										  	</div>
									 
				               				<div class="form-group">
				             				 <input type="radio" name="autorisation" value="1" required> Administrateur
				            				 <input type="radio" name="autorisation" value="2"required> Patient
									  	 	</div>
									  	  
											<button type="submit" class="btn btn-primary mt-5">Creation du compte</button>		
								</form>
							</div><!--fin col-->
						</div><!--fin row-->
				</div><!--fin container-->

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