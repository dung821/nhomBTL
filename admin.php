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
        <h5 class="text-center text-primary mt-5">Danh sách phim</h5>
        <div>
            <a class="btn btn-primary" href="add_employee.php">Thêm</a>
        </div>
        <table class="table">
            <thead>
                <tr>
                    <th scope="col">ID Phim</th>
                    <th scope="col">Tên Phim</th> 
                    <th scope="col">Thể loại</th>
                    <th scope="col">Nội dụng</th>
                    <th scope="col">Nơi Lưu Trữ</th>
                    <th scope="col">Sửa</th>
                    <th scope="col">Xóa</th>
                </tr>
            </thead>
            <tbody>
                <!-- Vùng này là Dữ liệu cần lặp lại hiển thị từ CSDL -->
                <?php
                    // Bước 01: Kết nối Database Server
                    $conn = mysqli_connect('localhost','root','','db_demo');
                    if(!$conn){
                        die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
                    }
                    // Bước 02: Thực hiện truy vấn
                    $sql = "SELECT id, name, theloai, ND location FROM videos ";
                    $result = mysqli_query($conn,$sql);
                    // Bước 03: Xử lý kết quả truy vấn
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){
                ?>
                            <tr>
                                <th scope="row"><?php echo $row['id']; ?></th>
                                <td><?php echo $row['name']; ?></td>
                                <td><?php echo $row['theloai']; ?></td>
                                <td><?php echo $row['ND']; ?></td>
                                <td><?php echo $row['location']; ?></td>
                              
                                <td><a href="update_videos.php?id=<?php echo $row['id']; ?>"><i class="bi bi-pencil-square"></i></a></td>
                                <td><a href="delete_videos.php?id=<?php echo $row['id']; ?>"><i class="bi bi-trash"></i></a></td>
                            </tr>
                <?php
                        }
                    }
                    // Bước 04: Đóng kết nối Database Server
                    mysqli_close($conn);
                ?>
                
                
            </tbody>
            </table>
    </div>    
    </main>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>