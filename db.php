<?php
    $servername='localhost';
    $username='root';
    $password='';
    $dbname = "netflix";
    $conn=mysqli_connect($servername,$username,$password,$dbname);
    if(!$conn){
      die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
?>