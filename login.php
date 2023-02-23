<?php
   require("common.php");
?>
<!DOCTYPE html>
<html>
 <head>
	<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Login Page</title>
       
        <!--<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>-->

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

        <link rel="stylesheet" type="text/css" href="login_style.css">
	
	</head>
	<body>		
		 <?php
           include("header.php");
        ?>
<br><br><br>
		<div class="container">
		 <div class="row">
		  <div class="col-xs-12">
		 <div class="panel panel-primary">
		 	<div class="panel-heading">
		 		<h1> LOGIN </h1>
		 	</div>
		 	
             <div class="panel-body">
             	<div class="container">
             		<div class="row">
             			<div class="col-xs-11">
             				<p class="text-warning"> <i> Login to make a purchase </i> </p>
		        <form class=" form-group" method="POST" action="login_submit.php">
		        	<input type="email" name="email" id="email" class="form-control" required="required" placeholder="Email"><br>
		        	<input type="password" name="password" id="password" class="form-control" required="required" placeholder="Password"><br>
		        	<button class="btn btn-primary">Login</button>
		        </form>
		    </div>
		</div>
	</div>
		 	</div>
		 	<div class="panel-footer">
		 		Don't have an account? <a href="signup.php"><b>Register</b></a>
		 	</div>

		</div>
	    </div>
		</div>
	</div>

 <?php
   include("footer.php");
 ?>
	</body>
</html>