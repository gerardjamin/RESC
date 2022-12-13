<?php if(session_id() == "") session_start()?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

    	<!-- Required meta tags -->
    	<meta charset="utf-8">
    	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

  		<script>function myFunction() {
  			document.location.replace('../view/calendar.php');
  		}
  	    </script>
	   <title>SITE RESC</title>
</head>
	<body style="background-color: #72C1F2" onLoad="$('#myModal').modal('show');">
		<div class="container">
			
			 		<!-- Trigger the modal with a button -->
					<!--<button class=" mt-4" data-toggle="modal" data-target="#myModal">Notification</button>-->

				<!-- Modal -->
				<div id="myModal" class="modal fade" role="dialog">
				  <div class="modal-dialog">

				    <!-- Modal content-->
				    <div class="modal-content">
				      <div class="modal-header">
				        <button type="button" class="close" data-dismiss="modal">&times;</button>
				        <h4 class="modal-title"></h4>
				      </div>
				      <div class="modal-body">
				        <p>Votre demande a bien été prise en compte !</p>
				      </div>
				      <div class="modal-footer">
				        <button type="button" onclick="myFunction()" class="btn btn-default" data-dismiss="modal">Close</button>
				      </div>
				    </div>
				  </div>
				</div>
		</div>		             									
	</body>
</html>
 



