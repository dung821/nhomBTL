<?php
    // Tạo SESSION: mặc định mỗi phiên làm việc có thời hạn 24phut
    session_start();

    //login.php TRUYỀN DỮ LIỆU SANG: NHẬN DỮ LIỆU TỪ login.php gửi sang
    if(isset($_POST['btnSignIn'])){
        $email = $_POST['txtEmail'];
        $pass  = $_POST['txtPass'];
        //Ở đây còn phải kiểm tra người dùng đã nhập chưa

        // Bước 01: Kết nối Database Server
        $conn = mysqli_connect('localhost','root','','dhtl_danhba');
        if(!$conn){
            die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
        }
        // Bước 02: Thực hiện truy vấn
        $sql = "SELECT * FROM db_nguoidung WHERE email = ? OR tendangnhap = ?";
        //kiểm tra email có tồn tại k có thì lấy pass
        // Ở đây còn có các vấn đề về tính hợp lệ dữ liệu nhập vào FORM
        // Nghiêm trọng: lỗi SQL Injection
        $stmt = mysqli_prepare($conn,$sql);
        $user = $email;
        mysqli_stmt_bind_param($stmt,"ss",$email,$user);
        if (mysqli_stmt_execute($stmt)) {
            // Lấy ra bản ghi chứa thông tin tương ứng email 
           mysqli_stmt_bind_result($stmt,$mand,$tennd,$emailnd,$matkhaund);
           if (mysqli_stnt_execute($result) >0) {
               if (password_verify($pass, $matkhaund)) {
                   $_SESSION['isLoginOK'] = $email;
                   header("location: admin.php");
               } else {
                $error = "Mật khẩu không chính xác";
                header("location: login.php?error = $error"); // chuyển hướng, hiển thị thông báo lỗi 
               }
               
           } else 
           {
                $error = "Email không tồn tại";
                header("location: login.php?error = $error"); // chuyển hướng, hiển thị thông báo lỗi 
           }
           
        } else {
            $error = "Email không tồn tại";
            header("location: login.php?error = $error"); // chuyển hướng, hiển thị thông báo lỗi 
        }
        
    // Bước 03: Đóng kết nối
    mysqli_close($conn);    
?>