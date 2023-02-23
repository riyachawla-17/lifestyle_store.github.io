<!DOCTYPE html>
<html lang="en">
	<head>
		<!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Settings </title>
       
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
                   
 	   <div class="navbar navbar-inverse navbar-fixed-top">
 <div class="container">
 <div class="navbar-header">
 <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
 <span class="icon-bar"></span>
 <span class="icon-bar"></span>
 <span class="icon-bar"></span> 
 </button>
 <a class="navbar-brand" href="index.html">Lifestyle Store</a>
 </div>
 <div class="collapse navbar-collapse" id="myNavbar">
 <ul class="nav navbar-nav navbar-right">
 <?php
 if (isset($_SESSION['email_id'])) {
 ?>

 <li><a href = "cart.php"><span class = "glyphicon glyphicon-shopping-cart"></span> Cart </a></li>
 <li><a href = "settings.php"><span class = "glyphicon glyphicon-user"></span> 
Settings</a></li>
 <li><a href = "logout.php"><span class = "glyphicon glyphicon-log-in"></span> Logout</a></li>
 <?php
 } else {
 ?>
 <li><a href="signup.php"><span class="glyphicon glyphicon-user"></span> 
Sign Up</a></li>
 <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> 
Login</a></li>
<li><a href="aboutUs.php"><span class="glyphicon glyphicon-tasks"></span> 
About Us</a></li>
<li><a href="contactUs.php"><span class="glyphicon glyphicon-phone"></span> 
Contact Us</a></li>
 <?php
 }
 ?>
 </ul>
 </div>
 </div>
</div>

	</body>
</html>