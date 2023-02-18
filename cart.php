<?php session_start(); ?>
<!doctype html>
<!--[if IE]><![endif]-->
<!--[if lt IE 7 ]> <html class="ie6">    <![endif]-->
<!--[if IE 7 ]>    <html class="ie7">    <![endif]-->
<!--[if IE 8 ]>    <html class="ie8">    <![endif]-->
<!--[if IE 9 ]>    <html class="ie9">    <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html><!--<![endif]-->

<!-- Mirrored from html.willgroup.net/golfcity/cart.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 21 Jan 2018 13:52:58 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Giỏ hàng</title>
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
	
	<?php
        include './connect_db.php';
        if (!isset($_SESSION["cart"])) {
            $_SESSION["cart"] = array();
        }
        $GLOBALS['changed_cart'] = false;
        $error = false;
        $success = false;
        if (isset($_GET['action'])) {

            function update_cart($con, $add = false) {
                foreach ($_POST['quantity'] as $id => $quantity) {
                    if ($quantity == 0) {
                        unset($_SESSION["cart"][$id]);
                    } else {
                        if (!isset($_SESSION["cart"][$id])) {
                            $_SESSION["cart"][$id] = 0;
                        }
                        
                        if ($add) {
                            $_SESSION["cart"][$id] += $quantity;
                        } else {
                            $_SESSION["cart"][$id] = $quantity;
                        }
                        //Kiểm tra số lượng sản phẩm tồn kho
                        $addProduct = mysqli_query($con, "SELECT `quantity` FROM `product` WHERE `id` = " . $id);
                        $addProduct = mysqli_fetch_assoc($addProduct);
                        if ($_SESSION["cart"][$id] > $addProduct['quantity']) {
                            $_SESSION["cart"][$id] = $addProduct['quantity'];
                            $GLOBALS['changed_cart'] = true;
                        }
                    }
                }
            }

            switch ($_GET['action']) {
                case "add":
                    update_cart($con, true);
                    if ($GLOBALS['changed_cart'] == false) {
                        header('Location: ./cart.php ');
                    }
                    break;
                case "delete":
                    if (isset($_GET['id'])) {
                        unset($_SESSION["cart"][$_GET['id']]);
                    }
                    header('Location: ./cart.php');
                    break;
                case "submit":
                    if (isset($_POST['update_click'])) { //Cập nhật số lượng sản phẩm
                        update_cart($con);
                        header('Location: ./cart.php');
                    } elseif ($_POST['order_click']) { //Đặt hàng sản phẩm
                        if (empty($_POST['name'])) {
                            $error = "Bạn chưa nhập tên của người nhận";
                        } elseif (empty($_POST['phone'])) {
                            $error = "Bạn chưa nhập số điện thoại người nhận";
                        } elseif (empty($_POST['address'])) {
                            $error = "Bạn chưa nhập địa chỉ người nhận";
                        } elseif (empty($_POST['quantity'])) {
                            $error = "Giỏ hàng rỗng";
                        }
                        if ($error == false && !empty($_POST['quantity'])) { //Xử lý lưu giỏ hàng vào db
                            $products = mysqli_query($con, "SELECT * FROM `product` WHERE `id` IN (" . implode(",", array_keys($_POST['quantity'])) . ")");
                            $total = 0;
                            $orderProducts = array();
                            $updateString = "";
                            while ($row = mysqli_fetch_array($products)) {
                                $orderProducts[] = $row;
                                if ($_POST['quantity'][$row['id']] > $row['quantity']) {
                                    $_POST['quantity'][$row['id']] = $row['quantity'];
                                    $GLOBALS['changed_cart'] = true;
                                } else {
                                    $total += $row['price'] * $_POST['quantity'][$row['id']];
                                    $updateString .= " when id = ".$row['id']." then quantity - ".$_POST['quantity'][$row['id']];
                                }
                            }
                            if ($GLOBALS['changed_cart'] == false) {
                                $updateQuantity = mysqli_query($con, "update `product` set quantity = CASE".$updateString." END where id in (".implode(",", array_keys($_POST['quantity'])).")");
                                $insertOrder = mysqli_query($con, "INSERT INTO `orders` (`id`, `name`, `phone`, `address`, `note`, `total`, `created_time`, `last_updated`) VALUES (NULL, '" . $_POST['name'] . "', '" . $_POST['phone'] . "', '" . $_POST['address'] . "', '" . $_POST['note'] . "', '" . $total . "', '" . time() . "', '" . time() . "');");
                                $orderID = $con->insert_id;
                                $insertString = "";
                                foreach ($orderProducts as $key => $product) {
                                    $insertString .= "(NULL, '" . $orderID . "', '" . $product['id'] . "', '" . $_POST['quantity'][$product['id']] . "', '" . $product['price'] . "', '" . time() . "', '" . time() . "')";
                                    if ($key != count($orderProducts) - 1) {
                                        $insertString .= ",";
                                    }
                                }
                                $insertOrder = mysqli_query($con, "INSERT INTO `order_detail` (`id`, `order_id`, `product_id`, `quantity`, `price`, `created_time`, `last_updated`) VALUES " . $insertString . ";");
                                $success = "Đặt hàng thành công";
                                unset($_SESSION['cart']);
                            }
                        }
                    }
                    break;
            }
        }
		
        if (!empty($_SESSION["cart"])) {
            $products = mysqli_query($con, "SELECT * FROM `product` WHERE `id` IN (" . implode(",", array_keys($_SESSION["cart"])) . ")");
        }
//        $result = mysqli_query($con, "SELECT * FROM `product` WHERE `id` = ".$_GET['id']);
//        $product = mysqli_fetch_assoc($result);
//        $imgLibrary = mysqli_query($con, "SELECT * FROM `image_library` WHERE `product_id` = ".$_GET['id']);
//        $product['images'] = mysqli_fetch_all($imgLibrary, MYSQLI_ASSOC);
        ?>
	<div class="module-cart">
		<div class="container">
            <div class="cart-header clearfix">
                <h1 class="cart-title"><a href="home.php">Trang chủ</a></h1>
                <a class="cart-back" href="home.php"><i class="fa fa-angle-left"></i>
				<?php if (!empty($error)) { ?> 
                	<div id="notify-msg">
                    	<?= $error ?>. <a href="javascript:history.back()">Quay lại</a>
                	</div>
            	<?php } elseif (!empty($success)) { ?>
                	<div id="notify-msg">
                   		 <?= $success ?>. <a href="home.php">Tiếp tục mua hàng</a>
                	</div>
				<?php } else { ?>
                <?php if ($GLOBALS['changed_cart']) { ?>
                    <h3>Số lượng sản phẩm trong giỏ hàng đã thay đổi, do lượng sản phẩm tồn kho không đủ. Vui lòng <a href="cart1.php">tải lại</a> giỏ hàng</h3>
					<?php } else { ?>
                    <form id="cart-form" action="cart1.php?action=submit" method="POST">
            </div>

			
            <div class="cart-content">
				<div class="row m-x-0">
					<div class="col-xs-12 col-lg-8 p-x-0">
						<div class="cart-info">
							<h6 class="title">Danh sách sản phẩm:</h6>
							<?php
								if (!empty($products)) {
								$total = 0;
								$num = 1;
								while ($row = mysqli_fetch_array($products)) {
							?>
							<ul class="cart">
								<li class="cart-item">
									<a class="image" href="#"><img src="<?= $row['image'] ?>" /></a>
									<div class="col-name">
										<h3 class="name"><a href="#"><?= $row['name'] ?></a></h3>
										<div class="form-inline quantity">
											<label>Số lượng:</label>
											<input class="form-control" type="text" value="<?= $_SESSION["cart"][$row['id']] ?>" name="quantity[<?= $row['id'] ?>]" />
										</div>
									</div>
									<div class="col-price">
										<label>Thành tiền</label>
										<div class="price"><?= number_format($row['price'] * $_SESSION["cart"][$row['id']], 0, ",", ".") ?></div>
									</div>
									<a class="delete" href="#"><a href="cart1.php?action=delete&id=<?= $row['id'] ?>">Xóa</a></a>
								</li>
							</ul>
							<?php
                                    $total += $row['price'] * $_SESSION["cart"][$row['id']];
                                    $num++;
                                }
                                ?>
								<?php
                            }
                            ?>
							<div id="form-button">
                            <input type="submit" name="update_click" value="Cập nhật" />
                        </div>
							
							<a class="cart-back" href="#"><i class="fa fa-angle-left"></i>Chọn thêm sản phẩm khác</a>
						</div>
					</div>
					<div class="col-xs-12 col-lg-4 p-x-0">
						<div class="module-checkout">
							<div class="block">
								<!-- <h6 class="title">Nhập địa chỉ nhận và tính phí giao hàng</h6>
								<div class="address">
									<div class="form-group">
										<select class="form-control custom-select">
											<option value="">Chọn Tỉnh/Thành</option>
											<option value="hcm">Hồ Chí Minh</option>
											<option value="hn">Hà Nội</option>
										</select>
									</div>
									<div class="form-group">
										<select class="form-control custom-select">
											<option value="">Chọn Quận/Huyện</option>
											<option value="hcm">Hồ Chí Minh</option>
											<option value="hn">Hà Nội</option>
										</select>
									</div>
									<div class="form-group">
										<input class="form-control" type="text" placeholder="Nhập số nhà tên đường">
									</div>
								</div> -->
								<p class="shipfee">
									Phí giao hàng:<span class="amount">?</span>
								</p>
								<p class="freeship">Ưu đãi tháng <br>Giảm 100% phí giao hàng cho đơn hàng từ 100.000₫</p>
								<div class="separator"></div>
								<div class="cost">
									Tiền hàng: <span class="amount"><?= number_format($total, 0, ",", ".") ?></span>
								</div>
								<div class="total">
									Tổng tiền: <small>(chưa bao gồm phí giao hàng)</small> <span class="amount"><?= number_format($total, 0, ",", ".") ?></label>
								</div>
							</div>
							
							<!-- <div class="block">
								<h6 class="title">Đăng nhập</h6>
								<div class="form-group">
									<input class="form-control" type="email" placeholder="Email">
								</div>
								<div class="form-group">
									<input class="form-control" type="password" placeholder="Mật khẩu">
								</div>
								<div class="form-group">
									<button class="btn btn-primary btn-block" type="button">Đăng nhập</button>
								</div>
							</div> -->
							<div class="block">
								<h6 class="title">Thông tin mua hàng</h6>
								<!-- <div class="form-group">
									<label class="custom-control custom-radio">
										<input id="radio1" name="radio" type="radio" class="custom-control-input">
										<span class="custom-control-indicator"></span>
										<span class="custom-control-description">Anh</span>
									</label>
									<label class="custom-control custom-radio">
										<input id="radio2" name="radio" type="radio" class="custom-control-input">
										<span class="custom-control-indicator"></span>
										<span class="custom-control-description">Chị</span>
									</label>
								</div> -->
								<div class="form-group">
									<input class="form-control" type="text" name="name" placeholder="Họ và tên" >
								</div>
								<div class="form-group">
									<input class="form-control" type="number" name="phone" placeholder="Số điện thoại">
								</div>
								<div class="form-group">
									<input class="form-control" type="text" name="address" placeholder="Địa chỉ">
								</div>
								<div class="form-group">
									<textarea class="form-control" name="note" placeholder="Yêu cầu của bạn"></textarea>
								</div>
								<div>
									<input class="btn btn-quick-buy" name="order_click" type="submit" value="Đặt hàng" />
								</div>
								<div> 
									<h5 style="margin-top:20px" > Thanh toán VNPAY</h5>
                        				<button class="btn btn-quick-buy" >
                            				<a class="image" href="vnpay_php">
											<img src="images/VNPAY.png" />
										</button>
                        		</div>
                        	</div>
						</div>
					</div>
				</div>
            </div>
			<?php } ?>
            <?php } ?>
        </div>
	</div>
	<?php include("include/inc_footer.php");?>

	<a class="scroll-top" href="#"><i class="fa fa-angle-up"></i></a>
</body>
</html>