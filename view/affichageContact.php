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

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<title>SITE RESC</title>

</head>

    <body style="background-color: #72C1F2">
                                                            <!--navbar-->
        <header>
            <?php include_once('header.php'); ?>
        </header>

        <div class="container-fluid"> 
                <div class="card my-5" style="background-color:#FFD3C9">   
                    <div  class="card-body">
                                    <h5 class="card-title text-center">Rappel de vos informations</h5>
                                                                <!--securité-->
                                    <p class="card-text"><b>Nom</b> : <?php echo htmlspecialchars($nom); ?></p>
                                    <p class="card-text"><b>Prenom</b> : <?php echo htmlspecialchars($prenom); ?></p>
                                    <p class="card-text"><b>Email</b> : <?php echo htmlspecialchars($email); ?></p>
                                    <p class="card-text"><b>Message</b> : <?php echo strip_tags($message); ?></p>
                                    <p class="card-text"><b>Nous avons bien reçu votre message !<b></p>

                                    <p class="card-text"><a href="../view/homepage.php" type="button" class="btn btn-primary mt-5">      << Retour à l'acceuil</a></p>
                    </div>
                </div><!--fin card-->
        </div> <!--fin container-->

    </body>
</html>