<?php
// Start the session
session_start();
?>

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

<header class="site-header">
		<div class="site-top hidden-md-down">
			<div class="container">
			
				<ul class="site-user">
					<li><a href="#"><i class="fa fa-user"></i>Xin chào</a></li>
					<li class="separator">|</li>
					<li>
						<a class="toggle-module-login" href="index.php"><i class="fa fa-lock"></i>Đăng xuất</a>
						<div class="module-login">
							<header class="module-header">
								<h1 class="module-title">Đăng nhập</h1>
							</header>
							<div class="module-content">
								<div class="form-group">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-user"></i></span>
										<input class="form-control" type="email" placeholder="Email">
									</div>
								</div>
								<div class="form-group">
									<div class="input-group">
										<span class="input-group-addon"><i class="fa fa-lock"></i></span>
										<input class="form-control" type="password" placeholder="Mật khẩu">
									</div>
								</div>
								<div class="form-group clearfix">
									<label class="custom-control custom-checkbox remember">
										<input name="remember" type="checkbox" class="custom-control-input">
										<span class="custom-control-indicator"></span>
										<span class="custom-control-description">Ghi nhớ đăng nhập</span>
									</label>
								</div>
							
								<p class="no-account">Xin chào</p>
							</div>
						</div>
					</li>
				</ul>
				<ul class="site-support">
					<li><a href="tel:19006760"><i class="fa fa-phone"></i>Hotline: <span class="number">1900 6760</span></a></li>
					<li><a href="../citygolf2/admin"><i class=""></i> Admin</a></li>
				</ul>
			</div>
		</div>
		
		<div class="site-branding">
			<div class="container">
				<button class="mobile-nav-toggler hidden-lg-up" type="button"><i class="fa fa-navicon"></i></button>
				<h1 class="site-logo">
					<a href="index.php"><img src="images/logo-1.jpg"/></a>
				</h1>
				<a class="site-cart" href="cart.php">
					<i class="fa fa-shopping-cart"></i><span class="amount">0</span><span class="text hidden-md-down">Giỏ hàng</span>
				</a>

			</div>
		</div>
		
		<div class="mobile-nav hidden-lg-up">
			<ul class="site-user mobile-user">
				<li><a href="dangky.php"><i class="fa fa-user"></i>Xin chào</a></li>
				<li class="separator">|</li>
				
			</ul>
			<ul class="menu">
				<li><a href="tintuc.php"><i class="fa fa-newspaper-o icon-left"></i>Tin tức</a></li>
				<li><a href="trangspkm.php"><i class="fa fa-tags fa-rotate-90 icon-left"></i> Khuyến mãi</a></li>
				<li><a href="#"><i class="fa fa-star icon-left"></i>Đánh giá</a></li>
			</ul>
			<ul class="menu">
				<li><a href="trangsp1.php"><img class="icon-left" src="images/icon-gay-golf.png" alt=""/>Gậy Golf<i class="fa fa-angle-right icon-right"></i></a></li>
				<li><a href="trangsp2.php"><img class="icon-left" src="images/icon-tui-golf.png" alt=""/>Túi Golf<i class="fa fa-angle-right icon-right"></i></a></li>
				<li><a href="trangsp3.php"><img class="icon-left" src="images/icon-phu-kien-golf.png" alt=""/>Phụ kiện Golf<i class="fa fa-angle-right icon-right"></i></a></li>
				<li><a href="trangspkm.php"><i class="fa fa-tags fa-rotate-90"></i> KHUYẾN MÃI</a></li>
			</ul>
			<ul class="site-support mobile-support">
				<li><a href="tel:19006760"><i class="fa fa-phone"></i>Hotline: <span class="number">1900 6760</span></a></li>
				<li><a href="../admin"><i class=""></i>Admin</a></li>
			</ul>
		</div>
		
		<nav id="site-nav" class="site-nav hidden-md-down">
			<div class="container">
				<ul class="menu">
					<li class="branding active">
						<a class="branding-heading" href="#">
							<i class="fa fa-navicon"></i>Danh mục
						</a>
						<ul class="branding-menu">
							<li class="multicolumns">
								<a href="trangsp1.php"><img src="images/icon-gay-golf.png" alt=""/>Gậy Golf</a>
								<div class="submenu-wrapper">
									<div class="columns columns-2">
										<div class="column">
											<ul class="submenu">
												<li class="submenu-heading"><a href="#">Loại gậy golf</a></li>
													<li class="child"><a href="trangsp1.php">drivers</a></li>
													<li class="child"><a href="#">fairway</a></li>
													<li class="child"><a href="#">iron</a></li>
													<li class="child"><a href="#">hybrid-rescue</a></li>
													<li class="child"><a href="#">putter</a></li>
													<li class="child"><a href="#">wedges</a></li>
													<li class="child"><a href="#">chipper</a></li>
													
												
											</ul>
										</div>
										<div class="column">
											<ul class="submenu">
												<li class="submenu-heading"><a href="#">Hãng gậy golf</a></li>
													<li class="child"><a href="#">taylormade</a></li>
													<li class="child"><a href="#">callaway</a></li>
													<li class="child"><a href="#">mizuno</a></li>
													<li class="child"><a href="#">titleist</a></li>
													<li class="child"><a href="#">nike</a></li>
													<li class="child"><a href="#">ping</a></li>
													<li class="child"><a href="#">cobra</a></li>
													<li class="child"><a href="#">honma</a></li>
													<li class="child"><a href="#">cleverland</a></li>

											</ul>
										</div>
									</div>
									<div class="columns columns-banner">
										<a href="#"><img src="images/golf-menu.jpg" alt=""/></a>
									</div>
								</div>
							</li>
							<li class="multicolumns">
								<a href="trangsp2.php"><img src="images/icon-tui-golf.png" alt=""/>Túi Golf</a>
								<div class="submenu-wrapper">
									<div class="columns columns-2">
										<div class="column">
											<ul class="submenu">

												<li class="submenu-heading"><a href="trangsp2.php">Loại túi golf</a></li>
													<li class="child"><a href="#">Túi đựng giày</a></li>
													<li class="child"><a href="#">Túi xách</a></li>
													<li class="child"><a href="#">Túi du lịch</a></li>
													<li class="child"><a href="#">Túi gậy có chân chống</a></li>
													<li class="child"><a href="#">Túi gậy</a></li>
													<li class="child"><a href="#">Túi cầm tay</a></li>
													<li class="child"><a href="#">Túi gậy sân tập</a></li>

											</ul>
										</div>
										<div class="column">
											<ul class="submenu">
												<li class="submenu-heading"><a href="#">Thương hiệu</a></li>
													<li class="child"><a href="#">taylormade</a></li>
													<li class="child"><a href="#">callaway</a></li>
													<li class="child"><a href="#">mizuno</a></li>
													<li class="child"><a href="#">titleist</a></li>
													<li class="child"><a href="#">cobra</a></li>
													<li class="child"><a href="#">honma</a></li>
													<li class="child"><a href="#">xxio</a></li>
													<li class="child"><a href="#">ping</a></li>

											</ul>
										</div>
									</div>
									<div class="columns columns-banner">
										<a href="#"><img src="images/golf-menu.jpg" alt=""/></a>
									</div>
								</div>
							</li>
							
							<li class="multicolumns">
								<a href="trangsp3.php"><img src="images/icon-phu-kien-golf.png" alt=""/>Phụ Kiện Golf</a>
								<div class="submenu-wrapper">
									<div class="columns columns-2">
										<div class="column">
											<ul class="submenu">

												<li class="submenu-heading"><a href="#">Bóng golf</a></li>
													<li class="child"><a href="#">Taylormade</a></li>
													<li class="child"><a href="#">Titleist</a></li>
													<li class="child"><a href="#">Callaway</a></li>
													<li class="child"><a href="#">Nike</a></li>

											</ul>
										</div>
										<div class="column">
											<ul class="submenu">

												<li class="submenu-heading"><a href="trangsp3.php">Găng tay</a></li>
			
											</ul>
										</div>
									</div>
									<div class="columns columns-banner">
										<a href="#"><img src="images/golf-menu.jpg" alt=""/></a>
									</div>
								</div>

					<li>
						<a href="tintuc.php"><i class="fa fa-newspaper-o"></i> TIN TỨC</a>
					</li>
					<li>
						<a href="trangspkm.php"><i class="fa fa-tags fa-rotate-90"></i> KHUYẾN MÃI</a>
					</li>
					<li>
						<a href="chinhsach.php"><i class="fa fa-star"></i> CHÍNH SÁCH</a>
					</li>
				</ul>
			</div>
		</nav><!-- site-nav -->
		
		<nav id="site-nav-clone" class="site-nav site-nav-clone hidden-md-down">
			<div class="container">
				<ul class="menu">
					<li class="branding active">
						<a class="branding-heading" href="#">
							<i class="fa fa-navicon"></i>Danh mục
						</a>
						<ul class="branding-menu">
							<li class="multicolumns">
								<a href="trangsp1.php"><img src="images/icon-gay-golf.png" alt=""/>Gậy Golf</a>
								<div class="submenu-wrapper">
									<div class="columns columns-2">
										<div class="column">
											<ul class="submenu">
												<li class="submenu-heading"><a href="#">Loại gậy golf</a></li>
													<li class="child"><a href="trangsp1.php">drivers</a></li>
													<li class="child"><a href="#">fairway</a></li>
													<li class="child"><a href="#">iron</a></li>
													<li class="child"><a href="#">hybrid-rescue</a></li>
													<li class="child"><a href="#">putter</a></li>
													<li class="child"><a href="#">wedges</a></li>
													<li class="child"><a href="#">chipper</a></li>
										
									

											</ul>
										</div>
										<div class="column">
											<ul class="submenu">
												<li class="submenu-heading"><a href="#">Hãng gậy golf</a></li>
													<li class="child"><a href="#">taylormade</a></li>
													<li class="child"><a href="#">callaway</a></li>
													<li class="child"><a href="#">mizuno</a></li>
													<li class="child"><a href="#">titleist</a></li>
													<li class="child"><a href="#">nike</a></li>
													<li class="child"><a href="#">ping</a></li>
													<li class="child"><a href="#">cobra</a></li>
													<li class="child"><a href="#">honma</a></li>
													<li class="child"><a href="#">cleverland</a></li>
						
											</ul>
										</div>
									</div>
									<div class="columns columns-banner">
										<a href="#"><img src="images/golf-menu.jpg" alt=""/></a>
									</div>
								</div>
							</li>
							<li class="multicolumns">
								<a href="trangsp2.php"><img src="images/icon-tui-golf.png" alt=""/>Túi Golf</a>
								<div class="submenu-wrapper">
									<div class="columns columns-2">
										<div class="column">
											<ul class="submenu">

												<li class="submenu-heading"><a href="trangsp2.php">Loại túi golf</a></li>
													<li class="child"><a href="#">Túi đựng giày</a></li>
													<li class="child"><a href="#">Túi xách</a></li>
													<li class="child"><a href="#">Túi du lịch</a></li>
													<li class="child"><a href="#">Túi gậy có chân chống</a></li>
													<li class="child"><a href="#">Túi gậy</a></li>
													<li class="child"><a href="#">Túi cầm tay</a></li>
													<li class="child"><a href="#">Túi gậy sân tập</a></li>
							
											</ul>
										</div>
										<div class="column">
											<ul class="submenu">
												<li class="submenu-heading"><a href="#">Thương hiệu</a></li>
													<li class="child"><a href="#">taylormade</a></li>
													<li class="child"><a href="#">callaway</a></li>
													<li class="child"><a href="#">mizuno</a></li>
													<li class="child"><a href="#">titleist</a></li>
													<li class="child"><a href="#">cobra</a></li>
													<li class="child"><a href="#">honma</a></li>
													<li class="child"><a href="#">xxio</a></li>
													<li class="child"><a href="#">ping</a></li>

											</ul>
										</div>
									</div>
									<div class="columns columns-banner">
										<a href="#"><img src="images/golf-menu.jpg" alt=""/></a>
									</div>
								</div>
							</li>
							<li class="multicolumns">
								<a href="trangsp3.php"><img src="images/icon-phu-kien-golf.png" alt=""/>Phụ Kiện Golf</a>
								<div class="submenu-wrapper">
									<div class="columns columns-2">
										<div class="column">
											<ul class="submenu">

												<li class="submenu-heading"><a href="#">Bóng golf</a></li>
													<li class="child"><a href="#">taylormade</a></li>
													<li class="child"><a href="#">titleist</a></li>
													<li class="child"><a href="#">callaway</a></li>
													<li class="child"><a href="#">nike</a></li>

											</ul>
										</div>
										<div class="column">
											<ul class="submenu">

												<li class="submenu-heading"><a href="#">Găng tay</a></li>

											</ul>
										</div>
									</div>
									<div class="columns columns-banner">
										<a href="#"><img src="images/golf-menu.jpg" alt=""/></a>
									</div>
								</div>
							</li>

							<li class="multicolumns">
							<a href="trangspkm.php"><i class="fa fa-tags fa-rotate-90"></i> KHUYẾN MÃI</a>
								
</li>
									
			
	

			</div>
		</nav><!-- site-nav-clone -->
	</header><!-- .site-header -->
<?php 
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
								<a  href="trang1sp.php?id=<?= $row['id'] ?>"><img src=" <?= $row['image'] ?>" />
								<?php if ($row['quantity'] > 0) { ?> 
                            	<form class="quick-buy-form" action="cart.php?action=add" method="POST">
								<h3 class="name"><a href="trang1sp.php?id=<?= $row['id'] ?>"><?= $row['name'] ?></a></h3>
									<?php } else { ?>
										<h3 class="name"><a href="trang1sp.php?id=<?= $row['id'] ?>"><?= $row['name'] ?></h3>
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