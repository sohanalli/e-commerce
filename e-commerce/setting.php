<?php
	require './includes/common.php';
	
	if(!isset($_SESSION["email_id"])){
		header("location: index.php");
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
				<h2>Change Password</h2>
				<form>
					<div class="form-group">
						<input type="password" class="form-control" name="password" placeholder="Old Password" required>
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="password" placeholder="New Password" required>
					</div>
					<div class="form-group">
						<input type="password" class="form-control" name="password" placeholder="Re-type New Password" required>
					</div>
					<button class="btn btn-primary">Change</button>
				</form>
						
			</div>
		</div>
		
		<?php
			require './includes/footer.php';
		?>
	</body>





</html>