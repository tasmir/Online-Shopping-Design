<?php
$img = '../../Upload/images/';
$product_name  = "Product Name"; //Demo
$product_url = ""; //Demo
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style/cart.css">
</head>
<body>
	<div class="cart-titel" style="position: fixed; z-index: 10; background: white;"><h1>Shopping cart</h1></div>
	<div class="cart-titel"><h1></h1></div>
	<div class="cart-body">
		<div class="left-part">
		<?php
		$x=1;
			while ( $x<10) {
				$product_id = $x; //Demo
				$rate = (125*$x)+11; //Demo
				$price = $rate; //Demo
?>

			<div class="cart-item">
				<div class="cart-pick"><img src="<?php echo $img.$product_url;?>"></div>
				<div class="cart-details"><?php echo $product_name;?></div>
				<div class="cart-limit">
					<div class="cart-cont">
						<div class="add-min">
						<center>
							<button>+</button> <!-- Quantity Add -->
							<div class="quantity">1</div>	<!-- Quantity Number -->
							<button>-</button>	<!-- Quantity Sub -->
						</center>
						</div>
					</div>
					<div class="cart-bil">
						<center>
							<i>&#2547;</i><?php echo $rate; ?>
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
							<i>&#2547;</i><?php echo $price; ?>
						</center>
					</div>
				</div>
			</div>

<?php $x=$x+1;} ?>
		</div>
		<div class="right-part">
			<div class="c-total">
				<div class="c-section">Shopping </div> <!-- Total Shopping Selected -->
				<div class="c-section">Bill </div>  <!-- Total Bill Of Selected  Product-->
				<div class="c-section">Taxes (6%)</div> <!-- Persentage Of Total Prige -->
				<div class="c-section">Total </div> <!-- Sum Of All Cost -->
				<div class="">submit</div>
			</div>
		</div>
	</div>
</body>
</html>

<!--  -->