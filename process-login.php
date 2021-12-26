<?php
    // Tạo SESSION: mặc định mỗi phiên làm việc có thời hạn 24phut
    session_start();

    //login.php TRUYỀN DỮ LIỆU SANG: NHẬN DỮ LIỆU TỪ login.php gửi sang
    if(isset($_POST['btnSignIn'])){
        $email = $_POST['txtEmail'];
        $pass  = $_POST['txtPass'];
        //Ở đây còn phải kiểm tra người dùng đã nhập chưa

        // Bước 01: Kết nối Database Server
        $conn = mysqli_connect('localhost','root','','dang_nhap');
        if(!$conn){
            die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
        }
        // Bước 02: Thực hiện truy vấn
        $sql = "SELECT * FROM db_login WHERE Email = ? OR SoDienThoai= ? ";
        // Ở đây còn có các vấn đề về tính hợp lệ dữ liệu nhập vào FORM
        // Nghiêm trọng: lỗi SQL Injection

        $stmt = mysqli_prepare($conn,$sql);
        $use=$email;
        mysqli_stmt_bind_param($stmt,"ss",$email,$use);
        //echo "haha";   ----> Kiểm tra đầu ra

        if(mysqli_stmt_execute($stmt)){
            //lấy ra thông tin chứa bản ghi tương ứng email
            mysqli_stmt_bind_result($stmt, $mand, $tennd, $emailnd, $matkhand);
        
            if(mysqli_stmt_fetch($stmt)){
                if(password_verify($pass, $matkhaund)){
                    $_SESSION['isLoginOK'] = $email;
                    header("location:index.html"); // liên kết hay là chuyển sang trang admin
                }
                else{
                    $error ="Mật khẩu không chính xác";
                    header("location: index.html = $error")    // Hiển thị thông báo lỗi
                }
            }
        // Bước 03: Đóng kết nối
            mysqli_close($conn);
        }else{
             header("location:login.html");
        }
?>
        // $result = mysqli_query($conn,$sql);
       // if(mysqli_num_rows($result) > 0){
            // CẤP THẺ LÀM VIỆC
        //    $_SESSION['isLoginOK'] = $email;
         //   header("location: admin.php"); //Chuyển hướng về Trang quản trị
        //}else{
          //  $error = "Bạn nhập thông tin Email hoặc mật khẩu chưa chính xác";
           // header("location: login.php?error=$error"); //Chuyển hướng, hiển thị thông báo lỗi
        //}
            /*
            if(mysqli_stmt_fetch($stmt)){
                if(password_verify($pass, $matkhaund)){
                    $_SESSION['isLoginOK'] = $email;
                    header("location:admin.php"); // liên kết hay là chuyển sang trang admin

                }
                else{
                    $error ="Mật khẩu không chính xác";
                    header("location: login.php?error = $error")    // Hiển thị thông báo lỗi
                 }
            }
            else{
                $error="Email không tồn tại";
                header("location: login.php?error = $error");
            }*/

