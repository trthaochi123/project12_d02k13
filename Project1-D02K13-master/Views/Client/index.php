<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.min.css">
    <link rel="stylesheet" href="./assets/css/base.css">
    <link rel="stylesheet" href="./assets/css/main.css">
    <link rel="shortcut icon" href="img/favicon-16x16.png">
    <title>DALLAS Furniture</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/fonts/themify-icons/themify-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

</head>

<body>
    <div class="main">
        <header class="header">
            <!-- thong bao ngắn -->
            <nav class="header__navbar">
                <p>Ưu đãi đến 50% tất cả sản phẩm đến 26.3. Đừng bỏ lỡ</p>
            </nav>

            <!-- BEGIN NAV -->
            <!-- nav 1 -->
            <div class="grid">
                <nav class="header__navbar--elm">
                        <ul class="header__navbar-list">
                            <img src="./img/vn flag.png" alt="tieng viet">
                            <li class="header__navbar-item">Viet Nam</li>
                            <li class="header__navbar-phoneicon">
                                <i class="fa-solid fa-phone"></i>
                            </li>
                            <a class="header__navbar-phone header__navbar-phone-icon-hover" href="tel:1900 7220">1900 7220</a>
                            <li class="header__navbar-item">
                                <a class="header__navbar-item-link">Giới thiệu</a>
                            </li>
                            <li class="header__navbar-item">
                                <a class="header__navbar-item-link">Khuyến mãi</a>
                            </li>
                        </ul>

                    <ul class="header__navbar-icon">
                        <li class="header__navbar-item">
                            <i class="ti-location-pin"></i>
                        </li>
                        <li class="header__navbar-item">
                            <i class="ti-shopping-cart"></i>
                        </li>
                        <li class="header__navbar-item">
                            <a href="" class="login__navbar-item login__navbar-item--strong">Đăng nhập</a>
                            <i class="ti-user"></i>  
                        </li>
                    </ul>
                </nav>
            </div>

            <!-- nav 2 -->
            <div class="grid"> 
                <div class="menu__navbar">
                    <ul id="menu_nav">

                      <!-- 3 gạch icon -->
                        <li class ="menu__navbar-btn-icon">
                            <button class="btn btn-primary my-5 btn-light bg-white" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasExample" aria-controls="offcanvasExample">
                            <img class="menu_navbar-menu-icon" src="./img/menu_icon.png" alt="">
                            </button>

                            <div class="offcanvas offcanvas-start" tabindex="-1" id="offcanvasExample" aria-labelledby="offcanvasExampleLabel">
                        <div class="offcanvas-header">
                            <img class="menu__navbar-logo" src="./img/logo.jpg" alt="logo">
                          <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                        </div>

                        <div class="offcanvas-body ">
                          <div class="dropdown mt-3">
                            <button style="color: black" class="btn btn-secondary dropdown-toggle bg-light" type="button" data-bs-toggle="dropdown">
                              Sofa và Armchair
                            </button>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">Sofa</a></li>
                              <li><a class="dropdown-item" href="#">Armchair</a></li>
                              <li><a class="dropdown-item" href="#">Ghế dài</a></li>
                              <li><a class="dropdown-item" href="#">Ghế thư giãn</a></li>
                            </ul>
                          </div>

                          <div class="dropdown mt-3">
                            <button style="color: black" class="btn btn-secondary dropdown-toggle bg-light" type="button" data-bs-toggle="dropdown">
                              Bàn
                            </button>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">Bàn nước</a></li>
                              <li><a class="dropdown-item" href="#">Bàn ăn</a></li>
                              <li><a class="dropdown-item" href="#">Bàn làm việc</a></li>
                              <li><a class="dropdown-item" href="#">Bàn trang điểm</a></li>
                            </ul>
                          </div>

                          <div class="dropdown mt-3">
                            <button style="color: black" class="btn btn-secondary dropdown-toggle bg-light" type="button" data-bs-toggle="dropdown">
                              Ghế
                            </button>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">Ghế ăn</a></li>
                              <li><a class="dropdown-item" href="#">Ghế bar</a></li>
                              <li><a class="dropdown-item" href="#">Ghế làm việc</a></li>
                            </ul>
                          </div>

                          <div class="dropdown mt-3">
                            <button style="color: black" class="btn btn-secondary dropdown-toggle bg-light" type="button" data-bs-toggle="dropdown">
                              Giường ngủ
                            </button>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">Giường</a></li>
                              <li><a class="dropdown-item" href="#">Bàn đầu giường</a></li>
                              <li><a class="dropdown-item" href="#">Nệm</a></li>
                            </ul>
                          </div>

                          <div class="dropdown mt-3">
                            <button style="color: black" class="btn btn-secondary dropdown-toggle bg-light" type="button" data-bs-toggle="dropdown">
                                Tủ và Kệ
                            </button>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">Tủ tivi</a></li>
                              <li><a class="dropdown-item" href="#">Tủ trưng bày</a></li>
                              <li><a class="dropdown-item" href="#">Tủ rượu</a></li>
                              <li><a class="dropdown-item" href="#">Tủ quần áo</a></li>
                              <li><a class="dropdown-item" href="#">Tủ giày</a></li>
                            </ul>
                          </div>

                          <div class="dropdown mt-3">
                            <button style="color: black" class="btn btn-secondary dropdown-toggle bg-light" type="button" data-bs-toggle="dropdown">
                                Bếp
                            </button>
                            <ul class="dropdown-menu">
                              <li><a class="dropdown-item" href="#">Tủ bếp</a></li>
                              <li><a class="dropdown-item" href="#">Quầy bar</a></li>
                              <li><a class="dropdown-item" href="#">Phụ kiện bếp</a></li>
                            </ul>
                          </div>

                        </div>
                            </div>
                        </li>

                        <!-- Logo navbar -->
                        <li>
                             <a class ="menu__navbar-logo-office" href="index.html">
                                <img class="menu__navbar-logo-office-item" src="img/logo.jpg" alt="">
                            </a> 
                        </li>

                        <!-- Menu Item -->
                        <li class="menu_nav-text">
                            <a class="menu__navbar-menu-item" href="">SẢN PHẨM</a>
                            <i class ="ti-angle-down"></i>
                            <ul class="subnav">
                                <li><a class="menu__navbar-menu-item-detail" href="">Sofa</a></li>
                                <li><a class="menu__navbar-menu-item-detail" href="">Bàn ăn</a></li>
                                <li><a class="menu__navbar-menu-item-detail" href="">Giường ngủ</a></li>
                                <li><a class="menu__navbar-menu-item-detail" href="">Tủ kệ</a></li>
                            </ul>
                        </li>
                        <li class="menu_nav-text">
                            <a class ="menu__navbar-menu-item" href="">PHÒNG</a>
                            <i class ="ti-angle-down"></i>
                            <ul class="subnav">
                                <li><a class="menu__navbar-menu-item-detail" href="">Phòng ăn</a></li>
                                <li><a class="menu__navbar-menu-item-detail" href="">Phòng ngủ</a></li>
                                <li><a class="menu__navbar-menu-item-detail" href="">Phòng làm việc</a></li>
                                <li><a class="menu__navbar-menu-item-detail" href="">Tủ bếp</a></li>
                            </ul>
                        </li>
                        <li>
                          <a class ="menu__navbar-menu-item" href="">THIẾT KẾ NỘI THẤT</a>
                        </li>
                        <li>
                          <a class ="menu__navbar-menu-item" href="">BỘ SƯU TẬP</a>
                        </li>
                        <li>
                          <a class ="menu__navbar-menu-item" href="">GÓC CẢM HỨNG</a>
                        </li>

                        <!-- Search BTN -->
                        <li>
                          <div class="container">
                            <form id="animated">
                              <i class="fa fa-search" aria-hidden="true"></i><input type="text" name="search" placeholder="Tìm sản phẩm...">
                            </form>
                        </li>
                        <!-- END Search BTN -->

                    </ul>

                    <!-- END NAV -->
                </div>
            </div>    

        </header>

        <div id="slider" style="background: url('img/slider_banner.jpeg') top center / cover no-repeat;">
            <div class="text_banner">
                <div class="text_banner-heading">ƯU ĐÃI ĐẾN</div>
                <div class="text_banner-number">50%</div>
                <div class="text_banner-description">Tất cả sản phẩm từ 16 - 26/4/2023</div>
                <button class="button-38" role="button">XEM THÊM</button>
            </div>
        </div>
        
        <?php
                if(isset($_GET['redirect'])) {
                    $redirect = $_GET['redirect'];
                    switch($redirect) {
                        case 'product': include_once('Views/Client/product_detail.php');
                    }
                }else {
                    include_once('Views/Client/dashboard.php');
                    
                }
                ?>

<footer class="footer" style="margin-top: 30px;">
          <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
          <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
          <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
          <!-- ---- Include the above in your HEAD tag -------- -->
          
          <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.css" integrity="sha256-46qynGAkLSFpVbEBog43gvNhfrOj+BmwXdxFgVK/Kvc=" crossorigin="anonymous" />
          <footer class="footer_area">
                <div class="container">
                  <div class="row">				
                    <div class="col-md-3 col-sm-6">
                      <div class="single_ftr">
                        <h4 class="sf_title"><Label>LIÊN HỆ</Label></h4>
                        <ul>
                          <li>151 Hoàng Diệu, Ba Đình, Hà Nội</li>
                          <li>(+84) 979 667 841 <br> (+084) 336 987 8245</li>
                          <li>dallasfurniture.com</li>
                        </ul>
                      </div>
                    </div> <!--  End Col -->
                    
                    <div class="col-md-3 col-sm-6">
                      <div class="single_ftr">
                        <h4 class="sf_title">THÔNG TIN</h4>
                        <ul>
                          <li><a href="#">Về Chúng Tôi</a></li>
                          <li><a href="#">Điều khoản và giấy phép</a></li>
                          <li><a href="#">Liên hệ chúng tôi</a></li>
                        </ul>
                      </div>
                    </div> <!--  End Col -->
                    
                    <div class="col-md-3 col-sm-6">
                      <div class="single_ftr">
                        <h4 class="sf_title">DỊCH VỤ</h4>
                        <ul>
                          <li><a href="#">Bản Đồ</a></li>
                          <li><a href="#">Giỏ Hàng</a></li>
                          <li><a href="#">Tài khoản của tôi</a></li>
                          <li><a href="#">Lịch sử giao hàng</a></li>
                        </ul>
                      </div>
                    </div> <!--  End Col -->	
                    
                    <div class="col-md-3 col-sm-6">
                      <div class="single_ftr">
                        <h4 class="sf_title">Ý KIẾN KHÁCH HÀNG</h4>
                        <div class="newsletter_form">
                          <p>Chúng tôi rất mong chờ nhận được ý kiến của quý vị</p>
                          <form method="post" class="form-inline">				
                            <input name="EMAIL" id="email" placeholder="Email của bạn" class="form-control" type="email">
                              <button type="submit" class="btn btn-default"><i class="fa fa-search"></i></button>
                          </form>
                        </div>
                      </div>
                    </div> <!--  End Col -->
                    
                  </div>
                </div>
            
              
                <div class="ftr_btm_area">
                  <div class="container">
                    <div class="row">
                      <div class="col-sm-4">
                        <div class="ftr_social_icon">
                          <ul>
                            <li><i class="fa-brands fa-facebook"></i></li>
                            <li><i class="fa-brands fa-instagram"></i></li>
                            <li><i class="fa fa-cc-discover"></i></li>
                            <li><i class="fa fa-cc-mastercard"></i></li>
                            <li><i class="fa fa-cc-amex"></i></li>
                          </ul>
                        </div>
                      </div>
                      <div class="col-sm-4">
                        <p class="copyright_text text-center">© 2023 All Rights Reserved Dallas Furniture</p>
                      </div>
                      
                      <div class="col-sm-4">
                        <div class="payment_mthd_icon text-right">
                          <ul>
                            
                            <img class="ddk_logo" src="img/dadangky.png" alt="">
                          </ul>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </footer>
        </footer>
    </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" 
    integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

</body>



</html>