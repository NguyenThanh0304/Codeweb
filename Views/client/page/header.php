
    <!-- Bootstrap core CSS -->
    <link href="/./shop/public/bootstrap/css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="/./shop/public/css/modern-business.css" rel="stylesheet">
    <link href="/./shop/public/css/shop-css.css" rel="stylesheet">
    <link href="/./shop/public/css/duy.css" rel="stylesheet">

  </head>

  <body style="padding-top: 0px">
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
     <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top" style="background-color: #ccc;">
      <div id="header__top" class="row" style="width: 100%;background-color: #31353B;padding: 5px">
        <div class="col-lg-12" style="margin:0 auto">
          <div class="row">
            <div class="col-lg-10" style="">
              <span style="color: white">HOTLINE :</span>
              <span style="color: #E05C13;font-size: 20px">0123456789</span>
            </div>
            <div class="col-lg-1" style="text-align: center;">
              <a href="login.html" style="color: white;text-decoration: none;">Đăng nhập</a>
            </div>
            <div class="col-lg-1" style="text-align: left;"> 
              <a href="registration.html" style="color: white;text-decoration: none;">Đăng kí</a>
            </div>
          </div>
        </div>
      </div>
     </nav>

    <!-- Navigation -->

    <nav class="navbar fixed-top navbar-expand-lg navbar-dark bg-dark fixed-top" style="background-color: #215f8a;">
      <div class="container">
        <a class="navbar-brand" href="#" style="font-size: 50px;font-family: two;color: #00ff00"><b>Super<i style="color: #ff8401">Deal</i></b></a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav ml-auto">
          <?php 
          if (isset($_SESSION['loginname']))
          {echo '<li class="nav-item">
              <a class="nav-link" href="login/logout.php?value='.$_SESSION['loginname'].'" id="fonts" style="color: white"><small>Login:'.$_SESSION['loginname'].'</small></a>
            </li>';}
            else{
              echo '
              <li class="nav-item">
              <a class="nav-link" href="registration.html" id="fonts" style="color: white"><small>Đăng Kí</small></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="login.html" id="fonts" style="color: white">Đăng Nhập</a>
            </li>'
            ;

            }
           ?>
          
          
            <li class="nav-item">
              <a class="nav-link" href="index.php" id="fonts" style="color: white">Trang Chủ</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="shoes.php" id="fonts" style="color: white">Giày</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="clothes.php" id="fonts" style="color: white">Quần Áo</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="others.php" id="fonts" style="color: white">Linh Kiện</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="bag.php" id="fonts" style="color: white">Ba lô, Túi xách</a>
            </li>
            <li class="nav-item" style="margin-top: 8px;width: 120px">
               <a href="viewcart.php" id="fonts" style="color: white;border: 1px solid white;border-radius: 4px;padding: 5px;text-decoration:none">Giỏ hàng: <span style="color: yellow"> <?php echo $totalqtt ?></span>
               </a>
            </li>
          </ul>
        </div>
      </div>
    </nav>

    <header>
      <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
          <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
          <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner" role="listbox">
          <!-- Slide One - Set the background image for this slide in the line below -->
          <div class="carousel-item active" style="background-image: url('../../../public/images/slide11.jpg');height: 400px">
            <div class="carousel-caption d-none d-md-block">
            </div>
          </div>
          <!-- Slide Two - Set the background image for this slide in the line below -->
          <div class="carousel-item" style="background-image: url('../../../public/images/slide4.jpg');height: 400px;">
            <div class="carousel-caption d-none d-md-block">
            </div>
          </div>
          <!-- Slide Three - Set the background image for this slide in the line below -->
         <div class="carousel-item" style="background-image: url('../../../public/images/slide4.jpg');height: 400px;">
            <div class="carousel-caption d-none d-md-block">
            </div>
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
    </header>
