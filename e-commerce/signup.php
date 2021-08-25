<?php
	if(isset($_SESSION["id"])){
		header("location: products.php");
	}
	require "./includes/common.php";
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<link rel="stylesheet" type="text/css" href="bootstrap/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="style.css">
		<script type="text/javascript" src="bootstrap/js/jquery-3.6.0.min.js"></script>
		<script type="text/javascript" src="bootstrap/js/bootstrap.min.js"></script>
	</head>
	
	<body>
		<?php
			require "./includes/header.php";
		?>
		<div class="container">
			<div class="row_style">
				<h2>SIGN UP</h2>
				<form method="post" action="signup_script.php">
					<div class="form-group">
						<input type="text" class="form-control" name="name" placeholder="Name">
					</div>
					<div class="form-group">
						<input type="email" class="form-control" name="email" placeholder="Email">
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="password" placeholder="Password">
					</div>
					<div class="form-group">
						<input type="tel" class="form-control" name="contact" placeholder="Contact">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="city" placeholder="City">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="address" placeholder="Address">
					</div>
					<button type="submit" class="btn btn-primary">Submit</button>
				</form>
						
			</div>
		</div>
		<?php
			require "./includes/footer.php";
		?>
	</body>

</html>