
    <!-- Bootstrap core CSS -->
    <link href="/./shop/public/bootstrap/css/bootstrap.css" rel="stylesheet">
    <!-- Custom styles for this template -->
    <link href="/./shop/public/css/shop-css.css" rel="stylesheet">
  </head>
  <body style="">

<!--row1-->
<!--header__top-->
<?php 
  session_start();
  $totalqtt = 0;
  if (isset($_SESSION['cart'])) 
  {
    foreach($_SESSION['cart'] as $quantity)
    {
      $totalqtt = $totalqtt + $quantity['quantity'];
    }
  }
 ?>
    <div id="header__top" class="row" style="width: 100%;background-color: #31353B;padding: 10px">
      <div class="col-lg-10" style="margin:0 auto">
        <div class="row">
          <div class="col-lg-8" style="">
            <span style="color: white">Hotline mua hàng:</span>
            <span style="color: #E05C13;font-size: 20px">0169 765 8151</span>
          </div>
          <div class="col-lg-1" style="text-align: left;">
            <a href="login.html" style="color: white;text-decoration: none;">Đăng nhập</a>
          </div>
          <div class="col-lg-1" style="text-align: left;"> 
            <a href="registration.html" style="color: white;text-decoration: none;">Đăng kí</a>
          </div>
          <div class="col-lg-2" style="text-align: left;"> 
            <a href="viewcart.php" style="color: white;text-decoration: none;border: 1px solid white;border-radius: 4px;padding: 5px;padding-bottom: 10px;padding-right: 30px;">Giỏ hàng: <span style="color: yellow;"><?php echo $totalqtt ?></span> </a>
          </div>
        </div>
      </div>
    </div>
<!--end header__top-->
<!--row2-->
<!--header__bottom-->
    <div id="header__bottom" class="row" style="width: 100%">
<!--nav-->
      <nav  class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top"  style="background-color:white">
      <div class="container" style="background-color:white">
        <a class="navbar-brand" href="#" style="font-size: 50px;font-family: two;color: #3AAC3A"><b>Super<i style="color: #E86A2C">Deal</i></b></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation" style="background-color:#E86A2C">
          <span class="navbar-toggler-icon"></span>
        </button>
          <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active">

                <a class="nav-link" id="fonts" href="index.php">Trang Chủ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="fonts" href="gioithieu.html" target="_blank">Giới Thiệu</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="fonts" href="#">Dịch Vụ</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="fonts" href="#">Liên Hệ</a>
              </li>
            </ul>
          </div>
        </div>
      </nav>
<!--end nav-->
    </div>
<!--end header__bottom-->

<!--row3-->
<!--Danh mục sản phẩm, thanh search-->
    <div id="search" class="row" style="width: 100%;background-color: #3EAA3A">
      <div class="col-lg-11" style="margin:0 auto">
        <div class="row" style="padding-top: 7px;padding-bottom: 7px">
          <div class="col-lg-3 col-sm-12 col-xs-11" style="">
            <h4 style="color: white"><b>Danh mục sản phẩm</b></h4>
          </div>
          <div class="col-lg-7 col-sm-12 col-xs-11" style="">
            <form action="" method="POST" class="form-inline" role="form">
              <div class="form-group" style="">
                <input type="email" class="form-control" id="" placeholder="Tìm kiếm sản phẩm?" style="padding-right: 350px">
              </div>
              <button type="submit" class="btn btn-primary" style="background-color: #E65C13;color: white;border: 1px solid #E65C13">Tìm Kiếm</button>
            </form>
          </div>
        </div>
      </div>
    </div>
<!--end Danh mục sản phẩm, thanh search-->

<!--row4-->
  <!--content-->
    <div id="content" class="row" style="width: 100%;background-color: white">
      <div class="col-lg-11" style="margin:0 auto">

      <!--row 4.1-->
        <div class="row">
         <!--danh mục sản phẩm-->
          <div class="col-lg-3 col-sm-2" style="border-left: 1px solid #D8D8D8;border-right: 1px solid #D8D8D8;border-bottom: 1px solid #D8D8D8">
            <div class="list-group">
              <a href="clothes" class="list-group-item" style="color: black;font-family: time newroman;font-size: 20px" target="_blank"><b>Quần Áo</b></a>
              <a href="shoes.php" class="list-group-item" style="color: black;font-family: time newroman;font-size: 20px" target="_blank"><b>Giày</b></a>
              <a href="others.php" class="list-group-item" style="color: black;font-family: time newroman;font-size: 20px" target="_blank"><b>Linh kiện</b></a>
              <a href="#" class="list-group-item" style="color: black;font-family: time newroman;font-size: 20px"><b>Ba lô, Túi xách</b></a>
            </div>
          </div>
        <!--slide-->
          <div class="col-lg-6 col-sm-7" style="border-bottom: 1px solid #D8D8D8;border-right: 1px solid #D8D8D8">
            <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
              <ol class="carousel-indicators">
                <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
              </ol>
              <div class="carousel-inner" role="listbox">
                <div class="carousel-item active" style="" >
                    <img class="d-block img-fluid" src="/./shop/public/images/slide4.jpg" style="height: 320px;width: 100%" alt="First slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block img-fluid" src="/./shop/public/images/slide5.jpg" style="width: 100%;height: 320px" alt="Second slide">
                </div>
                <div class="carousel-item">
                  <img class="d-block img-fluid" src="/./shop/public/images/slide3.jpg" style="height: 320px;width: 100%" alt="Third slide">
                </div>
              </div>
              <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
              <span class="carousel-control-prev-icon" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
              </a>
              <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
              <span class="carousel-control-next-icon" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
              </a>
            </div>
          </div>
        <!--end slide-->

        <!--Khuyen mai dac biet-->
          <div class="col-lg-3 col-sm-3" style="border-bottom: 1px solid #D8D8D8;border-right: 1px solid #D8D8D8">
            <img src="images/sale5.jpg" alt="" style="height: 185px;width: 100%">
            <img style="width: 100%;height:182px" src="/./shop/public/images/km6.jpg" alt="">
          </div>
        </div>
      <!--row 4.2-->
       <!--row 4.3-->