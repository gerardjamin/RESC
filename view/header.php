<?php if(session_id() == "") session_start()?>
<?php if( $_SESSION['AUTORISATION'] == 2){ ?>

											<!--navbar patient-->
<div class="container-fluid">
	    <div class="row">
	        <nav class="col navbar navbar-expand-lg  navbar-light" style="background-color:#FFD3C9">
	        	<a class="navbar-brand" href="https://resc.fr/" TARGET="_blank">
	        	<!--Icone svg-->
		        	<svg width="123" height="32" viewBox="0 0 123 32" fill="none" xmlns="http://www.w3.org/2000/svg">		
							<g clip-path="url(#clip0_57_76)">
							<path d="M55.8792 3.60003H61.0951C62.9085 3.60003 64.2312 4.0267 65.0632 4.88003C65.8952 5.71203 66.3112 7.0027 66.3112 8.75203V10.128C66.3112 12.4533 65.5432 13.9253 64.0072 14.544V14.608C64.8605 14.864 65.4579 15.3867 65.7992 16.176C66.1619 16.9653 66.3432 18.0213 66.3432 19.344V23.28C66.3432 23.92 66.3645 24.4427 66.4072 24.848C66.4499 25.232 66.5565 25.616 66.7272 26H63.1432C63.0152 25.6373 62.9298 25.296 62.8871 24.976C62.8444 24.656 62.8232 24.08 62.8232 23.248V19.152C62.8232 18.128 62.6524 17.4133 62.3111 17.008C61.9911 16.6027 61.4259 16.4 60.6152 16.4H59.3992V26H55.8792V3.60003ZM60.6791 13.2C61.3831 13.2 61.9059 13.0187 62.2472 12.656C62.6099 12.2933 62.7911 11.6853 62.7911 10.832V9.10403C62.7911 8.29336 62.6419 7.7067 62.3432 7.34403C62.0659 6.98136 61.6178 6.80003 60.9991 6.80003H59.3992V13.2H60.6791ZM68.3054 3.60003H77.9055V6.80003H71.8255V12.72H76.6575V15.92H71.8255V22.8H77.9055V26H68.3054V3.60003ZM84.0889 26.32C82.3822 26.32 81.0916 25.84 80.217 24.88C79.3423 23.8987 78.9049 22.5013 78.9049 20.688V19.408H82.233V20.944C82.233 22.3947 82.8409 23.12 84.0569 23.12C84.6542 23.12 85.1023 22.9493 85.401 22.608C85.721 22.2453 85.8809 21.6693 85.8809 20.88C85.8809 19.9413 85.6675 19.12 85.2409 18.416C84.8142 17.6907 84.025 16.8267 82.873 15.824C81.4223 14.544 80.409 13.392 79.833 12.368C79.257 11.3227 78.969 10.1493 78.969 8.84803C78.969 7.07736 79.417 5.71203 80.313 4.75203C81.209 3.7707 82.5103 3.28003 84.217 3.28003C85.9023 3.28003 87.1716 3.7707 88.025 4.75203C88.8996 5.71203 89.3369 7.0987 89.3369 8.91203V9.84003H86.009V8.68803C86.009 7.92003 85.8595 7.36536 85.5609 7.02403C85.2622 6.66136 84.825 6.48003 84.249 6.48003C83.0756 6.48003 82.4889 7.1947 82.4889 8.62403C82.4889 9.4347 82.7022 10.192 83.1289 10.896C83.5769 11.6 84.3769 12.4533 85.5289 13.456C87.0009 14.736 88.0143 15.8987 88.569 16.944C89.1236 17.9893 89.401 19.216 89.401 20.624C89.401 22.4587 88.9423 23.8667 88.025 24.848C87.129 25.8293 85.8169 26.32 84.0889 26.32ZM95.8992 26.32C94.2139 26.32 92.9231 25.84 92.0271 24.88C91.1524 23.92 90.7152 22.5653 90.7152 20.816V8.78403C90.7152 7.0347 91.1524 5.68003 92.0271 4.72003C92.9231 3.76003 94.2139 3.28003 95.8992 3.28003C97.5845 3.28003 98.8644 3.76003 99.7391 4.72003C100.635 5.68003 101.083 7.0347 101.083 8.78403V11.152H97.7552V8.56003C97.7552 7.17336 97.1685 6.48003 95.9952 6.48003C94.8219 6.48003 94.2351 7.17336 94.2351 8.56003V21.072C94.2351 22.4373 94.8219 23.12 95.9952 23.12C97.1685 23.12 97.7552 22.4373 97.7552 21.072V17.648H101.083V20.816C101.083 22.5653 100.635 23.92 99.7391 24.88C98.8644 25.84 97.5845 26.32 95.8992 26.32Z" fill="black"/>
							<path fill-rule="evenodd" clip-rule="evenodd" d="M15.8464 2.96289H8.58307e-06L6.67216 9.63504H22.5185L15.8464 2.96289ZM6.67215 9.63505V25.4814L0 18.8093V2.96289L6.67215 9.63505Z" fill="#CA33E2"/>
							<path fill-rule="evenodd" clip-rule="evenodd" d="M6.67215 25.4814H22.5186L15.8464 18.8093H0L6.67215 25.4814ZM15.8464 18.8093V2.96289L22.5186 9.63505V25.4814L15.8464 18.8093Z" fill="black"/>
							</g>
							<defs>
							<clipPath id="clip0_57_76">
							<rect width="123" height="32" fill="white"/>
							</clipPath>
							</defs>
							</svg> <!--Fin Icone-->					
		        </a>

				<button class="navbar-toggler btn-outline-primary" type="button" data-toggle="collapse" data-target="#navbarContent">
		        	<span class="navbar-toggler-icon"></span>
		        </button>
		        		
			          <div class="collapse navbar-collapse" id="navbarContent">
				            	<ul class="navbar-nav me-auto">
					              	<li class="nav-item">
					                <a class="nav-link active text-uppercase" href="homepage.php">Accueil<span class="sr-only">(current)</span></a>
					              	</li>
					              	<li class="nav-item">
					                <a class="nav-link text-uppercase" href="consultation.php">Consultation</a>
					              	</li>
					              	<li class="nav-item">	
					                <a class="nav-link text-uppercase" href="contact.php">Contact</a>
					              	</li>
					              	<?php if(isset($_SESSION['LOGGED_USER'])) { ?>
					              	</li>
					              	<li class="nav-item">	
					                <a class="nav-link text-uppercase" href="vue_planning_rendezvous_patient.php">Planning</a>
					              	</li>
					              	<?php } ?>

				            	</ul>
				            		
				            		<div class="container">
    				 					<span class="navbar-text text-primary">Bonjour <?= $_SESSION['prenom']." ".$_SESSION['nom'] ?> et bienvenue sur le site!</span>
  									</div>
				            		
				            		<a href="../index.php" type="button" class="btn btn-primary me-3" id="acces">Deconnexion</a>
				            		<a href="AccesMembre.php" type="button" class="btn btn-primary me-3" id="acces">Compte</a>
				            		<a href="CreationCompte.php" type="button" class="btn btn-primary" id="inscrire">S'inscrire</a>
			          </div>
			          
	        </nav><!--fin nav-->
	    </div><!--fin row-->
</div> <!--fin container fluide-->

<?php }elseif($_SESSION['AUTORISATION'] == 1){ ?>
								      <!--navbar administrateur-->
<div class="container-fluid">
	    <div class="row">
	        <nav class="col navbar navbar-expand-lg  navbar-light" style="background-color:#FFD3C9">
	        	<a class="navbar-brand" href="https://resc.fr/" TARGET="_blank">
	        	<!--Icone svg-->
		        	<svg width="123" height="32" viewBox="0 0 123 32" fill="none" xmlns="http://www.w3.org/2000/svg">		
							<g clip-path="url(#clip0_57_76)">
							<path d="M55.8792 3.60003H61.0951C62.9085 3.60003 64.2312 4.0267 65.0632 4.88003C65.8952 5.71203 66.3112 7.0027 66.3112 8.75203V10.128C66.3112 12.4533 65.5432 13.9253 64.0072 14.544V14.608C64.8605 14.864 65.4579 15.3867 65.7992 16.176C66.1619 16.9653 66.3432 18.0213 66.3432 19.344V23.28C66.3432 23.92 66.3645 24.4427 66.4072 24.848C66.4499 25.232 66.5565 25.616 66.7272 26H63.1432C63.0152 25.6373 62.9298 25.296 62.8871 24.976C62.8444 24.656 62.8232 24.08 62.8232 23.248V19.152C62.8232 18.128 62.6524 17.4133 62.3111 17.008C61.9911 16.6027 61.4259 16.4 60.6152 16.4H59.3992V26H55.8792V3.60003ZM60.6791 13.2C61.3831 13.2 61.9059 13.0187 62.2472 12.656C62.6099 12.2933 62.7911 11.6853 62.7911 10.832V9.10403C62.7911 8.29336 62.6419 7.7067 62.3432 7.34403C62.0659 6.98136 61.6178 6.80003 60.9991 6.80003H59.3992V13.2H60.6791ZM68.3054 3.60003H77.9055V6.80003H71.8255V12.72H76.6575V15.92H71.8255V22.8H77.9055V26H68.3054V3.60003ZM84.0889 26.32C82.3822 26.32 81.0916 25.84 80.217 24.88C79.3423 23.8987 78.9049 22.5013 78.9049 20.688V19.408H82.233V20.944C82.233 22.3947 82.8409 23.12 84.0569 23.12C84.6542 23.12 85.1023 22.9493 85.401 22.608C85.721 22.2453 85.8809 21.6693 85.8809 20.88C85.8809 19.9413 85.6675 19.12 85.2409 18.416C84.8142 17.6907 84.025 16.8267 82.873 15.824C81.4223 14.544 80.409 13.392 79.833 12.368C79.257 11.3227 78.969 10.1493 78.969 8.84803C78.969 7.07736 79.417 5.71203 80.313 4.75203C81.209 3.7707 82.5103 3.28003 84.217 3.28003C85.9023 3.28003 87.1716 3.7707 88.025 4.75203C88.8996 5.71203 89.3369 7.0987 89.3369 8.91203V9.84003H86.009V8.68803C86.009 7.92003 85.8595 7.36536 85.5609 7.02403C85.2622 6.66136 84.825 6.48003 84.249 6.48003C83.0756 6.48003 82.4889 7.1947 82.4889 8.62403C82.4889 9.4347 82.7022 10.192 83.1289 10.896C83.5769 11.6 84.3769 12.4533 85.5289 13.456C87.0009 14.736 88.0143 15.8987 88.569 16.944C89.1236 17.9893 89.401 19.216 89.401 20.624C89.401 22.4587 88.9423 23.8667 88.025 24.848C87.129 25.8293 85.8169 26.32 84.0889 26.32ZM95.8992 26.32C94.2139 26.32 92.9231 25.84 92.0271 24.88C91.1524 23.92 90.7152 22.5653 90.7152 20.816V8.78403C90.7152 7.0347 91.1524 5.68003 92.0271 4.72003C92.9231 3.76003 94.2139 3.28003 95.8992 3.28003C97.5845 3.28003 98.8644 3.76003 99.7391 4.72003C100.635 5.68003 101.083 7.0347 101.083 8.78403V11.152H97.7552V8.56003C97.7552 7.17336 97.1685 6.48003 95.9952 6.48003C94.8219 6.48003 94.2351 7.17336 94.2351 8.56003V21.072C94.2351 22.4373 94.8219 23.12 95.9952 23.12C97.1685 23.12 97.7552 22.4373 97.7552 21.072V17.648H101.083V20.816C101.083 22.5653 100.635 23.92 99.7391 24.88C98.8644 25.84 97.5845 26.32 95.8992 26.32Z" fill="black"/>
							<path fill-rule="evenodd" clip-rule="evenodd" d="M15.8464 2.96289H8.58307e-06L6.67216 9.63504H22.5185L15.8464 2.96289ZM6.67215 9.63505V25.4814L0 18.8093V2.96289L6.67215 9.63505Z" fill="#CA33E2"/>
							<path fill-rule="evenodd" clip-rule="evenodd" d="M6.67215 25.4814H22.5186L15.8464 18.8093H0L6.67215 25.4814ZM15.8464 18.8093V2.96289L22.5186 9.63505V25.4814L15.8464 18.8093Z" fill="black"/>
							</g>
							<defs>
							<clipPath id="clip0_57_76">
							<rect width="123" height="32" fill="white"/>
							</clipPath>
							</defs>
							</svg> <!--Fin Icone-->					
		        </a>

				<button class="navbar-toggler btn-outline-primary" type="button" data-toggle="collapse" data-target="#navbarContent">
		        	<span class="navbar-toggler-icon"></span>
		        </button>
		        		
			          <div class="collapse navbar-collapse" id="navbarContent">
				            	<ul class="navbar-nav me-auto">
					              	<li class="nav-item">
					                <a class="nav-link active text-uppercase" href="homepage.php">Accueil<span class="sr-only">(current)</span></a>
					              	</li>
					              	<li class="nav-item">
					                <a class="nav-link text-uppercase" href="consultation.php">Consultation</a>
					              	</li>
					              	<li class="nav-item">	
					                <a class="nav-link text-uppercase" href="contact.php">Contact</a>
					              	</li>
					              	<li class="nav-item">	
					                <a class="nav-link text-uppercase" href="calendar.php">Planning</a>
					              	</li>
					              	 <li class="nav-item dropdown">
								          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown">GESTION DES RDV</a>
								          <ul class="dropdown-menu" style="background-color:#FFD3C9">
								            <li><a class="dropdown-item" href="enregistrerRendezVous.php">Créer</a></li>
								            <li><a class="dropdown-item" href="modifierrendezvous.php">Modifier</a></li>
								            <li><a class="dropdown-item" href="annulerrendezvous.php">Annuler</a></li>
									      </ul>
								     </li>
				            	</ul>

				            		<div class="container-fluid">
    				 					<span class="navbar-text text-danger">Bonjour <?= $_SESSION['prenom']." ".$_SESSION['nom'] ?> et bienvenue sur le site!</span>
  									</div>
				            		
				            		<a href="../index.php" type="button" class="btn btn-primary me-3" id="acces">Deconnexion</a>
				            		<a href="QuestionMessageContact.php" type="button" class="btn btn-success me-3" id="inscrire">Messages</a>
				            		<a href="AccesMembre.php" type="button" class="btn btn-primary me-3" id="acces">Compte</a>
				            		<a href="CreationCompte.php" type="button" class="btn btn-primary" id="inscrire">S'inscrire</a>
			          </div>
			          
	        </nav><!--fin nav-->
	    </div><!--fin row-->
</div> <!--fin container fluide-->

<?php }else{ ?>
													<!--navbar internaute-->
<div class="container-fluid">
	    <div class="row">
	        <nav class="col navbar navbar-expand-lg  navbar-light" style="background-color:#FFD3C9">
	        	<a class="navbar-brand" href="https://resc.fr/" TARGET="_blank">
	        	<!--Icone svg-->
		        	<svg width="123" height="32" viewBox="0 0 123 32" fill="none" xmlns="http://www.w3.org/2000/svg">		
							<g clip-path="url(#clip0_57_76)">
							<path d="M55.8792 3.60003H61.0951C62.9085 3.60003 64.2312 4.0267 65.0632 4.88003C65.8952 5.71203 66.3112 7.0027 66.3112 8.75203V10.128C66.3112 12.4533 65.5432 13.9253 64.0072 14.544V14.608C64.8605 14.864 65.4579 15.3867 65.7992 16.176C66.1619 16.9653 66.3432 18.0213 66.3432 19.344V23.28C66.3432 23.92 66.3645 24.4427 66.4072 24.848C66.4499 25.232 66.5565 25.616 66.7272 26H63.1432C63.0152 25.6373 62.9298 25.296 62.8871 24.976C62.8444 24.656 62.8232 24.08 62.8232 23.248V19.152C62.8232 18.128 62.6524 17.4133 62.3111 17.008C61.9911 16.6027 61.4259 16.4 60.6152 16.4H59.3992V26H55.8792V3.60003ZM60.6791 13.2C61.3831 13.2 61.9059 13.0187 62.2472 12.656C62.6099 12.2933 62.7911 11.6853 62.7911 10.832V9.10403C62.7911 8.29336 62.6419 7.7067 62.3432 7.34403C62.0659 6.98136 61.6178 6.80003 60.9991 6.80003H59.3992V13.2H60.6791ZM68.3054 3.60003H77.9055V6.80003H71.8255V12.72H76.6575V15.92H71.8255V22.8H77.9055V26H68.3054V3.60003ZM84.0889 26.32C82.3822 26.32 81.0916 25.84 80.217 24.88C79.3423 23.8987 78.9049 22.5013 78.9049 20.688V19.408H82.233V20.944C82.233 22.3947 82.8409 23.12 84.0569 23.12C84.6542 23.12 85.1023 22.9493 85.401 22.608C85.721 22.2453 85.8809 21.6693 85.8809 20.88C85.8809 19.9413 85.6675 19.12 85.2409 18.416C84.8142 17.6907 84.025 16.8267 82.873 15.824C81.4223 14.544 80.409 13.392 79.833 12.368C79.257 11.3227 78.969 10.1493 78.969 8.84803C78.969 7.07736 79.417 5.71203 80.313 4.75203C81.209 3.7707 82.5103 3.28003 84.217 3.28003C85.9023 3.28003 87.1716 3.7707 88.025 4.75203C88.8996 5.71203 89.3369 7.0987 89.3369 8.91203V9.84003H86.009V8.68803C86.009 7.92003 85.8595 7.36536 85.5609 7.02403C85.2622 6.66136 84.825 6.48003 84.249 6.48003C83.0756 6.48003 82.4889 7.1947 82.4889 8.62403C82.4889 9.4347 82.7022 10.192 83.1289 10.896C83.5769 11.6 84.3769 12.4533 85.5289 13.456C87.0009 14.736 88.0143 15.8987 88.569 16.944C89.1236 17.9893 89.401 19.216 89.401 20.624C89.401 22.4587 88.9423 23.8667 88.025 24.848C87.129 25.8293 85.8169 26.32 84.0889 26.32ZM95.8992 26.32C94.2139 26.32 92.9231 25.84 92.0271 24.88C91.1524 23.92 90.7152 22.5653 90.7152 20.816V8.78403C90.7152 7.0347 91.1524 5.68003 92.0271 4.72003C92.9231 3.76003 94.2139 3.28003 95.8992 3.28003C97.5845 3.28003 98.8644 3.76003 99.7391 4.72003C100.635 5.68003 101.083 7.0347 101.083 8.78403V11.152H97.7552V8.56003C97.7552 7.17336 97.1685 6.48003 95.9952 6.48003C94.8219 6.48003 94.2351 7.17336 94.2351 8.56003V21.072C94.2351 22.4373 94.8219 23.12 95.9952 23.12C97.1685 23.12 97.7552 22.4373 97.7552 21.072V17.648H101.083V20.816C101.083 22.5653 100.635 23.92 99.7391 24.88C98.8644 25.84 97.5845 26.32 95.8992 26.32Z" fill="black"/>
							<path fill-rule="evenodd" clip-rule="evenodd" d="M15.8464 2.96289H8.58307e-06L6.67216 9.63504H22.5185L15.8464 2.96289ZM6.67215 9.63505V25.4814L0 18.8093V2.96289L6.67215 9.63505Z" fill="#CA33E2"/>
							<path fill-rule="evenodd" clip-rule="evenodd" d="M6.67215 25.4814H22.5186L15.8464 18.8093H0L6.67215 25.4814ZM15.8464 18.8093V2.96289L22.5186 9.63505V25.4814L15.8464 18.8093Z" fill="black"/>
							</g>
							<defs>
							<clipPath id="clip0_57_76">
							<rect width="123" height="32" fill="white"/>
							</clipPath>
							</defs>
							</svg> <!--Fin Icone-->					
		        </a>

				<button class="navbar-toggler btn-outline-primary" type="button" data-toggle="collapse" data-target="#navbarContent">
		        	<span class="navbar-toggler-icon"></span>
		        </button>
		        		
			          <div class="collapse navbar-collapse" id="navbarContent">
				            	<ul class="navbar-nav me-auto">
					              	<li class="nav-item">
					                <a class="nav-link active text-uppercase" href="homepage.php">Accueil<span class="sr-only">(current)</span></a>
					              	</li>
					              	<li class="nav-item">
					                <a class="nav-link text-uppercase" href="consultation.php">Consultation</a>
					              	</li>
					              	<li class="nav-item">	
					                <a class="nav-link text-uppercase" href="contact.php">Contact</a>
					              	</li>
				            	</ul>
				            		
				            		<a href="AccesMembre.php" type="button" class="btn btn-outline-primary text-dark me-2">Connection</a>
				            		<a href="CreationCompte.php" type="button" class="btn btn-primary">S'inscrire</a>
			          </div>
			          
	        </nav><!--fin nav-->
	    </div><!--fin row-->
</div> <!--fin container fluide-->


<?php } ?>

