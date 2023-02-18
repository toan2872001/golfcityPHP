<?php
session_start();
?>
<!doctype html>
<!--[if IE]><![endif]-->
<!--[if lt IE 7 ]> <html class="ie6">    <![endif]-->
<!--[if IE 7 ]>    <html class="ie7">    <![endif]-->
<!--[if IE 8 ]>    <html class="ie8">    <![endif]-->
<!--[if IE 9 ]>    <html class="ie9">    <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html><!--<![endif]-->

<!-- Mirrored from html.willgroup.net/golfcity/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 21 Jan 2018 13:52:58 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Đăng nhập</title>
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
	
	
	
	<section class="module-register">
		<div class="container">
			<div class="module-inner">
			<form method="POST" action="dangnhap.php">
				<header class="module-header">
					<h1 class="module-title">Đăng nhập</h1>
				</header>
				<div class="module-content">
					<div class="form-group">
						<label>Tài khoản <span class="required">(*)</span></label>
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-user"></i></span>
							<input class="form-control" type="text" name="username">
						</div>
					</div>
					<div class="form-group">
						<label>Mật khẩu <span class="required">(*)</span></label>
						<div class="input-group">
							<span class="input-group-addon"><i class="fa fa-lock"></i></span>
							<input class="form-control" type="password" name="password">
						</div>
					</div>
					<div class="form-group clearfix">
					</div>
					<div class="form-group">
						<button class="btn btn-primary btn-register" type="submit" name="btn_submit">Đăng nhập</button>
						<?php require 'xuli.php';?>
					</div>
					<div class="no-account">Bạn chưa có tài khoản? <a href="register.php">Đăng ký ngay</a></div>
				</div>
				
			</div>
        </div>
	</section>
	
	<?php include("include/inc_footer.php");?>
	<a class="scroll-top" href="#"><i class="fa fa-angle-up"></i></a>
</body>


</html>