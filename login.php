<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!--Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <!--Bootsrap icons-->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.1/font/bootstrap-icons.css">
    <link rel="stylesheet" href="login.css">
</head>
<body >
<div class ="img-back" >
  <div class="container" >
    <form class ="form-login" action ="process-login.php" method="post" >
      <h1 class="h3 mb-3 font-weight-normal">Đăng nhập</h1>
      <div class="form-floating mb-3">
        <input type="email" class="form-control" id="floatingInput" name="txtEmail" placeholder="name@example.com" required autofocus >
        <label for="floatingInput">Email hoặc số điện thoại</label>
      </div>
      <div class="form-floating">
        <input type="password" class="form-control" id="floatingPassword" name="txtPass" placeholder="Password" required>
        <label for="floatingPassword">Mật khẩu</label>
      </div>

      <button type="submit" class="btn btn-primary" name="btnSignIn" style="background-color:red;">Đăng nhập</button>
       <div class="mb-3 form-check">
          <input type="checkbox" class="form-check-input" id="exampleCheck1">
          <label class="form-check-label" for="exampleCheck1">Ghi nhớ tôi</label>
          
          <?php 
            if(isset($_GET['error'])){
              echo "<h5 style='color:red'>{$_GET['error']} </h5>";
            }

          ?>

          <a class = "login-help" href="" style="color: rgb(116, 114, 114); text-decoration: none;">Bạn cần trợ giúp?</a>
      </div>

      <div class = "login-FB">
        <img class ="logoFB" src="images/FB-f-Logo__blue_57.png" alt="">
        <span class="fbBtnText" style="color: #737373;">Đăng nhập bằng tài khoản Facebook</span>
      </div>
      <div class="login-signup-now" data-uia="login-signup-now">
          Bạn mới tham gia Netflix? 
          <a class=" " target="_self" href="/" style="color: white; text-decoration: none;">Đăng ký ngay</a>
      </div>
      <div class = "doanvan">
          <p>
              Trang này được Google reCAPTCHA bảo vệ để đảm bảo bạn không phải là robot.
              <button type="button" class="btn btn-link text-decoration-none">Tìm hiểu thêm</button>
          </p>
      </div>
      </form>   
  </div>  
</div>

      <!-- Bootsrap-->   
     <div class = "footer centered">
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
      
  </div>
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>

</body>
</html>
