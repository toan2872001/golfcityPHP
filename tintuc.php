<!doctype html>
<!--[if IE]><![endif]-->
<!--[if lt IE 7 ]> <html class="ie6">    <![endif]-->
<!--[if IE 7 ]>    <html class="ie7">    <![endif]-->
<!--[if IE 8 ]>    <html class="ie8">    <![endif]-->
<!--[if IE 9 ]>    <html class="ie9">    <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--><html><!--<![endif]-->

<!-- Mirrored from html.willgroup.net/golfcity/news.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 21 Jan 2018 13:52:59 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Tin tức</title>
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
	 include("connect_db.php");
	 $news = mysqli_query($con, "SELECT * FROM `news`"); ?>
	<div class="page-news">
		<div class="container">
			<ul class="breadcrumb">
				<li class="breadcrumb-item"><a href="index.php">Home</a></li>
				<li class="breadcrumb-item"><a href="tintuc.php">Tin tức</a></li>
			</ul>
			<nav class="news-nav">
				<ul class="menu clearfix">
					<li class="active"><a href="tintuc.php">Tin mới</a></li>
					<li><a href="trangspkm.php">Khuyến mãi</a></li>

					<li><a href="#">Tin tức golf</a></li>
				</ul>
			</nav>
			<?php
            				 while ($row = mysqli_fetch_array($news)) {
                    		?>
			<div class="row">
				<div class="col-xs-12 col-md-8 content-area">
					<div class="row">
						<div class="col-xs-12 col-sm-8">
							<article class="featurednews">
								<a class="image" href="trangtintuc1.php"><img src="images/news-1.jpg"/></a>
								<h3 class="name"><a href="trangtintuc1.php"><?= $row['id'] ?>.<?= $row['chude'] ?></a></h3>
								<p class="excerpt"><?= $row['noidung'] ?></p>
							</article>
						</div>
						<div class="col-xs-12 col-sm-4">
							<article class="featurednews m-b-1">
								<a class="image" href="#"><img src="images/news-2.jpg"/></a>
								<h3 class="name"><a href="#">FedExCup: Mục tiêu kiếm tiền của các golf thủ hàng đầu</a></h3>
							</article>
							<ul class="listnews">
								<li><a href="#">Ryder Cup 2016: Cơ hội phục thù của đội tuyển Mỹ</a></li>
								<li><a href="#">Mỹ dẫn châu Âu 5-3 sau ngày thi đấu thứ nhất Ryder Cup</a></li>
								<li><a href="#">Mỹ dẫn châu Âu ba điểm tại Ryder Cup 2016</a></li>
							</ul>
						</div>
					</div>
					<div class="list-floatnews">
						<article class="floatnews">
							<a class="image" href="#"><img src="images/news-5.jpg"/></a>
							<div class="info">
								<h3 class="name"><a href="#">Đội trưởng tuyển Ryder Cup Mỹ lo bị khán giả quay lưng</a></h3>
								<p class="excerpt">Davis Love III e ngại nếu ông và các đồng đội tiếp tục thất bại, người Mỹ sẽ không xem Ryder Cup nữa.</p>
							</div>
						</article>
						<article class="floatnews">
							<a class="image" href="#"><img src="images/news-6.jpg"/></a>
							<div class="info">
								<h3 class="name"><a href="#">FedExCup: Mục tiêu kiếm tiền của các golf thủ hàng đầu</a></h3>
								<p class="excerpt">Trong khuôn khổ các giải đấu golf chuyên nghiệp hiện nay có hai hệ thống tích điểm thưởng qua vòng loại các giải đấu, đó là FedExCup và RACE TO DUBAI.</p>
							</div>
						</article>
						<article class="floatnews">
							<a class="image" href="#"><img src="images/news-7.jpg"/></a>
							<div class="info">
								<h3 class="name"><a href="#">Ryder Cup 2016: Cơ hội phục thù của đội tuyển Mỹ</a></h3>
								<p class="excerpt">Không phải Olympic hay World Cup, Ryder Cup mới là sự kiện golf được khát khao đợi chờ nhất hành tinh. Giải đấu lần thứ 41 diễn ra từ 30/9 đến 2/10.</p>
							</div>
						</article>
						<article class="floatnews">
							<a class="image" href="#"><img src="images/news-8.jpg"/></a>
							<div class="info">
								<h3 class="name"><a href="#">Mỹ dẫn châu Âu 5-3 sau ngày thi đấu thứ nhất Ryder Cup</a></h3>
								<p class="excerpt">Dẫn 4-0 sau loạt trận foursome nhưng tuyển Mỹ sau đó để đối thủ rút ngắn tỷ số vì chỉ thắng được một trận fourball.</p>
							</div>
						</article>
						<article class="floatnews">
							<a class="image" href="#"><img src="images/news-9.jpg"/></a>
							<div class="info">
								<h3 class="name"><a href="#">Mỹ dẫn châu Âu ba điểm tại Ryder Cup 2016</a></h3>
								<p class="excerpt">Có thời điểm san hòa tỷ số, nhưng thất bại ở ba trận fourball cuối ngày khiến tuyển châu Âu bị đối thủ nới rộng khoảng cách trước ngày thi đấu cuối.</p>
							</div>
						</article>
						<article class="floatnews">
							<a class="image" href="#"><img src="images/news-1.jpg"/></a>
							<div class="info">
								<h3 class="name"><a href="#">Đội trưởng tuyển Ryder Cup Mỹ lo bị khán giả quay lưng</a></h3>
								<p class="excerpt">Davis Love III e ngại nếu ông và các đồng đội tiếp tục thất bại, người Mỹ sẽ không xem Ryder Cup nữa.</p>
							</div>
						</article>
						<article class="floatnews">
							<a class="image" href="#"><img src="images/news-2.jpg"/></a>
							<div class="info">
								<h3 class="name"><a href="#">FedExCup: Mục tiêu kiếm tiền của các golf thủ hàng đầu</a></h3>
								<p class="excerpt">Trong khuôn khổ các giải đấu golf chuyên nghiệp hiện nay có hai hệ thống tích điểm thưởng qua vòng loại các giải đấu, đó là FedExCup và RACE TO DUBAI.</p>
							</div>
						</article>
						<article class="floatnews">
							<a class="image" href="#"><img src="images/news-3.jpg"/></a>
							<div class="info">
								<h3 class="name"><a href="#">Ryder Cup 2016: Cơ hội phục thù của đội tuyển Mỹ</a></h3>
								<p class="excerpt">Không phải Olympic hay World Cup, Ryder Cup mới là sự kiện golf được khát khao đợi chờ nhất hành tinh. Giải đấu lần thứ 41 diễn ra từ 30/9 đến 2/10.</p>
							</div>
						</article>
						<article class="floatnews">
							<a class="image" href="#"><img src="images/news-4.jpg"/></a>
							<div class="info">
								<h3 class="name"><a href="#">Mỹ dẫn châu Âu 5-3 sau ngày thi đấu thứ nhất Ryder Cup</a></h3>
								<p class="excerpt">Dẫn 4-0 sau loạt trận foursome nhưng tuyển Mỹ sau đó để đối thủ rút ngắn tỷ số vì chỉ thắng được một trận fourball.</p>
							</div>
						</article>
						<article class="floatnews">
							<a class="image" href="#"><img src="images/news-5.jpg"/></a>
							<div class="info">
								<h3 class="name"><a href="#">Mỹ dẫn châu Âu ba điểm tại Ryder Cup 2016</a></h3>
								<p class="excerpt">Có thời điểm san hòa tỷ số, nhưng thất bại ở ba trận fourball cuối ngày khiến tuyển châu Âu bị đối thủ nới rộng khoảng cách trước ngày thi đấu cuối.</p>
							</div>
						</article>
					</div>
					<nav class="pagination-nav">
						<ul class="pagination">
							<li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-double-left"></i></a></li>
							<li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-left"></i></a></li>
							<li class="page-item"><a class="page-link" href="#">1</a></li>
							<li class="page-item"><a class="page-link" href="#">2</a></li>
							<li class="page-item active"><a class="page-link" href="#">3</a></li>
							<li class="page-item"><a class="page-link" href="#">4</a></li>
							<li class="page-item"><a class="page-link" href="#">5</a></li>
							<li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-right"></i></a></li>
							<li class="page-item"><a class="page-link" href="#"><i class="fa fa-angle-double-right"></i></a></li>
						</ul>
					</nav>
				</div>
				<div class="col-xs-12 col-md-4 widget-area">
					<section class="widget-news">
						<h4 class="widget-title">Khuyến mãi</h4>
						<div class="list-asidenews">
							<article class="asidenews">
								<a class="image" href="#"><img src="images/news-1.jpg"/></a>
								<h3 class="name"><a href="#">McIlroy bám sát Dustin Johnson tại Tour Championship</a></h3>
							</article>
							<article class="asidenews">
								<a class="image" href="#"><img src="images/news-2.jpg"/></a>
								<h3 class="name"><a href="news-detail.html">Golf thủ huyền thoại Arnold Palmer qua đời ở tuổi 87</a></h3>
							</article>
							<article class="asidenews">
								<a class="image" href="#"><img src="images/news-3.jpg"/></a>
								<h3 class="name"><a href="#">McIlroy ngược dòng ngoạn mục, giành FedEx Cup</a></h3>
							</article>
							<article class="asidenews">
								<a class="image" href="#"><img src="images/news-4.jpg"/></a>
								<h3 class="name"><a href="#">Bubba Watson được chọn là đội phó thứ năm của tuyển Ryder Cup Mỹ</a></h3>
							</article>
							<article class="asidenews">
								<a class="image" href="#"><img src="images/news-5.jpg"/></a>
								<h3 class="name"><a href="#">Đội trưởng tuyển Ryder Cup Mỹ lo bị khán giả quay lưng</a></h3>
							</article>
							<article class="asidenews">
								<a class="image" href="#"><img src="images/news-6.jpg"/></a>
								<h3 class="name"><a href="#">FedExCup: Mục tiêu kiếm tiền của các golf thủ hàng đầu</a></h3>
							</article>
						</div>
					</section>
					<section class="widget-news widget-scroll">
						<h4 class="widget-title">Góc kỹ thuật</h4>
						<div class="list-asidenews">
							<article class="asidenews">
								<a class="image" href="#"><img src="images/news-1.jpg"/></a>
								<h3 class="name"><a href="#">McIlroy bám sát Dustin Johnson tại Tour Championship</a></h3>
							</article>
							<article class="asidenews">
								<a class="image" href="#"><img src="images/news-2.jpg"/></a>
								<h3 class="name"><a href="#">Golf thủ huyền thoại Arnold Palmer qua đời ở tuổi 87</a></h3>
							</article>
							<article class="asidenews">
								<a class="image" href="#"><img src="images/news-3.jpg"/></a>
								<h3 class="name"><a href="#">McIlroy ngược dòng ngoạn mục, giành FedEx Cup</a></h3>
							</article>
							<article class="asidenews">
								<a class="image" href="#"><img src="images/news-4.jpg"/></a>
								<h3 class="name"><a href="#">Bubba Watson được chọn là đội phó thứ năm của tuyển Ryder Cup Mỹ</a></h3>
							</article>
							<article class="asidenews">
								<a class="image" href="#"><img src="images/news-5.jpg"/></a>
								<h3 class="name"><a href="#">Đội trưởng tuyển Ryder Cup Mỹ lo bị khán giả quay lưng</a></h3>
							</article>
							<article class="asidenews">
								<a class="image" href="#"><img src="images/news-6.jpg"/></a>
								<h3 class="name"><a href="#">FedExCup: Mục tiêu kiếm tiền của các golf thủ hàng đầu</a></h3>
							</article>
						</div>
					</section>
				</div>
			</div>
		</div>
	</div>
	<?php } ?>
	<?php include("include/inc_footer.php");?>
	<a class="scroll-top" href="#"><i class="fa fa-angle-up"></i></a>
</body>

<!-- Mirrored from html.willgroup.net/golfcity/news.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 21 Jan 2018 13:52:59 GMT -->
</html>