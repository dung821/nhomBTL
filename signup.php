<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />

    <!-- Latest compiled and minified CSS & JS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <link rel="stylesheet" media="screen" href="//netdna.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" />
    <script src="//code.jquery.com/jquery.js"></script>
    <script src="//netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
    <!-- <link rel="stylesheet" href="dangky.css" /> -->
    <link rel="stylesheet" href="dangky.css">
    <title>Document</title>
  </head>
  <body>
    <div class="container">
      <div class="row">



        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" id="img1">
          <img src="./image/netflix_PNG25.png" alt=""/>
        </div>

        <div class="col-xs-5 col-sm-5 col-md-5 col-lg-5"></div>

        <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">

          <div class="dangnhap"><a href="netflix.html">Đăng Nhập</a></div>
        </div>
      </div>

      <div class="row" id="HR">
        <hr />
      </div>
      <br />

      <div class="row">
        <div class="col-xs-offset-3 col-xs-5 col-sm-5 col-md-5 col-lg-5">
          <p class="step13">Bước 1/3</p>
          <p class="Step1">Tạo mật khẩu để bắt đầu tư cách thành viên của bạn</p>
          <p class="P1">Chỉ cần vài bước nữa là bạn sẽ hoàn tất!</p>
          <p class="P1">Chúng tôi cũng chẳng thích thú gì với các loại giấy tờ.</p>
          <form class="form_login form_signUp" action="process-signup.php" method="POST"> 

            <div class="input mt-3"><input name="txtEmail" type="text" placeholder="Tên người dùng*" class="form-control" id="email" aria-describedby="emailHelp" /></div>

            <div class="input mt-3"><input name="txtUser" type="text" placeholder="Email người dùng*" class="form-control" id="email" aria-describedby="emailHelp" /></div>
            

            <div class="input mt-3"><input name="txtPass1" type="password" placeholder="Mật khẩu*" class="form-control" id="password" required ="" /></div>

            <div class="input mt-3"><input name="txtPass2" type="password" placeholder="Xác nhận mật khẩu*" class="form-control" id="cpassword" required ="" /></div>
            <p class="mt-5 text-danger" style="margin-left: 100px;">
            <?php
                // Kiểm tra xem có tồn tại cái error hay không 
                if (isset($_GET['thongbao'])) {
                    echo  $_GET['thongbao'];
                }
              ?>
            </p>

            <div class="checkbox">
            <input type="checkbox" value="" />


            <p>Vui lòng không gửi các ưu đãi đặc biệt của Netflix qua email cho tôi.</p>
            </div>

            <div class="trochuot" id="trochuot">
              <button class="NextStep" name="btnSignUp" type="submit">Đăng Kí</button>
            </div>
          </form>
          </div>
        </div>
        
        <div class="row" id="footer">
            
            <div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
                <p class="row1">Bạn có câu hỏi? Liên hệ với chúng tôi.</p>
            </div>
            
            
            
            <div class="row" id="footer1">
              
              <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    <p>Câu hỏi thường gặp</p>
                    <p>Tùy chọn cookie</p>
                </div>
                
                
                <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
                    
                </div>
                
                
                
                <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
                    <p>Trung tâm trợ giúp</p>
                    <p>Thông tin doanh nghiệp</p>
                </div>
                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    <p>Điều khoản sử dụng</p>
                </div>
                
                <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">                  
                </div>

                <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
                    <p>Quyền riêng tư</p>
                </div>
              </div>
              
            </div>
            <div class="col-xs-11 col-sm-11 col-md-11 col-lg-11">
                <select id="language">
                    <option>Tiếng Việt</option>
                  <option>English</option>
                </select>
              </div>
            
            
        </div>
        
      </div>
      <hr />
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>  
  </body>
</html>
