<?php
session_start();
if (strlen($_SESSION['id']==0)) {
  header('location:loginsystem/logout.php');
  } else{
	
?><!DOCTYPE html>
<html>
<head>
<title>Dhuun(A consumer based ecommerce website)</title>
<link href="css/style.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="js/caroufredsel.js" type="text/javascript"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<header>
<div class="container">
<div class="row">
<a href="" class="logo"><img src="images/logo2.jpg" alt="Music with wings!!"></a>
<nav>
<ul>
<li><a href="index.html">Home</a></li>
<li><a href="search.php">Search</a></li>
<li><a href="Music Player.html">Autoplay</a></li>
<li><a href="#">Libraries</a></li>
<a href="#"= <? echo "Welcome, $user"; ?>></a>
<div class="sub-menu">
<ul>
    <li><a href="kollywood.html">Kollywood</a></li>
    <li><a href="bollywood.html">Bollywood</a></li>
    <li><a href="hollywood.html">Hollywood</a></li>
</ul>
</div>
<li><a href="instru.html">Instruments</a></li>
<li><a href="loginsystem/index.php">Get In</a></li>   
<li><a href="loginsystem/admin/index.php">Admin</a></li>
<li>                                    
    <a href="#"><?php echo $_SESSION['name'];?></a>
         </li>
         <li>
          <a href="loginsystem/logout.php">Logout</a>
  </li>         
  <li><a href="downUP.php">DownUp</a></li>
</ul>
<p style="font-size:38px;"> Music Gives You Wings!!</p> 
</nav>
</div>
</div>
</header>
<section class="slider">
<ul class="slider-carousel" id="slider-carousel">
<li class="img1">
<h1>MUSIC IS LIFE<br><span>THAT'S WHY HEARTS HAVE BEATS</span>
</br>
</h1>
<p style="font-size:25px;">Hearts Matter !</p>
<i class="fas fa-skull" style="color: #ff6b6b;"></i>
<i class="fa fa-android"></i>
<i class="fa fa-apple"></i>
<i class="fa fa-windows"></i>
<br>
<a href="" class="btn btn-half">Discover Music</a>
<a href="instru.html" class="btn btn-full">Instruments lookup</a>
</br>
</li>
<li class="img2">
<h1>MUSIC IS LIFE<br><span>THAT'S WHY HEARTS HAVE BEATS</span>
</br>
</h1>
<p style="font-size:25px;">Hearts Matter !</p>
<i class="fas fa-skull" style="color: #ff6b6b;"></i>
<i class="fa fa-android"></i>
<i class="fa fa-apple"></i>
<i class="fa fa-windows"></i>
<br>
<a href="" class="btn btn-half">Discover Music</a>
<a href="instru.html" class="btn btn-full">Instruments lookup</a>
</br>
</li>
<li class="img3">
<h1>MUSIC IS LIFE<br><span>THAT'S WHY HEARTS HAVE BEATS</span>
</br>
</h1>
<p style="font-size:25px;">Hearts Matter !</p>
<i class="fas fa-skull" style="color: #ff6b6b;"></i>
<i class="fa fa-android"></i>
<i class="fa fa-apple"></i>
<i class="fa fa-windows"></i>
<br>
<a href="" class="btn btn-half">Discover Music</a>
<a href="instru.html" class="btn btn-full">Instruments lookup</a>
</br>
</li>
</ul>
</section>
<section class="team-area" id="team">
    <div class="container">
        <div class="row">
            <div class="col-sm-12 text-center">
                <h2 style="color:rgb(64, 7, 97)">OUR TEAM</h2>
                <div class="sub-heading">
                    <p>
                        Our team consists of lousy hippie earthlings uncapable of any kinda hard labour!!
                    </p>
                </div>
            </div>
        </div>
        <div class="row">
        <div class="col-sm-6 col-md-3">
    <div class="team-man">
        <img src="images/logok.png">
    </div>
    <div class="team-description">
        <div class="team-title">
            <h3>Bishes Dharala</h3>
        <span>Project  Admin</span>
    </div>
    <p style="color:red;">
        JAI NEPAL
    </p>
    <div class="team-social-network">
            <a href=""><i class="fa fa-facebook"></i></a>
            <a href=""><i class="fa fa-twitter"></i></a>
            <a href=""><i class="fa fa-linkedin"></i></a>
    </div>
    
    </div>
    </div>
    </div>
    </div>
    </section>
    
<script src="js/main.js" type="text/javascript"></script>
</body>
</html>
<?php } ?>

