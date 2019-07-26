<?php
$user_id=11;
$img = '../../Upload/images/';
$con=mysqli_connect("localhost","root","");
$dbSelect = mysqli_select_db($con,"shopping");
// $sql = "select * from cart where user-id ='$user_id'";
$sql = "SELECT * FROM `cart` WHERE user_id = '$user_id'";
$result = mysqli_query($con,$sql);
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style/cart.css">
	<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
</head>
<body>
	<div class="cart-titel" style="position: fixed; z-index: 10; background: white;"><h1>Shopping cart</h1></div>
	<div class="cart-titel"><h1></h1></div>
	<div class="cart-body">
		<div class="left-part">
		<?php
			while ( $var = mysqli_fetch_array($result)) {
				$product_id = $var['product_id'];
				$user_id = $var['user_id'];
				$cart_amount = $var['cart_amount'];
				$sql2 = "SELECT * FROM `product` WHERE product_id = '$product_id'";
				$result2 = mysqli_query($con,$sql2);
				while ( $var2 = mysqli_fetch_array($result2)) {
					$product_url = $var2['product_url'];
					$product_name  = $var2['product_name'];
?>

			<div class="cart-item">
				<div class="cart-pick"><img src="<?php echo $img.$product_url;?>"></div>
				<div class="cart-details"><?php echo $product_name;?></div>
				<div class="cart-limit">
					<div class="cart-cont">
						<!-- Script Will be addd here -->
						<div class="add-min"><input id="add-min-c-number" type="number" name="cart-number" value="1"></div>
					</div>
					<div class="cart-bil">
						<center>
							<i>&#2547;</i>200
						</center>
					</div>
				</div>
				<div class="cart-bill">
					<div class="c-mark">
						<center>
							<!-- mark -->
							Select <input type="checkbox" name="c_mark" value="approve">
						</center>
					</div>
					<div class="c-remove">
						<center>
							<button id="c-r-b">Remove</button>
						</center>
					</div>
					<div class="c-price">
						<center>
							<i>&#2547;</i>price
						</center>
					</div>
				</div>
			</div>

<?php } } ?>
		</div>
		<div class="right-part">
			<div class="c-total">
				<div class="c-section">Subtotal</div>
				<div class="c-section">Shipping</div>
				<div class="c-section">Taxes (6%)</div>
				<div class="c-section">Total</div>
				<div class="">submit</div>
			</div>
		</div>
	</div>
</body>
</html>

