<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>header</title>
	
</head>
<body>
	<header>
		<img src="image/0.png" class="img">
		<div class="text">
			<h1>My Shopping <br> Bag</h1>
		</div>
		<nav>
			<a href="index.php"><img src="image/logo.png" class="logo"></a>
			<div>
				<?php 
					$count=0;
					if (isset($_SESSION['cart'])) {
						$count=count($_SESSION['cart']);
					}
				?>
				<a href="mycart.php"><i class='bx bx-cart-download'></i><sup><?php echo $count; ?></sup></a>
			</div>
		</nav>
	</header>
</body>
</html>