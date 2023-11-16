<?php

use App\Models\User;

if(isset($_POST["CHANEGPASSWORD"])){
   
            $password = sha1($_POST['password']);
            $args = [
                ['password','=', $password],    
                ['status','=',1],               
            ];
           
           
}
?>


<?php require_once "views/frontend/header.php"?>

   <section class="bg-light">
      <div class="container">
         <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb py-2 my-0">
               <li class="breadcrumb-item">
                  <a class="text-main" href="index.php">Trang chủ</a>
               </li>
               <li class="breadcrumb-item active" aria-current="page">Đổi mật khẩu</li>
            </ol>
         </nav>
      </div>
   </section>
   <section class="nhd-maincontent py-2">
   <form action="index.php?option=profile_changepassword.php" method="post" name="CHANEGPASSWORD">
      <div class="container">
         <div class="row">
            <div class="call-login--register border-bottom">
               <ul class="nav nav-fills py-0 my-0">
                  <li class="nav-item">
                     <a class="nav-link" href="customer-login.php">
                        <i class="fa fa-phone-square" aria-hidden="true"></i>
                        0372736636
                     </a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="login.html">Đăng nhập</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="register.html">Đăng ký</a>
                  </li>
                  <li class="nav-item">
                     <a class="nav-link" href="profile.html">Nguyễn Hải Đăng</a>
                  </li>
               </ul>
            </div>
            <div class="col-md-9 order-1 order-md-2">
               <h1 class="fs-2 text-main">Thông tin tài khoản</h1>
               <table class="table table-borderless">
                  <tr>
                     <td style="width:20%;">Mật khẩu cũ</td>
                     <td>
                        <input type="password" name="password_old" class="form-control" />
                     </td>
                  </tr>
                  <tr>
                     <td>Mật khẩu</td>
                     <td>
                        <input type="password" name="password" class="form-control" />
                     </td>
                  </tr>
                  <tr>
                     <td>Xác nhận mật khẩu</td>
                     <td>
                        <input type="password" name="password_re" class="form-control" />
                     </td>
                  </tr>
                  <tr>
                     
                     <td>
                        <button class="btn btn-main" type="submit" name="CHANEGPASSWORD">
                           Đổi mật khẩu
                        </button>
                     </td>
                  </tr>
               </table>
            </div>
         </div>
      </div>
      </form>
   </section>
   <?php require_once "views/frontend/footer.php"?>
