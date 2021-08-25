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
		
		<div id="banner_image">
			<div class="container">
				<div id="banner_content">
					<h1>We sell lifestyle.</h1>
					<p>Flat 40% OFF on premium brands</p>
					<br>
					<a class ="btn btn-danger btn-lg active" href="products.php">Shop Now</a>
				</div>
			</div>
		</div>
		<img src="" alt=""/>
		<?php 
			require './includes/footer.php';
		?>
	</body>
</html>