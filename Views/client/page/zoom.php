<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Chức năng phóng to thumbnail khi hover chuột với CSS &bull;</title>
    <style>
.small{
width: 50px;
height: 50px;
}
.big{
position: absolute;
width: 0px
-webkit-transition:width 0.3s linear 0s;
transition: width 0.3s linear 0s;
z-index: 10;
}
.small:hover + .big{
width: 300px
}
</style>
</head>
<body>
    <div class="thumbnail">
        <img src="card-img-top" src="../../../public/images/" alt="">
    </div>
</body>
</html>