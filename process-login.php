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
        $conn = mysqli_connect('localhost','root','','btlweb');
        if(!$conn){
            die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
        }
        // Bước 02: Thực hiện truy vấn
        $sql = "SELECT * FROM nguoidung WHERE GMAIL = ? AND MK =? ";
        // Ở đây còn có các vấn đề về tính hợp lệ dữ liệu nhập vào FORM
        // Nghiêm trọng: lỗi SQL Injection
        $stmt = mysqli_prepare($conn,$sql);
        // $user=$email;
        mysqli_stmt_bind_param($stmt,"ss",$email,$pass);

        if(mysqli_stmt_execute($stmt)){
            // lấy thông tin tương ứng của Gmail
            mysqli_stmt_bind_result($stmt,$email,$pass);

            if(mysqli_stmt_fetch($stmt)){
                // if(password_verify($pass,$matkhaund)){
                    $_SESSION['isLoginOK']=$email;
                     header("location:index.php");
                     
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
            
        }
        
        // Bước 03: Đóng kết nối
        mysqli_close($conn);
    }else{
        header("location:login.php");
    }
?>