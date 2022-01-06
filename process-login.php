<?php
    // Tạo SESSION: mặc định mỗi phiên làm việc có thời hạn 24phut
    session_start();

    //login.php TRUYỀN DỮ LIỆU SANG: NHẬN DỮ LIỆU TỪ login.php gửi sang
    if(isset($_POST['btnSignIn'])){
        $email = $_POST['txtEmail'];
        $pass  = $_POST['txtPass'];
        //Ở đây còn phải kiểm tra người dùng đã nhập chưa
        //header("location:login.php?error = $email");
        // Bước 01: Kết nối Database Server
        $conn = mysqli_connect('localhost','root','','netflix');
        if(!$conn){
            die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
        }
        // Bước 02: Thực hiện truy vấn
       /*  $sql = "SELECT * FROM nguoidung WHERE GMAIL = ?";
        // Ở đây còn có các vấn đề về tính hợp lệ dữ liệu nhập vào FORM
        // Nghiêm trọng: lỗi SQL Injection
        $stmt = mysqli_prepare($conn,$sql);
        // $user=$email;
        mysqli_stmt_bind_param($stmt,$email,$pass);

        if(mysqli_stmt_execute($stmt)){
            // lấy thông tin tương ứng của Gmail
            mysqli_stmt_bind_result($stmt,$email,$pass);

            if(mysqli_stmt_fetch($stmt)){
                // if(password_verify($pass,$matkhaund)){
                    $_SESSION['isLoginOK']=$email;
                     header("location:index.html");
                     
                //  }
                //  else
                //  {
                //      $error="Mật khẩu không chính xác";
                //      header("location:login.php?error=$error");
                //  }
            }else {
                $error="Gmail không tồn tại";
                header("location:login.php?error=$error");
            }
            
        }*/
        //mà người dùng cố tình thêm vào để tấn công theo phương thức sql injection
		$email = strip_tags($email);
		$email = addslashes($email);
		$pass = strip_tags($pass);
		$pass = addslashes($pass);
		if ($email == "" || $pass =="") {
			echo "username hoặc password bạn không được để trống!";
		}else{
			$sql = "select * from db_login where Gmail = '$email' and MatKhau = '$pass' ";
			$query = mysqli_query($conn,$sql);
			$num_rows = mysqli_num_rows($query);
			if ($num_rows==0) {
                $error="Mật khẩu không chính xác";
                 header("location:login.php?error=$error");
				// echo "tên đăng nhập hoặc mật khẩu không đúng !";
			}else{
				//tiến hành lưu tên đăng nhập vào session để tiện xử lý sau này
				$_SESSION['Gmail'] = $email;
                // Thực thi hành động sau khi lưu thông tin vào session
                // ở đây mình tiến hành chuyển hướng trang web tới một trang gọi là index.php
                header('Location: index.html');
			}
		}
        
        // Bước 03: Đóng kết nối
        mysqli_close($conn);
    }else{
        header("location:login.php");
    }
?>
