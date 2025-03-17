
<?php 
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
	<link rel="stylesheet" type="text/css" href="style.css">
	<title>my cart</title>
</head>
<body>
	<div class="wraper">
		<?php 
			include('header.php');
				
		?>
	<div class="cart-container">
		<h1>my cart</h1>
		<table rules="all">
			<thead>
				<tr>
					<th>serial no</th>
					<th>Item Name</th>
					<th>Item Price</th>
					<th>quantity</th>
					<th>action</th>
				</tr>
			</thead>
			<tbody>
				<?php 
					$total=0;
					if (isset($_SESSION['cart'])) {
						foreach ($_SESSION['cart'] as $key => $value) {
							error_reporting(0);
						$total = $total+$value['Price'];	
							
				?>
				<tr>
					<td>1</td>
					<td><?php echo $value['Item_Name']; ?></td>
					<td><?php echo $value['Price']; ?></td>
					<td><input type="number" value="<?php echo $value['Quantity']; ?>" min="1"  name=""></td>
					<td>
						<form action="manage_cart.php" method="POST">
							<button name="remove_item" class="btn">remove</button>
							<input type="hidden" name="Item_Name" value="<?php echo $value['Item_Name']; ?>">
						</form>
					</td>
				</tr>		
				<?php 	

						}
					}
				
				?>
				<tr class="total">
					<td colspan="4"><h3>Amount Payable</h3></td>
					<td><h5><?php echo $total; ?></h5></td>
				</tr>
			</tbody>
		</table>
	</div>
</div>
</body>
</html>