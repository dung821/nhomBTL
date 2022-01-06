<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>NextFlixt</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <!-- tên sv -->
    <div> <marquee><h3>Nguyễn Văn Dũng - Mai Văn Định - Hoàng Thị Hưng Hiền  - 61TH.</h3></marquee></div>
       <!-- back groud -->
    <video id="video_background" preload="auto" autoplay="true"  muted volume="0">

        <source src="videobackgroud.mp4" type="video/webm"/>
        
        <source src="videobackgroud.mp4" type="video/ogg ogv"; codecs="theora, vorbis"/>
        
        <source src="videobackgroud.mp4" type="video/mp4"/>
        
        </video>
    <!-- nav bar home -->
    <!-- <div class="container-fluid">
        <div class="row__posters">
             -->
            <div class="col-md-6">
                <div class="nav" id="nav">
                <nav class="navbar navbar-expand-lg navbar-light ">
                    <!-- logo nextflixt -->
                    <img src="image/netflix-logo.png" alt="" class="nav__logo">
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                        <span class="navbar-toggler-icon"></span>
                    </button> <a class="navbar-brand" href="#">TRANG CHỦ</a>
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                 <a class="nav-link" href="#">PHIM<span class="sr-only">(T.HÌNH)</span></a>
                            </li>
                            <li class="nav-item">
                                 <a class="nav-link" href="#">PHIM</a>
                            </li>
                            <li class="nav-item">
                                 <a class="nav-link" href="#">MỚI & PHỔ BIẾN</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">DANH SÁCH CỦA TÔI</a>
                           </li>
                           <!-- logo avata -->
                           <img src="image/netflix-avatar.png" alt="" class="nav__avata">
                        </ul>
                       
                      
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- avata, logo nextflixt -->
<!-- <div class="nav" id="nav">
<img src="image/netflix-logo.png" alt="" class="nav__logo">
    
    <img src="image/netflix-avatar.png" alt="" class="nav__avata">
</div> -->
    <!--header -->
    <div class="banner">
        <div class="banner__contents">
            <h1 class="banner__tile"> Bam vao day</h1>
            <div class="banner__buttons">
                <button class="banner__button">XEM</button>
                
                <button class="banner__button">THÔNG TIN</button>
            </div>
<div class="banner__description">
                to carry out the.....
            </div>
        </div>
        <!-- buttom  -->
        <div class="banner--fadeBottom"></div>

    </div>
    <!--phiml-->
    <div class="row" style="margin-top:111px;">
        <h2>NextFlixt</h2>
        <div class="row__posters">
        <?php 
             $conn = mysqli_connect('localhost','root','','btlweb');
             if(!$conn){
                 die("Kết nối thất bại. Vui lòng kiểm tra lại các thông tin máy chủ");
             }
             $result = mysqli_query($conn,"SELECT * FROM videos WHERE ID = '1' " );
             $row = mysqli_fetch_assoc($result);
             $link = "".$row['LINK']."";
        ?>
            <div  class="row__poster" ><video height="auto" target="_blank" width="340px" src="<?php echo $link ?>" type="video/mp4" controls></video></div>
            <div  class="row__poster"><video height="auto" target="_blank" width="340px" src="./image/Khi bạn nắm quyền sinh tử trong tay - review phim Cuốn Sổ Tử Thần 1.mp4" type="video/mp4" controls></video></div>
            <div  class="row__poster"><video height="auto" target="_blank" width="340px" src="./image/3.mp4" type="video/mp4" controls></video></div>
            <div  class="row__poster"><video height="auto" target="_blank" width="340px" src="./video-1640698417.mp4" type="video/mp4" controls></video></div>
<br>
        </div>
    </div>


  
     <!--phim hot-->
     <div class="row">
        <h2>Phim Hot</h2>
        <div class="row__posters">
            <div class="row__posters">
                <div  class="row__poster" ><video height="auto" target="_blank" width="340px" src="./video-1640698417.mp4" type="video/mp4" controls></video></div>
                <div  class="row__poster"><video height="auto" target="_blank" width="340px" src="./video-1640698417.mp4" type="video/mp4" controls></video></div>
                <div  class="row__poster"><video height="auto" target="_blank" width="340px" src="./video-1640698417.mp4" type="video/mp4" controls></video></div>
                <div  class="row__poster"><video height="auto" target="_blank" width="340px" src="./video-1640698417.mp4" type="video/mp4" controls></video></div>
                <div  class="row__poster"><video height="auto" target="_blank" width="340px" src="./video-1640698417.mp4" type="video/mp4" controls></video></div>
    
            </div>
        </div>
    </div>




    
     <!--phim hài-->
     <div class="row">
        <h2>Phim Hài</h2>
        <div class="row__posters">
            <div class="row__posters">
                <div  class="row__poster" ><video height="auto" target="_blank" width="340px" src="./video-1640698417.mp4" type="video/mp4" controls></video></div>
<div  class="row__poster"><video height="auto" target="_blank" width="340px" src="./video-1640698417.mp4" type="video/mp4" controls></video></div>
                <div  class="row__poster"><video height="auto" target="_blank" width="340px" src="./video-1640698417.mp4" type="video/mp4" controls></video></div>
                <div  class="row__poster"><video height="auto" target="_blank" width="340px" src="./video-1640698417.mp4" type="video/mp4" controls></video></div>
<div  class="row__poster"><video height="auto" target="_blank" width="340px" src="./video-1640698417.mp4" type="video/mp4" controls></video></div>
    
            </div>
        </div>
    </div>
    <!--phim hành động-->
    <!-- <div class="row">
        <h2>Phim Hành Động</h2>
        <div class="row__posters">
            <div class="row__posters">
                <div  class="row__poster" ><video height="auto" target="_blank" width="340px" src="./video-1640698417.mp4" type="video/mp4" controls></video></div>
                <div  class="row__poster"><video height="auto" target="_blank" width="340px" src="./video-1640698417.mp4" type="video/mp4" controls></video></div>
                <div  class="row__poster"><video height="auto" target="_blank" width="340px" src="./video-1640698417.mp4" type="video/mp4" controls></video></div>
                <div  class="row__poster"><video height="auto" target="_blank" width="340px" src="./video-1640698417.mp4" type="video/mp4" controls></video></div>
                <div  class="row__poster"><video height="auto" target="_blank" width="340px" src="./video-1640698417.mp4" type="video/mp4" controls></video></div>
    
            </div>
        </div>
    </div> -->
    <!--phim hoat hinh-->
    <!-- <div class="row">
        <h2>Phim Hoạt Hình</h2>
        <div class="row__posters">
            <div class="row__posters">
                <div  class="row__poster" ><video height="auto" target="_blank" width="340px" src="./video-1640698417.mp4" type="video/mp4" controls></video></div>
                <div  class="row__poster"><video height="auto" target="_blank" width="340px" src="./video-1640698417.mp4" type="video/mp4" controls></video></div>
                <div  class="row__poster"><video height="auto" target="_blank" width="340px" src="./video-1640698417.mp4" type="video/mp4" controls></video></div>
                <div  class="row__poster"><video height="auto" target="_blank" width="340px" src="./video-1640698417.mp4" type="video/mp4" controls></video></div>
                <div  class="row__poster"><video height="auto" target="_blank" width="340px" src="./video-1640698417.mp4" type="video/mp4" controls></video></div>
    
            </div>
        </div>
    </div> -->
    <!--phimkinh dị-->
    <!-- <div class="row">
        <h2>Phim Kinh Dị</h2>
        <div class="row__posters">
            <div class="row__posters">
<div  class="row__poster" ><video height="auto" target="_blank" width="340px" src="./video-1640698417.mp4" type="video/mp4" controls></video></div>
                <div  class="row__poster"><video height="auto" target="_blank" width="340px" src="./video-1640698417.mp4" type="video/mp4" controls></video></div>
                <div  class="row__poster"><video height="auto" target="_blank" width="340px" src="./video-1640698417.mp4" type="video/mp4" controls></video></div>
<div  class="row__poster"><video height="auto" target="_blank" width="340px" src="./video-1640698417.mp4" type="video/mp4" controls></video></div>
                <div  class="row__poster"><video height="auto" target="_blank" width="340px" src="./video-1640698417.mp4" type="video/mp4" controls></video></div>
    
            </div>
        </div>
    </div> -->
    <!--phim kiếm hiệp-->
    <!-- <div class="row">
        <h2>Phim Kiếm Hiệp</h2>
        <div class="row__posters">
           
        </div>
    </div> -->
    <!--phim viễn tưởng-->
    <!-- <div class="row">
        <h2>Phim Viễn Tưởng</h2>
       
    </div> -->
    <!-- thanhh mo nav bar -->
<script>
    const nav = document.getElementById('nav');

    window.addEventListener('scroll' , () => {
        if(window.scrollY >=100) {
            nav.classList.add('nav__black');

        }else{
            nav.classList.remove('nav__black');
        }
    });
</script>
    </div> 
    <!--footer -->
      
      <!-- Bootsrap-->   
    <div class="a">
    <div class = "footer centered ">
      <footer class="mt-3 py-5">
        <div class="container">
            <div class="row align-items-center justify-content-center justify-content-lg-start">
              <a class ="a-footer-top text-decoration-none" style="color: gray;" href="https://help.netflix.com/en/contactus">Bạn có câu hỏi? Liên hệ với chúng tôi.</a> 
                <div class="link-footer col-lg-3 col-6">
                      <ul class="list-unstyled">
                            <li>
                                <a href="https://help.netflix.com/en/node/412" class="link-primary text-decoration-none" style="color: gray;">Câu hỏi thường gặp</a>
                            </li>
                            <li>
                                <a href="#" class="link-primary text-decoration-none" style="color: gray;">Tùy chọn cookie</a>
                            </li>
                        </ul>
                </div>
                <div class="link-footer col-lg-3 col-6">
                        <ul class="list-unstyled">
                            <li>
                                <a href="https://help.netflix.com/en/" class="link-primary text-decoration-none" style="color: gray;">Trung tâm trợ giúp</a>
                            </li>
                            <li>
                                <a href="https://help.netflix.com/legal/corpinfo" class="link-primary text-decoration-none" style="color: gray;">Thông tin doanh nghiệp</a>
                            </li>
                        </ul>
                </div>
                <div class="link-footer col-lg-3 col-6">
                    <ul class="list-unstyled">
                        <li>
                            <a href="https://help.netflix.com/legal/termsofuse" class="link-primary text-decoration-none" style="color: gray;">Điều khoản sử dụng</a>
                        </li>
                    </ul>
                </div>
                <div class="link-footer col-lg-3 col-6">
                        <ul class="list-unstyled">
                            <li>
                                <a href="https://help.netflix.com/legal/privacy" class="link-primary text-decoration-none" style="color: gray;">Quyền riêng tư</a>
                            </li>
                        </ul>
                </div>

                <div class="col-lg-3 col-6">
                  <ul class="list-unstyled">
                    <div class="tieng">
                      <select id="gender1">
                        <i class="fas fa-globe"></i>
                        <option>English</option>
                        <option>Việt Nam</option>
                      </select>
                    </div>
                  </ul>
                </div>

            </div>
        </div>
    </footer>
    </div>
 <!-- boottrap -->
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
</body>
</html>