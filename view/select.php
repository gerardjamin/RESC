<?php require_once('../modele/traitement.php'); ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!--framework bootstrap 5.. -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>

	<title>select</title>

</head>

<body>
       
	<div class="dropdown">
  <button type="button" class="btn btn-primary dropdown-toggle" data-bs-toggle="dropdown">
    Dropdown button
  </button>
  <ul class="dropdown-menu">
      <?php while($row = $query->fetch(PDO::FETCH_ASSOC)){ ?>
      <li><a class="dropdown-item" href="#"><?php echo $row['nom']." ".$row['prenom'];?></a></li>
      <?php } ?>
  </ul>
</div>

</body>
</html>