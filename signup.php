 <?php
      require("common.php");
  ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>SignUp Page</title>
       
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
           include("header.php");
        ?>
	<br><br><br>
	<div class="container">
	<div class="box">
	  <div class="image">
        <img src="signup1.jpg">
      </div>
	</div>
	<div class="box">
	  <div class = "text">
		<div class="col-md-12">
		 		<h1> Sign Up </h1>
				<br>
				<br>
		        <form class=" form-group" method="POST" action="signup_script.php">
		        	<input type="name" name="name" id="input" class="form-control" required="required" placeholder="Name"><br>
		        	<input type="email" name="email" id="input" class="form-control" required="required" placeholder="Email"><br>
		        	<input type="password" name="password" id="input" class="form-control" required="required" placeholder="Password"><br>
		        	  	<input type="Contact" name="contact" id="input" class="form-control" required="required" placeholder="Contact"><br>
                       	<input type="text" name="city" id="input" class="form-control" required="required" placeholder="City"><br>
                       	  	<input type="text" name="address" id="input" class="form-control" required="required" placeholder="Address"><br>
		        	<center> <button class="btn btn-primary">Submit</button> </center>
		        </form>
		 	</div>
	  </div>
	</div>
	</div>
		 	 <?php
           include("footer.php");
        ?>
	</body>
</html>