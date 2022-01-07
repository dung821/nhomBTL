<?php
    // Xử lý giá trị GỬI TỚI
    if(isset($_POST['txtidphim'])){
        $id_phim= $_POST['txtidphim'];
    }
    if(isset($_POST['txttenphim'])){
        $name= $_POST['txttenphim'];
    }
    $theloai = $_POST['txttheloai'];
    $ndphim = $_POST['txtndphim'];
    
    // Bước 01: Kết nối Database Server
    $conn = mysqli_connect('localhost','root','','db_demo');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    // Bước 02: Thực hiện truy vấn
    $sql = "UPDATE videos SET name='$name', ";
    // echo $sql;

    $ketqua = mysqli_query($conn,$sql);
    
    if(!$ketqua){
        header("location: error.php"); //Chuyển hướng lỗi
    }else{
        header("location: admin.php"); //Chuyển hướng lại Trang Quản trị
    }

    // Bước 03: Đóng kết nối
    mysqli_close($conn);

?>