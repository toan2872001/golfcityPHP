<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Admin-Panel</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="../css/admin_style.css" >
         <!-- Google Font: Source Sans Pro -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <!-- Font Awesome Icons -->
        <link rel="stylesheet" href="../css1/all.min.css">
        <!-- IonIcons -->
        <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
        <!-- Theme style -->
        <link rel="stylesheet" href="../css1/adminlte.min1.css">
        <script src="../resources/ckeditor/ckeditor.js"></script>
        <!-- jQuery -->
        <script src="..js/jquery.min.js"></script>
        <!-- Bootstrap -->
        <script src="..js/bootstrap.bundle.min.js"></script>
        <!-- AdminLTE -->
        <script src="..js/adminlte.js"></script>
        <!-- OPTIONAL SCRIPTS -->
        <script src="..js/Chart.min.js"></script>
        <!-- AdminLTE for demo purposes -->
        <script src="..js/demo.js"></script>
        <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
        <script src="..js/dashboard3.js"></script>
    </head>
        <?php
        session_start();
        include '../connect_db.php';
        include '../function.php';
        $regexResult = checkPrivilege(); //Kiểm tra quyền thành viên
        if (!$regexResult) {
            echo "Bạn không có quyền truy cập chức năng này";
            exit;
        }
        if (!empty($_SESSION['current_user'])) { //Kiểm tra xem đã đăng nhập chưa?
            ?>
            
  <!-- Navbar -->
  <!-- <nav class="main-header navbar navbar-expand navbar-white navbar-light">
    
        <a class="nav-link">🏠 Home</a>
        <a class="nav-link">📱 Contact</a>
      </li>
    </ul>
    <ul class="navbar-nav ml-auto">
    <div class="container">
                    <div class="right-panel">
                        <img height="24" src="../images/home.png" />
                        <a href="../index.php">Trang chủ</a>
                        <img height="24" src="../images/logout.png" />
                        <a href="logout.php">Đăng xuất</a>
                    </div>
                </div>
            </div>
    </ul>
  </nav> -->
  <!-- /.navbar -->
  <!-- Main Sidebar Container -->
  <aside class="main-sidebar sidebar-dark-primary elevation-4">
    
    <!-- Brand Logo -->
    
    <a href="#" class="brand-link">
      <img src="../images/qt.jpg" alt="Admin Logo" class="brand-image img-circle elevation-3" style="opacity: .8">
      
      <span class="brand-text font-weight-light">Admin</span>
              
      
    </a>
        
    <!-- Sidebar -->
    <div class="sidebar">
      <!-- Sidebar user panel (optional) -->
      <div class="user-panel mt-3 pb-3 mb-3 d-flex">
      <a href="../index.php"><img height="24"  src="../images/home.png" /></a> 
      <a href="logout.php"><img height="24" src="../images/logout.png" /></a>
        <div class="image">
          <!-- <img src="dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image"> -->
        </div>
        <div class="info">
        </div>
      </div>

      <!-- SidebarSearch Form -->
      <div class="form-inline">
        <div class="input-group" data-widget="sidebar-search">
          <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
          <div class="input-group-append">
            <button class="btn btn-sidebar">
              <i>🔎</i>
            </button>
          </div>
        </div>
      </div>

      <!-- Sidebar Menu -->
      <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
          <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
          <li class="nav-item menu-open">
            <ul class="nav nav-treeview">
            <li class="nav-item">
            <a href="dashboard.php"  class="nav-link">
              <!-- <i class="nav-icon fas fa-copy"></i> -->
                                <?php if (checkPrivilege('member_listing.php')) { ?>
                                    <i>📊</i>
                                    <p >Thông tin hệ thống</p>
                                <?php } ?>
            
              
            <a href="news_listing.php" class="nav-link">
                                <?php if (checkPrivilege('member_listing.php')) { ?>
                                    <i>🗞</i>
                                    <p>Tin Tức</p>
                                <?php } ?>
         
            <a href="product_listing.php" class="nav-link">
                            <?php if (checkPrivilege('member_listing.php')) { ?>
                             <i>️⛳️</i>
                            <p >Sản Phẩm</p>
             <span class="right badge badge-danger">New</span>
      <?php } ?>
            <a href="order_listing.php" class="nav-link">
                                <?php if (checkPrivilege('member_listing.php')) { ?>
                                    <i>️🛒</i>
                                    <p >Đơn hàng</p>
                                <?php } ?>
            <a href="order_online.php" class="nav-link">
                                <?php if (checkPrivilege('member_listing.php')) { ?>
                                    <i>️🛒</i>
                                    <p >Đơn hàng Online</p>
                                <?php } ?>
            <a href="member_listing.php" class="nav-link">  
                                <?php if (checkPrivilege('member_listing.php')) { ?>
                                    <i>👩‍👩‍👦‍👦</i>
                                    <p >Quản lý thành viên</p>
                                <?php } ?>
            </a>
            <a href ="#" class ="nav-link">
            <?php if (checkPrivilege('member_listing.php')) { ?>
                                    <i></i>
                                    <p >Báo cáo thống kê</p>
                                <?php } ?>
            </a>
                <?php } ?>
    </aside>
    </html>