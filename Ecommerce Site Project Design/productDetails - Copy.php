<?php
$img = '../../Upload/images/';
if (isset($_GET['pid'])  && isset($_GET['pur'])) {
	$pid = $_GET['pid'];
	// $uid = $_GET['uid'];
	$purl = $_GET['pur'];
	// echo $pid."<br>";
	 // echo $purl;
}
?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="style/productDetails.css">
	<script type="text/javascript" src="js/productShow.js"></script>
</head>
<body>
	<?php include("hedder.html");?>
	<div class="containt">
		<div class="img-zoom-container">
			<div class="viewProduct">
				<img id="myimage" src="<?php echo $img.$purl;?>" width="210" height="200" style="float: left;">
			</div>
			<div id="myresult" class="img-zoom-result"></div>
		</div>
		<script>
			// Initiate zoom effect:
			imageZoom("myimage", "myresult");
		</script>
	</div>
	<div class="futterPart"><?php include("futter.html");?></div>
</body>
</html>

<!-- ../Ecommerce Site Project Design/resorce/pic/plain-black-t-shirt-7-cool-hd-wallpaper.jpg -->