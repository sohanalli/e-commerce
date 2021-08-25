<?php
    require './includes/common.php';
    
    if(!isset($_SESSION["email_id"])){
        header("location: login.php");
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

            
            $user_id = $_SESSION["id"];
            $query = "SELECT p.id, p.name, p.price FROM items p INNER JOIN users_items up ON up.item_id = p.id WHERE up.user_id = '$user_id' AND up.status = 'Added to cart'";

            $result = mysqli_query($conn, $query) or die(mysqli_error($conn));

            if(mysqli_num_rows($result) == 0){
                echo '<h4 class="container panel-margin">Add products to cart first. Goto <a href="products.php">Products</a> page.</h4>';
            }else{
                $total = 0;
        ?>
		<div class="table-responsive" style="margin:100px 150px">
			<table class="table table-striped">
				<tbody>
                	
                	<?php while($row = mysqli_fetch_array($result)){ ?>
                <tr>
                    <td><?php echo $row["id"] ?></td>
                    <td><?php echo $row["name"] ?></td>
                    <td><?php $total += $row["price"]; echo $row["price"] ?></td>
                    <td><a href="cart-remove.php?id=<?php echo $row["id"]; ?>">Remove</a></td>
                </tr>
                <?php
                    }
                ?>
                <tr>
                    <td></td>
                    <td></td>
                    <td>Total: <i class="fa fa-rupee"></i> <?php echo $total; ?></td>
                    <td><a href="success.php" class="btn btn-primary">Confirm Order</a></td>
                </tr>
                </tbody>
      		</table>
      	</div>
    </div>
		
		 <?php
            }
            require './includes/footer.php';
        ?>
	</body>





</html>