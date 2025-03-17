
<?php 
session_start();					
 ?>
<style type="text/css">
	<?php 
	include('style.css');
		
?>
</style>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<title>cart</title>
	<style type="text/css">
		
	</style>
</head>
<body>
	<div class="wraper">
		<?php 
			include('header.php');
				
		?>
	<div class="container">
		
		<form action="manage_cart.php" method="POST">
			
				<img src="image/1.png" name="img" class="card-img">
				<p class="card-title"> Banquets golden cup</p>
				<h4 class="card-text">Price : 300</h4>
				<button type="submit" name="btn" class="btn">add to cart</button>
				<input type="hidden" name="Item_Name" value="Banquets golden cup">
				<input type="hidden" name="Price" value="300">
			
		</form>
		
		<form  action="manage_cart.php" method="POST">
			
				<img src="image/2.png">
				<p>Coffee bristol</p>
				<h4>Price : 400</h4>
				<button type="submit" name="btn" >add to cart</button>
				<input type="hidden" name="Item_Name" value="Coffee bristol">
				<input type="hidden" name="Price" value="400">
			
		</form>
		<form action="manage_cart.php" method="POST">
			
				<img src="image/3.png">
				<p>Coffee bio fairtrade</p>
				<h4>Price : 200</h4>
				<button type="submit" name="btn" >add to cart</button>
				<input type="hidden" name="Item_Name" value="Coffee bio fairtrade">
				<input type="hidden" name="Price" value="200">
			
		</form>
		<form action="manage_cart.php" method="POST">
			
				<img src="image/5.png">
				<p>Capuchino moro bar</p>
				<h4>Price : 300</h4>
				<button type="submit" name="btn">add to cart</button>
				<input type="hidden" name="Item_Name" value="Capuchino moro bar">
				<input type="hidden" name="Price" value="300">
			
		</form>
		<form action="manage_cart.php" method="POST">
			
				<img src="image/6.png">
				<p>Gluten Free</p>
				<h4>Price : 330</h4>
				<button type="submit" name="btn">add to cart</button>
				<input type="hidden" name="Item_Name" value="Gluten Free">
				<input type="hidden" name="Price" value="330">
			
		</form>
		<form action="manage_cart.php" method="POST">
			
				<img src="image/7.png">
				<p>Espresso gold</p>
				<h4>Price : 250</h4>
				<button type="submit" name="btn">add to cart</button>
				<input type="hidden" name="Item_Name" value="Espresso gold">
				<input type="hidden" name="Price" value="250">
			
		</form>
		<form action="manage_cart.php" method="POST">
			
				<img src="image/9.png">
				<p>chocolate coffee</p>
				<h4>Price : 150</h4>
				<button type="submit" name="btn">add to cart</button>
				<input type="hidden" name="Item_Name" value="chocolate coffee">
				<input type="hidden" name="Price" value="150">
			
		</form>
		<form action="manage_cart.php" method="POST">
			
				<img src="image/8.png">
				<p>cold coffee</p>
				<h4>Price : $250/-</h4>
				<button type="submit" name="btn">add to cart</button>
				<input type="hidden" name="Item_Name" value="cold coffee">
				<input type="hidden" name="Price" value="250">
			
		</form>
		<form action="manage_cart.php" method="POST">
			
				<img src="image/10.png">
				<p>ice coffee</p>
				<h4>Price : 180</h4>
				<button type="submit" name="btn">add to cart</button>
				<input type="hidden" name="Item_Name" value="ice coffee">
				<input type="hidden" name="Price" value="180">
			
		</form>
    </div>
    </div>
</body>
</html>