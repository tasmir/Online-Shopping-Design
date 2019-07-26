<?php
if (isset($_GET['id'])) {
	$id = $_GET['id'];
	if($id == 'x'){
		$link = "productList.php";
	}
}
?>
<!DOCTYPE html>
<html>
<head>
	<title>SHART || WElcome To SHART BAJAR</title>
	<!-- <meta name="viewport" content="width=device-width, initial-scale=1"> -->
	<link rel="stylesheet" type="text/css" href="style/style.css"/>
	<link rel="stylesheet" type="text/css" href="style/slider.css"/>
	

	<link rel="stylesheet" type="text/css" href="style/test.css"/>
	<!-- <link rel="stylesheet" type="text/css" href="../Plagins/css/awesome.min.css"> -->
	<!-- <link rel="icon" href="img/" type="image/jpg" size="height:16px; width:16px;"/>	 -->

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

	<script type="text/javascript" src="js/sc.js"></script>
	<style>
	./*mySlides*/ {display:none}
	.w3-left, .w3-right, .w3-badge {cursor:pointer}
	.w3-badge {height:13px;width:13px;padding:0}
</style>
</head>
<body>
	<form action="index.php" method="_GET">
		
		<!-- <div class="BodyPart"> -->
			<?php include("hedder.html");?>

			<div class="BodyPartSlider">
				<div class="BodyPartSliderLeft"> <!--Top Product-->
					<div class="BodyPartSliderLeftImg">
						<!-- Start -->
						<div class="slideshow-container">

							<div class="mySlides fade">
								<!-- <div class="numbertext">1 / 3</div> -->
								<a href="#"><img src="resorce/pic/img_parallax.jpg"></a>
								<!-- <div class="text">Caption Text</div> -->
							</div>

							<div class="mySlides fade">
								<!-- <div class="numbertext">2 / 3</div> -->
								<!-- <a href="#"><img src="img_fjords_wide.jpg"></a> -->
								<!-- <div class="text">Caption Two</div> -->

								<a href="#"><img src="resorce/pic/Picking-the-Perfect-Blank-T-Shirt-672x309.jpg"></a>
							</div>

							<div class="mySlides fade">
								<!-- <div class="numbertext">3 / 3</div> -->
								<a href="#"><img src="resorce/pic/Cover2.jpg"></a>
								<!-- <div class="text">Caption Three</div> -->
							</div>

						</div>

						<div style="text-align:center">
							<span class="demo"></span>
							<span class="demo"></span>
							<span class="demo"></span>
						</div>

						<script>
							var slideIndex = 0;
							showSlides();
						</script>

						<!-- End -->
					</div>
					<div class="BodyPartSliderLeftImgName"></div>
				</div>

			</div>


			<div class="Product">
				<div class="rightProduct">
					<div class="offerSetion">
						<!-- <div class="offerSetionDiv"></div> -->
						<div class="offerSetionDiv" style="margin-right: 1%;">Top Offers 01</div>
						<div class="offerSetionDiv" style="margin-left: 1%;">Top Offers 02</div>
					</div>
					<div class="topSell">
						<div class="topSellTop">
							<div id="topSellTopName">Top Sell</div>
						</div>
						<div class="topSellProduct">
							<button pid="topsellProductImg">
								<div class="topSellProductImg"><img src="resorce/pic/plain-black-t-shirt-7-cool-hd-wallpaper.jpg"></div>
							</button>
							<div class="ratting">
								<span class="fa fa-star ret"></span>
								<span class="fa fa-star ret"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
								<span class="fa fa-star"></span>
							</div>
							<div class="topSellProductName"><a href="productDetails.php?pid=''&uid=''">Name</a></div>
							<div class="topSellProductPrice">
								<div class="topSellProductPriceOld" style="float: left;">old price</div>
								<div class="topSellProductPriceNew" style="float: left; color: orange;">New price</div>
							</div>
							<div class="topSellProductBuyButton">
								<a href="productDetails.php?pid=''&uid=''">Buy Now</a>
							</div>
						</div>
						<div class="topSellProduct">Product 02</div>
						<div class="topSellProduct">Product 03</div>
						<div class="topSellProduct">Product 04</div>
						<div class="topSellProduct">Product 05</div>

					</div>
					<div id="topSellProductBottom"></div>
				<!-- Gents Start -->
					<div class="divider" style="width: 100%; height: 5px; background: #ef4923;"></div>
					<div class="ganceCalection">
						<div class="rightProduct_left-nevigration">
							<div class="rightProduct_left-nevigrationName">
								<div class="rightProduct_left-nevigrationName-img"><img src="resorce/pic/plain-black-t-shirt-7-cool-hd-wallpaper.jpg"></div>
								<div class="rightProduct_left-nevigrationName-name" style="color: #ef4923;">T-Shirts Gents</div>
							</div>
							<div class="rightProduct_left-nevigration-List">
								<a class="rightProduct_left-nevigration-List-a" href="productList.php?type=''&section=''">
								New Collection</a>
								<a class="rightProduct_left-nevigration-List-a" href="productList.php?type=''&section=''">
								Half T-Shirts</a>
								<a class="rightProduct_left-nevigration-List-a" href="productList.php?type=''&section=''">
								Full T-Shirts</a>
								<a class="rightProduct_left-nevigration-List-a" href="productList.php?type=''&section=''">
								Fation</a>
							</div>
						</div>
						<div class="rightProduct_middle">
							<div class="rightProduct_middle-top">
								<div class="InTableView-Left">
									<div class="InTableView-Left-img">
										<img src="resorce/pic/plain-black-t-shirt-7-cool-hd-wallpaper.jpg">
									</div>
									<div class="InTableView-Left-details">
										<center>
											<div class="InTableView-Left-details-Ratting">
												<span class="fa fa-star ret"></span>
												<span class="fa fa-star ret"></span>
												<span class="fa fa-star"></span>
												<span class="fa fa-star"></span>
												<span class="fa fa-star"></span>
											</div>
											<div class="InTableView-Left-details-Name"><a href="productDetails.php?pid=''&uid=''">Name</a></div>
											<div class="InTableView-Left-details-Price"><i>&#2547; </i>200</div>
										</center>
									</div>
								</div>
								<div class="InTableView-meddle">
								</div>
								<div class="InTableView-Right">
									
								</div>
							</div>
							<div class="rightProduct_middle-bottom">
								<div class="InTableView-Left">
									
								</div>
								<div class="InTableView-meddle">
									
								</div>
								<div class="InTableView-Right">
									
								</div>
							</div>
						</div>
						<div class="rightProduct_right_add">
							<img style="position: relative;" src="resorce/pic/plain-black-t-shirt-7-cool-hd-wallpaper.jpg">
							<!-- <div class="rightProduct_right_add-Details"></div> -->
						</div>
					</div>
				<!-- Gents End -->
				<!-- Baby Start -->
					<div class="divider" style="width: 100%; height: 5px; background: #60bb46;"></div>
					<div class="ganceCalection">
						<div class="rightProduct_left-nevigration">
							<div class="rightProduct_left-nevigrationName">
								<div class="rightProduct_left-nevigrationName-img"><img src="resorce/pic/plain-black-t-shirt-7-cool-hd-wallpaper.jpg"></div>
								<div class="rightProduct_left-nevigrationName-name" style="color: #60bb46;">Baby</div>
							</div>
							<div class="rightProduct_left-nevigration-List">
								<a class="rightProduct_left-nevigration-List-a" href="productList.php?type=''&section=''">
								New Collection</a>
								<a class="rightProduct_left-nevigration-List-a" href="productList.php?type=''&section=''">
								Half T-Shirts</a>
								<a class="rightProduct_left-nevigration-List-a" href="productList.php?type=''&section=''">
								Full T-Shirts</a>
								<a class="rightProduct_left-nevigration-List-a" href="productList.php?type=''&section=''">
								Fation</a>
							</div>
						</div>
						<div class="rightProduct_middle">
							<div class="rightProduct_middle-top">
								<div class="InTableView-Left">
									<div class="InTableView-Left-img">
										<img src="resorce/pic/plain-black-t-shirt-7-cool-hd-wallpaper.jpg">
									</div>
									<div class="InTableView-Left-details">
										<center>
											<div class="InTableView-Left-details-Ratting">
												<span class="fa fa-star ret"></span>
												<span class="fa fa-star ret"></span>
												<span class="fa fa-star"></span>
												<span class="fa fa-star"></span>
												<span class="fa fa-star"></span>
											</div>
											<div class="InTableView-Left-details-Name"><a href="productDetails.php?pid=''&uid=''">Name</a></div>
											<div class="InTableView-Left-details-Price"><i>&#2547; </i>200</div>
										</center>
									</div>
								</div>
								<div class="InTableView-meddle">
								</div>
								<div class="InTableView-Right">
									
								</div>
							</div>
							<div class="rightProduct_middle-bottom">
								<div class="InTableView-Left">
									
								</div>
								<div class="InTableView-meddle">
									
								</div>
								<div class="InTableView-Right">
									
								</div>
							</div>
						</div>
						<div class="rightProduct_right_add">
							<img style="position: relative;" src="resorce/pic/plain-black-t-shirt-7-cool-hd-wallpaper.jpg">
							<!-- <div class="rightProduct_right_add-Details"></div> -->
						</div>
					</div>
				<!-- Baby End -->
				<!-- Women Start -->
					<div class="divider" style="width: 100%; height: 5px; background: #92278f;"></div>
					<div class="ganceCalection">
						<div class="rightProduct_left-nevigration">
							<div class="rightProduct_left-nevigrationName">
								<div class="rightProduct_left-nevigrationName-img"><img src="resorce/pic/plain-black-t-shirt-7-cool-hd-wallpaper.jpg"></div>
								<div class="rightProduct_left-nevigrationName-name" style="color: #92278f;">Gents</div>
							</div>
							<div class="rightProduct_left-nevigration-List">
								<a class="rightProduct_left-nevigration-List-a" href="productList.php?type=''&section=''">
								New Collection</a>
								<a class="rightProduct_left-nevigration-List-a" href="productList.php?type=''&section=''">
								Half T-Shirts</a>
								<a class="rightProduct_left-nevigration-List-a" href="productList.php?type=''&section=''">
								Full T-Shirts</a>
								<a class="rightProduct_left-nevigration-List-a" href="productList.php?type=''&section=''">
								Fation</a>
							</div>
						</div>
						<div class="rightProduct_middle">
							<div class="rightProduct_middle-top">
								<div class="InTableView-Left">
									<div class="InTableView-Left-img">
										<img src="resorce/pic/plain-black-t-shirt-7-cool-hd-wallpaper.jpg">
									</div>
									<div class="InTableView-Left-details">
										<center>
											<div class="InTableView-Left-details-Ratting">
												<span class="fa fa-star ret"></span>
												<span class="fa fa-star ret"></span>
												<span class="fa fa-star"></span>
												<span class="fa fa-star"></span>
												<span class="fa fa-star"></span>
											</div>
											<div class="InTableView-Left-details-Name"><a href="productDetails.php?pid=''&uid=''">Name</a></div>
											<div class="InTableView-Left-details-Price"><i>&#2547; </i>200</div>
										</center>
									</div>
								</div>
								<div class="InTableView-meddle">
								</div>
								<div class="InTableView-Right">
									
								</div>
							</div>
							<div class="rightProduct_middle-bottom">
								<div class="InTableView-Left">
									
								</div>
								<div class="InTableView-meddle">
									
								</div>
								<div class="InTableView-Right">
									
								</div>
							</div>
						</div>
						<div class="rightProduct_right_add">
							<img style="position: relative;" src="resorce/pic/plain-black-t-shirt-7-cool-hd-wallpaper.jpg">
							<!-- <div class="rightProduct_right_add-Details"></div> -->
						</div>
					</div>
				<!-- Women End -->
					<!-- <div class="AddSpace">Titel</div> -->
					<!-- <div class="brandSection"><div class="product">Brand Section</div></div> -->
					<!-- <div class="AddSpace">Titel</div> -->
					<!-- <div class="BabyCalection">BabyCalection</div> -->
					<!-- <div class="AddSpace">Titel</div> -->
					<!-- <div class="GanceCalection">GanceCalection</div> -->
					<!-- <div class="AddSpace">Titel</div> -->
					<!-- <div class="WomanCalection">WomanCalection</div> -->
					<!-- <div class="AddSpace">Titel</div> -->
					<!-- <div class="WomanCalection">ExtraCalection</div> -->
				</div>
			</div>
		<!-- </div>	 -->
		<?php include("futter.html");?>
	</form>
</body>
</html>