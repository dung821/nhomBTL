<?php
    // deleteEmployee: NHẬN DỮ LIỆU TỪ admin.php gửi sang
    $idphim = $_GET['id'];

    // Bước 01: Kết nối Database Server
    $conn = mysqli_connect('localhost','root','','db_demo');
    if(!$conn){
        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
    }
    // Bước 02: Thực hiện truy vấn
    $sql = "SELECT * FROM videos WHERE id = '$idphim'";

    $result = mysqli_query($conn,$sql); //Nó chỉ ra về 1 bản ghi, mà mình chỉ cần lấy 1 bản ghi thôi

    // Bước 03: Xử lý kết quả
    if(mysqli_num_rows($result) > 0){
        $row = mysqli_fetch_assoc($result);
        $idphim = $row['id'];
    }

    // Bước 04: Đóng kết nối
    mysqli_close($conn);



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.2/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
    <header>
        <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Netflix</a>
                <form class="d-flex">
                    <button class="btn btn-outline-success" type="submit">Thoát</button>
                </form>
                </div>
            </div>
            </nav>
        </div>
    </header>
    <main>
    <div class="container">
        <h5 class="text-center text-primary mt-5">Cập nhật thông tin phim</h5>
        <!-- Form thêm Dữ liệu nhân viên -->
        <form action="process-update.php" method="post">

            <div class="form-group">
                <label for="txttenphim">Tên phim</label>
                <input type="text" class="form-control" id="txttenphim" name="txttenphim" placeholder="Nhập tên phim" value="<?php echo $row['name']; ?>">
                <!-- <small id="txtHoTenHelp" class="form-text text-muted">Có thể dùng nó hiển thị thông báo lỗi hoặc gợi ý</small> -->
            </div>
            <div class="form-group">
                <label for="txtndphim">Nội dung phim</label>
                <input type="text" class="form-control" id="txtndphim" name="txtndphim" placeholder="Nhập nội dung" value="<?php echo $row['ND']; ?>">
                <!-- <small id="txtHoTenHelp" class="form-text text-muted">Có thể dùng nó hiển thị thông báo lỗi hoặc gợi ý</small> -->
            </div>
            <div class="form-group">
                <label for="exampleFormControlSelect2">Thể loại</label>
                <select class="form-control" id="theloai" name="theloai>
                     Truy vấn dữ liệu để Hiển thị lựa chọn Đơn vị 
                    <?php 
                        // Bước 01: Kết nối Database Server
                       $conn = mysqli_connect('localhost','root','','db_demo');
                        if(!$conn){
                            die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
                        }
                        // Bước 02: Thực hiện truy vấn
                        $sql = "SELECT * FROM videos";

                        $result = mysqli_query($conn,$sql);

                        // Bước 03: Xử lý kết quả truy vấn
                        if(mysqli_num_rows($result)){
                            while($row = mysqli_fetch_assoc($result)){
                                if($row['theloai'] == $theloai){
                                    echo '<option selected value="'.$row['id'].'">'.$row['theloai'].'</option>'; // ở csdl
                                }else{
                                    echo '<option value="'.$row['id'].'">'.$row['theloai'].'</option>';
                                }

                            }
                        }

                        // Bước 03: Đóng kết nối
                        mysqli_close($conn);
                    ?>
               
                </select>
            </div> -->
            <button type="submit" class="btn btn-primary mt-3">Lưu lại</button>
        </form>
    </div>    
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>