<?php
 require("common.php");

 if(!isset($_SESSION['email_id']))
 {
 	header('location:index.html');
 }
?>
<!DOCTYPE html>
<html>
	<head>
      <!-- Required meta tags -->
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<title>Successs</title>
       
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
                <header>
                        <?php
                        include('header.php');
                        ?>
                </header>
<br>
<br><br>
        <section>
        <?php

           $user_id = $_SESSION['id'];
           $query = "SELECT item_id FROM users_items WHERE user_id = '$user_id'";
           $result = mysqli_query($con,$query) or die(mysqli_error($con));

           while ($row = mysqli_fetch_array($result)) {
           	$item_id = $row['item_id'];
           	$query1 = "UPDATE users_items SET status = 'Confirmed' WHERE item_id = '$item_id'";
           	$result1 = mysqli_query($con,$query1) or die(mysqli_error($con));
           }
        ?>

        <div class="container panel-margin">
        	<div class="alert alert-success">
        		Your Order is Confirmed. Thank you for shopping with us.
        		<a href="products.php"> Click here </a> to purchase any other item.
        	</div>
        </div>
        </section>

        <footer>
        <?php
        include('footer.php');
        ?>
        </footer>
	</body>
	</html>