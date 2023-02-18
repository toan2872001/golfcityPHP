<!doctype html>



<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Trang chủ</title>
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
<body class="home" data-spy="scroll" data-target="#scrollspy">

	
<?php include("include/inc_header.php");
	 $param = "";
	 $sortParam = "";
	 $orderConditon = "";
	 //Tìm kiếm
	 $search = isset($_GET['name']) ? $_GET['name'] : "";
	 if ($search) {
		 $where = "WHERE `name` LIKE '%" . $search . "%'";
		 $param .= "name=".$search."&";
		 $sortParam =  "name=".$search."&";
	 }
 
	 //Sắp xếp
	 $orderField = isset($_GET['field']) ? $_GET['field'] : "";
	 $orderSort = isset($_GET['sort']) ? $_GET['sort'] : "";
	 if(!empty($orderField)
		 && !empty($orderSort)){
		 $orderConditon = "ORDER BY `product`.`".$orderField."` ".$orderSort;
		 $param .= "field=".$orderField."&sort=".$orderSort."&";
	 }
 
	 include './connect_db.php';
	 $products = mysqli_query($con, "SELECT * FROM `product`");
        
       
?>
	
	<div class="container">
		<div class="row">
			<div class="col-xs-12 site-slider">
				<div class="owl-carousel">
					<a class="item" style="background-image: url(images/slide-3.jpg)" href="#"></a>
					<a class="item" style="background-image: url(images/slide-2.jpg)" href="#"></a>
					<a class="item" style="background-image: url(images/slide-1.jpg)" href="#"></a>
				</div>
			</div>
			<div class="col-xs-12 site-banners">
				<div class="row">
					<div class="col-xs-12 col-sm-4 col-xl-12 site-banner"><a href="#"><img src="images/banner-3.jpg" alt=""/></a></div>
					<div class="col-xs-12 col-sm-4 col-xl-12 site-banner"><a href="#"><img src="images/banner-3.jpg" alt=""/></a></div>
					<div class="col-xs-12 col-sm-4 col-xl-12 site-banner"><a href="#"><img src="images/banner-3.jpg" alt=""/></a></div>
				</div>
			</div>
		</div>
		
		<div class="block-tab" id="block-tab-1">
			<div class="block-header clearfix">
				<h2 class="block-title">
					<i class="fa fa-blind"></i>
					<a href="">Gậy golf</a>        
				</h2>
				<ul class="tab nav nav-pills hidden-md-down">
					<li class="nav-item tab-item">
						<a class="active" data-toggle="tab" href="#tab-a1">Loại gậy golf</a>
					</li>
					<li class="nav-item tab-item">
						<a data-toggle="tab" href="#tab-a2">Hãng gậy golf</a>
					</li>
					
				</ul>
				<div class="block-nav">
					<a href="trangsp1.php">Xem tất cả <i class="fa fa-long-arrow-right"></i></a>
				</div>
			</div>
			<div class="block-content tab-content">
				<div class="tab-pane fade active in" id="tab-c1">
				<div class="row products mobile-products">
					<?php
            				 while ($row = mysqli_fetch_array($products)) {
                    		?>
							
							<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 product">
							<div class="inner">
							<a class ='image'> <span class="btn btn-primary">Xem ngay</span>
								<a  href="dangnhap.php?id=<?= $row['id'] ?>"><img src=" <?= $row['image'] ?>" />
								<?php if ($row['quantity'] > 0) { ?> 
                            	<form class="quick-buy-form" action="dangnhap.php?action=add" method="POST">
								<h3 class="name"><a href="dangnhap.php?id=<?= $row['id'] ?>"><?= $row['name'] ?></a></h3>
									<?php } else { ?>
										<h3 class="name"><a href="dangnhap.php?id=<?= $row['id'] ?>"><?= $row['name'] ?></h3>
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
				
			</div>
		<!-- <div class="block-tab" id="block-tab-2">
			<div class="block-header clearfix">
				<h2 class="block-title">
					<i class="fa fa-blind"></i>
					<a href="#">Túi golf</a>        
				</h2>
				<ul class="tab nav nav-pills hidden-md-down">
					<li class="nav-item tab-item">
						<a class="active" data-toggle="tab" href="#tab-b1">LOẠI TÚI GOLF</a>
					</li>
					<li class="nav-item tab-item">
						<a data-toggle="tab" href="#tab-b2">HÃNG TÚI GOLF</a>
					</li>

				</ul>
				<div class="block-nav">
					<a href="trangsp2.php">Xem tất cả <i class="fa fa-long-arrow-right"></i></a>
				</div>
		</div>

			<div class="block-content tab-content">
			
				<div class="tab-pane fade active in" id="tab-b1">
				
					<div class="row products mobile-products">
					<?php
            				 while ($row = mysqli_fetch_array($products)) {
                    		?>
						
						<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 product">
							<div class="inner">
							<a class="image">
								<a href="detail.php?id=<?= $row['id'] ?>"><img src="<?= $row['image'] ?>" title="<?= $row['name'] ?>" />
								<span class="btn btn-primary">Xem ngay</span>
									<span class="sale">Sale 20%</span>
							</a>	
								</a>
								<strong></strong><br/>
								<div class="info">
									<h3 class="name"><a href="detail.php?id=<?= $row['id'] ?>"><?= $row['name'] ?></a></h3>
									<p class="price">
										<ins><label>Giá: </label><span class="product-price"><?= number_format($row['price'], 0, ",", ".") ?> đ</span><br/></ins>
										<del>9,999,000<span class="symbol">đ</span></del>
									</p>
									
								</div>
							</div>
						</div>
						<?php } ?>
					</div>
						
				</div>
				
			</div>
			 -->

		
		<div class="block-tab" id="block-tab-3">
			<div class="block-header clearfix">
				<h2 class="block-title">
					<i class="fa fa-blind"></i>
					<a href="#">Phụ kiện golf</a>        
				</h2>
				<ul class="tab nav nav-pills hidden-md-down">
					<li class="nav-item tab-item">
						<a  data-toggle="tab" href="#tab-c1">Bóng golf</a>
					</li>
					<li class="nav-item tab-item">
						<a data-toggle="tab" href="#tab-c2">GĂNG TAY</a>
					</li>
				</ul>
				<div class="block-nav">
					<a href="trangsp3.php">Xem tất cả <i class="fa fa-long-arrow-right"></i></a>
				</div>
			</div>
			
			<div class="block-content tab-content">
				<div class="tab-pane fade active in" id="tab-c1">
					<div class="row products mobile-products">
						<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 product">
							<div class="inner">
								<a class="image" href="#">
									<img src="images/bong-1.jpg" alt=""/>
									<span class="btn btn-primary">Xem ngay</span>
								</a>
								<div class="info">
									<h3 class="name"><a href="#">TaylorMade - Driver M2 2017 - Gaucher</a></h3>
									<p class="price">
										<ins>7,999,000<span class="symbol">đ</span></ins>
										<del>9,999,000<span class="symbol">đ</span></del>
									</p>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 product">
							<div class="inner">
								<a class="image" href="#">
									<img src="images/golf-acc-2.jpg" alt=""/>
									<span class="btn btn-primary">Xem ngay</span>
								</a>
								<div class="info">
									<h3 class="name"><a href="#">TaylorMade - Série de Fers M2 Graphite</a></h3>
									<p class="price">
										<ins>5,999,000<span class="symbol">đ</span></ins>
									</p>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 product">
							<div class="inner">
								<a class="image" href="#">
									<img src="images/golf-acc-3.jpg" alt=""/>
									<span class="btn btn-primary">Xem ngay</span>
								</a>
								<div class="info">
									<h3 class="name"><a href="#">Wilson - Driver D200 - Droitier </a></h3>
									<p class="price">
										<ins>10,999,000<span class="symbol">đ</span></ins>
									</p>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 product">
							<div class="inner">
								<a class="image" href="#">
									<img src="images/golf-acc-4.jpg" alt=""/>
									<span class="btn btn-primary">Xem ngay</span>
								</a>
								<div class="info">
									<h3 class="name"><a href="#">Cobra - Driver Max - Droitière</a></h3>
									<p class="price">
										<ins>8,999,000<span class="symbol">đ</span></ins>
										<del>6,999,000<span class="symbol">đ</span></del>
									</p>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 product">
							<div class="inner">
								<a class="image" href="#">
									<img src="images/golf-acc-1.jpg" alt=""/>
									<span class="btn btn-primary">Xem ngay</span>
								</a>
								<div class="info">
									<h3 class="name"><a href="#">TaylorMade - Driver M2 2017 - Gaucher</a></h3>
									<p class="price">
										<ins>7,999,000<span class="symbol">đ</span></ins>
										<del>9,999,000<span class="symbol">đ</span></del>
									</p>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 product">
							<div class="inner">
								<a class="image" href="#">
									<img src="images/golf-acc-2.jpg" alt=""/>
									<span class="btn btn-primary">Xem ngay</span>
								</a>
								<div class="info">
									<h3 class="name"><a href="#">TaylorMade - Série de Fers M2 Graphite</a></h3>
									<p class="price">
										<ins>5,999,000<span class="symbol">đ</span></ins>
									</p>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 product">
							<div class="inner">
								<a class="image" href="#">
									<img src="images/golf-acc-3.jpg" alt=""/>
									<span class="btn btn-primary">Xem ngay</span>
								</a>
								<div class="info">
									<h3 class="name"><a href="#">Wilson - Driver D200 - Droitier </a></h3>
									<p class="price">
										<ins>10,999,000<span class="symbol">đ</span></ins>
									</p>
								</div>
							</div>
						</div>
						<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 product">
							<div class="inner">
								<a class="image" href="#">
									<img src="images/golf-acc-4.jpg" alt=""/>
									<span class="btn btn-primary">Xem ngay</span>
								</a>
								<div class="info">
									<h3 class="name"><a href="#">Cobra - Driver Max - Droitière</a></h3>
									<p class="price">
										<ins>8,999,000<span class="symbol">đ</span></ins>
										<del>6,999,000<span class="symbol">đ</span></del>
									</p>
								</div>
							</div>
						</div>
					</div>
				</div>

		
					<div class="tab-pane fade active in" id="tab-c2">
						<div class="row products mobile-products">
							<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 product">
								<div class="inner">
									<a class="image" href="#">
											<img src="images/golf-glove-1.jpg" alt=""/>
											<span class="btn btn-primary">Xem ngay</span>
										</a>
										<div class="info">
											<h3 class="name"><a href="#">TaylorMade - Driver M2 2017 - Gaucher</a></h3>
											<p class="price">
												<ins>7,999,000<span class="symbol">đ</span></ins>
												<del>9,999,000<span class="symbol">đ</span></del>
											</p>
										</div>
									</div>
								</div>
								<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 product">
									<div class="inner">
										<a class="image" href="#">
											<img src="images/golf-glove-2.jpg" alt=""/>
											<span class="btn btn-primary">Xem ngay</span>
										</a>
										<div class="info">
											<h3 class="name"><a href="#">TaylorMade - Série de Fers M2 Graphite</a></h3>
											<p class="price">
												<ins>5,999,000<span class="symbol">đ</span></ins>
											</p>
										</div>
									</div>
								</div>
								<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 product">
									<div class="inner">
										<a class="image" href="#">
											<img src="images/golf-glove-3.jpg" alt=""/>
											<span class="btn btn-primary">Xem ngay</span>
										</a>
										<div class="info">
											<h3 class="name"><a href="#">Wilson - Driver D200 - Droitier </a></h3>
											<p class="price">
												<ins>10,999,000<span class="symbol">đ</span></ins>
											</p>
										</div>
									</div>
								</div>
								<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 product">
									<div class="inner">
										<a class="image" href="#">
											<img src="images/golf-glove-4.jpg" alt=""/>
											<span class="btn btn-primary">Xem ngay</span>
										</a>
										<div class="info">
											<h3 class="name"><a href="#">Cobra - Driver Max - Droitière</a></h3>
											<p class="price">
												<ins>8,999,000<span class="symbol">đ</span></ins>
												<del>6,999,000<span class="symbol">đ</span></del>
											</p>
										</div>
									</div>
								</div>
								<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 product">
									<div class="inner">
										<a class="image" href="#">
											<img src="images/golf-glove-1.jpg" alt=""/>
											<span class="btn btn-primary">Xem ngay</span>
										</a>
										<div class="info">
											<h3 class="name"><a href="#">TaylorMade - Driver M2 2017 - Gaucher</a></h3>
											<p class="price">
												<ins>7,999,000<span class="symbol">đ</span></ins>
												<del>9,999,000<span class="symbol">đ</span></del>
											</p>
										</div>
									</div>
								</div>
								<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 product">
									<div class="inner">
										<a class="image" href="#">
											<img src="images/golf-glove-2.jpg" alt=""/>
											<span class="btn btn-primary">Xem ngay</span>
										</a>
										<div class="info">
											<h3 class="name"><a href="#">TaylorMade - Série de Fers M2 Graphite</a></h3>
											<p class="price">
												<ins>5,999,000<span class="symbol">đ</span></ins>
											</p>
										</div>
									</div>
								</div>
								<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 product">
									<div class="inner">
										<a class="image" href="#">
											<img src="images/golf-glove-3.jpg" alt=""/>
											<span class="btn btn-primary">Xem ngay</span>
										</a>
										<div class="info">
											<h3 class="name"><a href="#">Wilson - Driver D200 - Droitier </a></h3>
											<p class="price">
												<ins>10,999,000<span class="symbol">đ</span></ins>
											</p>
										</div>
									</div>
								</div>
								<div class="col-xs-12 col-sm-6 col-md-4 col-lg-3 product">
									<div class="inner">
										<a class="image" href="#">
											<img src="images/golf-glove-4.jpg" alt=""/>
											<span class="btn btn-primary">Xem ngay</span>
										</a>
										<div class="info">
											<h3 class="name"><a href="#">Cobra - Driver Max - Droitière</a></h3>
											<p class="price">
												<ins>8,999,000<span class="symbol">đ</span></ins>
												<del>6,999,000<span class="symbol">đ</span></del>
											</p>
										</div>
									</div>
								</div>
							</div>
						</div>

			</div>
		</div><!-- .block-tab -->
	<?php include("include/inc_footer.php");?>
	<a class="scroll-top" href="#"><i class="fa fa-angle-up"></i></a>
</body>


</html>