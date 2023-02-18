<!doctype html>
<!--[if IE]><![endif]-->
<!--[if lt IE 7 ]> <html class="ie6">    <![endif]-->
<!--[if IE 7 ]>    <html class="ie7">    <![endif]-->
<!--[if IE 8 ]>    <html class="ie8">    <![endif]-->
<!--[if IE 9 ]>    <html class="ie9">    <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html><!--<![endif]-->

<!-- Mirrored from html.willgroup.net/golfcity/single-product.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 21 Jan 2018 13:52:59 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Chi tiết sản phẩm</title>
	<meta name="description" content="">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="shortcut icon" type="image/x-icon" href="images/logo.jpg">
	
	<!-- CSS
	============================================ -->	
	<link rel="stylesheet" href="css/bootstrap.min.css">	
	<link rel="stylesheet" href="css/font-awesome.min.css">		
	<link rel="stylesheet" href="css/fancybox.css">	
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/owl.carousel.css">
	<link rel="stylesheet" href="css/ion.rangeSlider.css">
	<link rel="stylesheet" href="css/ion.rangeSlider.skinHTML5.css">
	<link rel="stylesheet" href="css/daterangepicker.css">
	<link rel="stylesheet" href="css/style.css">
	
	<!-- JS
	============================================ -->
	<script src="js/jquery-1.11.3.min.js" defer></script>
	<script src="js/tether.min.js" defer></script>
	<script src="js/bootstrap.min.js" defer></script>
	<script src="js/fancybox.js" defer></script>
	<script src="js/owl.carousel.min.js" defer></script>
	<script src="js/bootstrap-rating.min.js" defer></script>
	<script src="js/ion.rangeSlider.min.js" defer></script>
	<script src="js/moment.min.js" defer></script>
	<script src="js/daterangepicker.js" defer></script>
	<script src="js/site.js" defer></script>
</head>
<body data-spy="scroll" data-target="#scrollspy">
	<!--[if lt IE 8]>
		<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
	<![endif]-->
	
	<?php include("include/inc_header.php");
	
	include './connect_db.php';
	$result = mysqli_query($con, "SELECT * FROM `product` WHERE `id` = " . $_GET['id']);
	$product = mysqli_fetch_assoc($result);
	$imgLibrary = mysqli_query($con, "SELECT * FROM `image_library` WHERE `product_id` = " . $_GET['id']);
	$product['images'] = mysqli_fetch_all($imgLibrary, MYSQLI_ASSOC);
	$products = mysqli_query($con, "SELECT * FROM `product`");
	?>
	
	<div class="container">
		<ul class="breadcrumb">
			<li class="breadcrumb-item"><a href="home.php">Home</a></li>
			<li class="breadcrumb-item"><a href="#">Gậy Golf</a></li>
			<li class="breadcrumb-item"><a href="#">Gậy Driver</a></li>
		</ul>
		
		<div class="row">
			<div class="col-xs-12 col-lg-9">
				<div class="single-product">
					<div class="row">
						<div class="col-xs-12 col-md-6">
							<div class="single-product-images owl-carousel">
								<div class="item"><a class="fancybox" href="<?= $product['image'] ?>" style="background-image: url(<?= $product['image'] ?>)"></a></div>
								<div class="item"><a class="fancybox" href="<?= $image_library['path'] ?>" rel="res-gallery" style="background-image: url(images/gay-driver-2.jpg)"></a></div>
								<div class="item"><a class="fancybox" href="images/gay-driver-3.jpg" rel="res-gallery" style="background-image: url(images/gay-driver-3.jpg)"></a></div>
								<div class="item"><a class="fancybox" href="images/gay-driver-4.jpg" rel="res-gallery" style="background-image: url(images/gay-driver-4.jpg)"></a></div>
								<div class="item"><a class="fancybox" href="images/gay-driver-5.jpg" rel="res-gallery" style="background-image: url(images/gay-driver-5.jpg)"></a></div>
							</div>
							<div class="single-product-thumbs owl-carousel">
								<div class="item"><a href="javascript:void(0);"><img src="images/gay-driver-1.jpg" alt="Gậy driver"/></a></div>
								<div class="item"><a href="javascript:void(0);"><img src="images/gay-driver-2.jpg" alt="Gậy driver"/></a></div>
								<div class="item"><a href="javascript:void(0);"><img src="images/gay-driver-3.jpg" alt="Gậy driver"/></a></div>
								<div class="item"><a href="javascript:void(0);"><img src="images/gay-driver-4.jpg" alt="Gậy driver"/></a></div>
								<div class="item"><a href="javascript:void(0);"><img src="images/gay-driver-5.jpg" alt="Gậy driver"/></a></div>
							</div>
						</div>
						<div class="col-xs-12 col-md-6">
							<div class="single-product-summary">
								<h1 class="single-product-title"><?= $product['name'] ?></h1>
								<div class="separator"></div>
								
								<div class="single-product-price">Giá:<ins><?= number_format($product['price'], 0, ",", ".") ?><span class="symbol">đ</span></ins><del>9.990.000<span class="symbol">đ</span></del></div>
								<div class="separator"></div>
								
								<div class="single-product-excerpt">
								<?= $product['content'] ?> 
								</div>
								<div class="separator"></div>
								
								<div class="delivery">
									<i class="icon-shipping"></i>
									<p class="text">TP.Hồ Chí Minh giao hàng trước <strong>20 giờ</strong> hôm nay <a href="#">Xem</a></p>
								</div>
								<ul class="policy">
									<li>
										<p><strong>Đổi trả sản phẩm lỗi miễn phí trong 7 ngày</strong> <a href="#">(Xem)</a></p>
									</li>
									<li>
										<p><strong>Bảo hành chính hãng 12 tháng</strong> <a href="#">(Xem điểm bảo hành)</a></p>
										<p>Phát hiện hàng giả, hàng nhái, bạn trả hàng và nhận thêm <mark>100% giá trị đơn hàng</mark></p>
									</li>
									<li>
										<p><strong>Giao hàng đúng hẹn:</strong></p>
										<p>Nếu trễ, tặng phiếu mua hàng giá trị <mark>100.000đ</mark></p>
									</li>
								</ul>
								<?php if ($product['quantity'] > 0) { ?>
                        <div class="product-quantity"><label>Tồn kho: </label><strong><?= $product['quantity'] ?></strong></div>
                        <form id="add-to-cart-form" action="cart.php?action=add" method="POST">
                        <input type="text" value="1" name="quantity[<?= $product['id'] ?>]" size="2" /><br/>
                        <input class="btn btn-quick-buy" type="submit" value="Mua sản phẩm" />
                        </form>
                    <?php } else { ?>
                        <span class="error">Hết hàng</span>
                    <?php } ?>
							</div>
						</div>
					</div>
				</div><!-- single product -->	
</div>
</div>
		<section class="module">
			<header class="module-header">
				<h2 class="module-title">Sản phẩm đã xem</h2>
			</header>
			<div class="module-content">
				<div class="row products">
					
					<?php
            				 while ($row = mysqli_fetch_array($products)) {
                    		?>
							
							<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 product">
							<div class="inner">
							<a class ='image'> <span class="btn btn-primary">Xem ngay</span>
								<a  href="trang1sp.php?id=<?= $row['id'] ?>"><img src=" <?= $row['image'] ?>" />
								<?php if ($row['quantity'] > 0) { ?> 
                            	<form class="quick-buy-form" action="cart.php?action=add" method="POST">
								<h3 class="name"><a href="trang1sp.php?id=<?= $row['id'] ?>"><?= $row['name'] ?></a></h3>
									<?php } else { ?>
										<h3 class="name"><a href="detailhome.php?id=<?= $row['id'] ?>"><?= $row['name'] ?></h3>
                            		<?php } ?>
								</a>
								<div class="info">
									<p class="price">
										<ins><label>Giá: </label><span class="product-price"><?= number_format($row['price'], 0, ",", ".") ?> đ</span><br/></ins>
										<del>9,999,000<span class="symbol">đ</span></del>
									</p>
								</div>
								</form>
									
							</div>
						</div>
						<?php } ?>
									
					</div>
				
			</div>
		</section><!-- Sản phẩm đã xem -->
	</div>
	
	<<?php include("include/inc_footer.php");?>
	<a class="scroll-top" href="#"><i class="fa fa-angle-up"></i></a>
</body>


</html>