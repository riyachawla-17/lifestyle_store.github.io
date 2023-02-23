<?php
	require 'common.php';
?>
<!DOCTYPE html>
<html>
	<head>
		<title>LifeStyle Stores</title>
		<!-- link to Bootstrap minified css-->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!-- link to Jquery minified-->
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
		<!-- link to Bootstrap JS -->
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
		<!-- link to fontawesome CSS-->
		<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		<!-- link to external CSS -->
		<link rel="stylesheet" type="text/css" href="style2.css">
	</head>
	<body>
		<?php
			require 'header.php';
			require 'check-if-added.php';
		?>
		<div class="container panel-margin">
			<div class="jumbotron">
				<h1>Welcome to our LifeStyle Store!</h1>
				<p>We have the best cameras, watches and shirts for you. No need to hunt
					around, we have all in one place.</p>
			</div>
			<div class="row text-center">
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="6.jpg" alt="camera">
						<div class="caption">
							<h3>Canon EOS</h3>
							<p>Price: <i class="fa fa-rupee"></i> 36,000 </p>
								<?php if (!isset($_SESSION['email_id'])) { ?>
								<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
								<?php
								} else {
								//We have created a function to check whether this particular product is added to cart or not.
								if (check_if_added_to_cart(1)) { //This is same as if(check_if_added_to_cart != 0)
								echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
								} else {
								?>
								<a href="cart-add.php?id=1"  name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
								<?php
								}
								}
								?>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="2.jpg" alt="camera">
						<div class="caption">
							<h3>Nikon DSLR</h3>
							<p>Price: <i class="fa fa-rupee"></i> 40,000 </p>
							<?php if(!isset($_SESSION["email_id"])){ ?>
							<a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a>
							<?php }else{ 
								if(check_if_added_to_cart(2)){
									echo '<a href="#" class="btn btn-success" disabled>Added to cart</a>';
								 }else{ ?>
										<a href="cart-add.php?id=2" name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
									<?php }
								} ?>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="3.jpg" alt="camera">
						<div class="caption">
							<h3>Sony DSLR</h3>
							<p>Price: <i class="fa fa-rupee"></i> 45,000 </p>
							<?php if (!isset($_SESSION['email_id'])) { ?>
								<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
								<?php
								} else {
								//We have created a function to check whether this particular product is added to cart or not.
								if (check_if_added_to_cart(3)) { //This is same as if(check_if_added_to_cart != 0)
								echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
								} else {
								?>
								<a href="cart-add.php?id=3"  name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
								<?php
								}
								}
								?>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="4.jpg" alt="camera">
						<div class="caption">
							<h3>Olympus DSLR</h3>
							<p>Price: <i class="fa fa-rupee"></i> 45,000 </p>
							<?php if (!isset($_SESSION['email_id'])) { ?>
								<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
								<?php
								} else {
								//We have created a function to check whether this particular product is added to cart or not.
								if (check_if_added_to_cart(4)) { //This is same as if(check_if_added_to_cart != 0)
								echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
								} else {
								?>
								<a href="cart-add.php?id=4"  name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
								<?php
								}
								}
								?>
						</div>
					</div>
				</div>
			</div>
			<div class="row text-center">
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="19.jpg" alt="watch">
						<div class="caption">
							<h3>Titan Model #301</h3>
							<p>Price: <i class="fa fa-rupee"></i> 13,000 </p>
							<?php if (!isset($_SESSION['email_id'])) { ?>
								<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
								<?php
								} else {
								//We have created a function to check whether this particular product is added to cart or not.
								if (check_if_added_to_cart(5)) { //This is same as if(check_if_added_to_cart != 0)
								echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
								} else {
								?>
								<a href="cart-add.php?id=5"  name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
								<?php
								}
								}
								?>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="20.jpg" alt="watch">
						<div class="caption">
							<h3>Titan Model #201 </h3>
							<p>Price: <i class="fa fa-rupee"></i> 3000 </p>
							<?php if (!isset($_SESSION['email_id'])) { ?>
								<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
								<?php
								} else {
								//We have created a function to check whether this particular product is added to cart or not.
								if (check_if_added_to_cart(6)) { //This is same as if(check_if_added_to_cart != 0)
								echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
								} else {
								?>
								<a href="cart-add.php?id=6"  name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
								<?php
								}
								}
								?>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="18.jpg" alt="watch">
						<div class="caption">
							<h3>HMT Milan</h3>
							<p>Price: <i class="fa fa-rupee"></i> 8000 </p>
							<?php if (!isset($_SESSION['email_id'])) { ?>
								<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
								<?php
								} else {
								//We have created a function to check whether this particular product is added to cart or not.
								if (check_if_added_to_cart(7)) { //This is same as if(check_if_added_to_cart != 0)
								echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
								} else {
								?>
								<a href="cart-add.php?id=7"  name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
								<?php
								}
								}
								?>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="10.jpg" alt="watch">
						<div class="caption">
							<h3>Faber Luba #111</h3>
							<p>Price: <i class="fa fa-rupee"></i> 18,000 </p>
							<?php if (!isset($_SESSION['email_id'])) { ?>
								<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
								<?php
								} else {
								//We have created a function to check whether this particular product is added to cart or not.
								if (check_if_added_to_cart(8)) { //This is same as if(check_if_added_to_cart != 0)
								echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
								} else {
								?>
								<a href="cart-add.php?id=8"  name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
								<?php
								}
								}
								?>
						</div>
					</div>
				</div>
			</div>
			<div class="row text-center">
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="22.jpg" alt="shirt">
						<div class="caption">
							<h3>H&W</h3>
							<p>Price: <i class="fa fa-rupee"></i> 800</p>
							<?php if (!isset($_SESSION['email_id'])) { ?>
								<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
								<?php
								} else {
								//We have created a function to check whether this particular product is added to cart or not.
								if (check_if_added_to_cart(9)) { //This is same as if(check_if_added_to_cart != 0)
								echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
								} else {
								?>
								<a href="cart-add.php?id=9"  name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
								<?php
								}
								}
								?>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="23.jpg" alt="shirt">
						<div class="caption">
							<h3>Luis Phil</h3>
							<p>Price: <i class="fa fa-rupee"></i> 1000 </p>
							<?php if (!isset($_SESSION['email_id'])) { ?>
								<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
								<?php
								} else {
								//We have created a function to check whether this particular product is added to cart or not.
								if (check_if_added_to_cart(10)) { //This is same as if(check_if_added_to_cart != 0)
								echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
								} else {
								?>
								<a href="cart-add.php?id=10"  name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
								<?php
								}
								}
								?>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="24.jpg" alt="shirt">
						<div class="caption">
							<h3>John Zok</h3>
							<p>Price: <i class="fa fa-rupee"></i> 1500 </p>
							<?php if (!isset($_SESSION['email_id'])) { ?>
								<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
								<?php
								} else {
								//We have created a function to check whether this particular product is added to cart or not.
								if (check_if_added_to_cart(11)) { //This is same as if(check_if_added_to_cart != 0)
								echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
								} else {
								?>
								<a href="cart-add.php?id=11"  name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
								<?php
								}
								}
								?>
						</div>
					</div>
				</div>
				<div class="col-md-3 col-sm-6">
					<div class="thumbnail">
						<img src="25.jpg" alt="shirt">
						<div class="caption">
							<h3>Jhalsani</h3>
							<p>Price: <i class="fa fa-rupee"></i> 1300</p>
							<?php if (!isset($_SESSION['email_id'])) { ?>
								<p><a href="login.php" role="button" class="btn btn-primary btn-block">Buy Now</a></p>
								<?php
								} else {
								//We have created a function to check whether this particular product is added to cart or not.
								if (check_if_added_to_cart(12)) { //This is same as if(check_if_added_to_cart != 0)
								echo '<a href="#" class="btn btn-block btn-success" disabled>Added to cart</a>';
								} else {
								?>
								<a href="cart-add.php?id=12"  name="add" value="add" class="btn btn-block btn-primary">Add to cart</a>
								<?php
								}
								}
								?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<br>
		<br>
		<br>
		<?php
			require 'footer.php';
		?>
	</body>
</html>