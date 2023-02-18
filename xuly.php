<html>
	<head>
		<title>Đăng ký thành viên</title>
	</head>
	<body>
		<?php
		require_once("connect_db.php");
		if (isset($_POST["btn_submit"])) {
  			//lấy thông tin từ các form bằng phương thức POST
  			$username = $_POST["username"];
  			$password = $_POST["password"];
 			 $phone = $_POST["phone"];
  			$email = $_POST["email"];
  			//Kiểm tra điều kiện bắt buộc đối với các field không được bỏ trống
			  if ($username == "" || $password == "" || $phone == "" || $email == "") {
                   echo '<script language="javascript">alert("Bạn vui lòng nhập đầy đủ thông tin"); window.location="register.php";</script>';
  			}else{
  					// Kiểm tra tài khoản đã tồn tại chưa
  					$sql="select * from member where username='$username'";
					$kt=mysqli_query($con, $sql);
					if(mysqli_num_rows($kt)  > 0){
						
                        echo '<script language="javascript">alert("Tài khoản đã tồn tại"); window.location="register.php";</script>';
					}else{
						//thực hiện việc lưu trữ dữ liệu vào db
	    				$sql = "INSERT INTO member(
	    					username,
	    					password,
	    					phone,
						    email
	    					) VALUES (
	    					'$username',
	    					'$password',
						    '$phone',
	    					'$email'
	    					)";
					    // thực thi câu $sql với biến conn lấy từ file connection.php
   						mysqli_query($con,$sql);
				   		echo '<script language="javascript">alert("Đăng ký thành công!"); window.location="register.php";</script>';
					}
									    
					
			  }
	}
	?>