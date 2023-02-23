<?php
  require("common.php");
  if(!isset($_SESSION['email_id']))
  {
  	header('location:index.html');
  }
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Lifestyle Stores </title>
       
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>-->

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <link rel="stylesheet" type="text/css" href="style2.css">
	
	</head>
	<body>		
	 <?php
          include('header.php');
	 ?>
	<br><br><br>
		<div class="container">
		 <div class="row">
		  <div class="col-xs-12">
		 		<h1> Change Password </h1>
		        <form class="form-group" method="POST" action="settings_script.php">
		        	  	
		        	<input type="password" name="opwd" id="opwd" class="form-control" placeholder="Old Password" Required><br>
		        	<input type="password" name="npwd" id="npwd" class="form-control" placeholder="New Password" Required><br>
		        	<input type="password" name="rpwd" id="rpwd" class="form-control" placeholder="Re-type New Password" Required><br>
		        	<button class="btn btn-primary">Change</button>
		        </form>
		    </div>
		 	</div>
		 	</div>
	<?php
        include('footer.php');
	?>

</body>
</html>