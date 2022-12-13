<?php if(session_id() == "") session_start()?> 
<?php //$_SESSION (persistance de la donnée entre page ?>
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
<!--framework bootstrap 5.. -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<title>SITE RESC</title>

</head>

<body style="background-color: #72C1F2">
		<header>
			<!--copy/paste header.php-->
		<?php include('header.php'); ?>		    
    	</header>
  									<!--FIN barre de navigation-->
  									<!--message de bienvenue-->
  	<div class="container pt-4 text-center">
  		<h1>Une médecine douce qui a le vent en poupe</h1>
  		<p>Merci de visiter notre site, Bienvenue à vous et bonne découverte</p>
  	</div>
  									
		<div class="container"> 
				<div class="row"> <!--zone hero (caroussel)-->
				   	<div class="col" style="padding-top:50px">	
				      <div id="carouselControls" class="carousel slide" data-ride="carousel">
	          			<div class="carousel-inner">
	            			<div class="carousel-item active">
	              				<img src="../photo/caroussel2.png" class="w-100"  height="450" alt="caroussel">
	            			</div>
	            			<div class="carousel-item">
	              				<img src="../photo/caroussel5.png" class="w-100" height="450" alt="caroussel">
	            			</div>
	            			<div class="carousel-item">
	              				<img src="../photo/caroussel6.png" class="w-100" height="450" alt="caroussel">
	            			</div>
	            			<div class="carousel-item">
	              				<img src="../photo/caroussel4.png" class="w-100" height="450" alt="caroussel">
	            			</div>
	          			</div>

	          			<a class="carousel-control-prev" href="#carouselControls" role="button" data-slide="prev">
		            		<span class="carousel-control-prev-icon" aria-hidden="true"></span>
		            		<span class="sr-only">Précédent</span>
	          			</a>
	          			<a class="carousel-control-next" href="#carouselControls" role="button" data-slide="next">
		            		<span class="carousel-control-next-icon" aria-hidden="true"></span>
		            		<span class="sr-only">Suivant</span>
	          			</a>
	        		 </div> <!--fin caroussel-->
				   	</div>
				</div> 
		</div> <!--fin container-->

		<div class="container-fluid" >
			<div class="row"> <!--zone photo + texte-->
            		
						   	<div class="col-lg-3 text-center" style="padding-top:85px">
							   	<div class="w3-card-4" style="width:100%">
									   <img src="../photo/main.jpg" class="img-fluid" alt="Main" style="width:100%">
									    	<div class="w3-container w3-center">
									      			<p style="font-family:Monserrat;font-size:24px">Une main apaisante</p>
									    	</div>
				  				</div>
							  </div>	
		 
					   	 	<div class="col-lg-7 text-center mx-lg-5">
					   	 			
					   	 			 <div class="pt-5"><br>
					   	 			 	<p class="h1 text-justify text-center font-weight-bold">Qu'est-ce que la Resc ?</p><br>
							   			

								   			<p>La méthode <span style="font-weight:bold"> Résonance Energétique par Stimulation Cutanée </span> est une écoute cutanée subtile, entre 2 points mis en résonance par les mains du praticien, des messages de nature vibratoire et ondulatoire perçus dans l’espace liquidien et tissulaire du corps (paralléles théoriques avec les lois
											d’océanographie) afin d’en évaluer la fludité et de la rétablir  si nécessaire. Elle emprunte pour cela la cartographie des  trajets et les points décrits dans la culture chinoise. Elle accompagne le patient vers un ressenti d’apaisement et une rééquilibration énergétique  
											générale.
											</p>

					   				</div>
					   		</div>
			</div>
		</div><!--fin container-->
		
<footer>	
	<?php include('footer.php') ?>
</footer>

<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>

<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>










