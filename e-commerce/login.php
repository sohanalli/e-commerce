<?php
	require './includes/common.php';
	if (isset($_SESSION['email_id'])) { 
		header('location: products.php');
}
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
			require './includes/header.php';
		?>
		
		<div class="container">
			<div class="row_style">
				<div class="panel panel-primary">
					<div class="panel-heading">
						<h4>LOGIN</h4>
					</div>
					<div class="panel-body">
						<p class="text-warning">Login to make a purchase</p>
						<form action="login_submit.php" method="post">
							<div class="form-group">
								<input type="text" class="form-control" name="email" placeholder="Email" required>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="password" placeholder="Password" required>
							</div>
							<button type="submit" class="btn btn-primary">Login</button>
						</form>
						

					</div>
					<div class="panel-footer">
						<p>Don't have an account?<a href="signup.php">Register</a></p>
					</div>
				</div>
			</div>
		</div>
		<?php 
			require './includes/footer.php';
		?>
	</body>

</html>