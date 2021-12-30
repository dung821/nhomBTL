<?php
    // Tạo SESSION: mặc định mỗi phiên làm việc có thời hạn 24phut
    session_start();

    //login.php TRUYỀN DỮ LIỆU SANG: NHẬN DỮ LIỆU TỪ login.php gửi sang
    if(isset($_POST['btnSignIn'])){
        $email = $_POST['txtEmail'];
        $pass  = $_POST['txtPass'];
        //Ở đây còn phải kiểm tra người dùng đã nhập chưa

        // Bước 01: Kết nối Database Server
        $conn = mysqli_connect('localhost','root','','netflix');
        if(!$conn){
            die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
        }
        // Bước 02: Thực hiện truy vấn
        $sql = "SELECT * FROM db_login WHERE Gmail = '$email' OR SoDienThoai='$email' ";
        // Ở đây còn có các vấn đề về tính hợp lệ dữ liệu nhập vào FORM
        // Nghiêm trọng: lỗi SQL Injection

        $result=mysqli_query($conn,$sql);
        if(mysqli_num_rows($result)>0){
            // lấy thông tin tương ứng của Gmail
            $row = mysqli_fetch_assoc($result);
            //$password_hash =$row['MatKhau'];
            
            if(password_verify($pass,$password_hash)){
               $_SESSION['isLoginOK']=$email;
                header("location:index.html");
                
            }else{
                $error="Mật khẩu không chính xác";
                header("location:login.php?error=$error");
            }
        }else {
            $error="Gmail không tồn tại";
            header("location:login.phph?error=$error");
        }
        
        // Bước 03: Đóng kết nối
        mysqli_close($conn);
    }else{
        header("location:login.php");
    }
?>