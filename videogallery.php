<?php
include('logindb.php');
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Index</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="swc.css">
    <link rel="stylesheet" type="text/css" href="ft.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>

   <style type="text/css">
    @media screen and (max-width: 640px) {
    .container1{
      background-position: right top;
        }
     }

    </style>
    
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40">
  <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top" style="font-size: 18px;">
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
      <span class="navbar-toggler-icon"style="background-image: url(./images/cycle.png)";></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
      <div class="navbar-nav">
        <a href="index.php" class="nav-item nav-link active">Home</a>
          <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Services</a>
            <div class="dropdown-menu">
              <a href="tiffin.php" class="dropdown-item">Tiffin</a>
              <a href="#" class="dropdown-item">Catering</a>
            </div>
          </div>
	          <div class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle active" data-toggle="dropdown">Media</a>
              <div class="dropdown-menu">
                <a href="imagegallery.php" class="dropdown-item">Image Gallery</a>
                <a href="videogallery.php" class="dropdown-item">Video Gallery</a>    
              </div>
            </div>
         <a href="#aboutus" class="nav-item nav-link">About Us</a>
          <a href="#" class="nav-item nav-link">Contact Us</a>
      </div>
      <?php
        if(!empty($_SESSION["username"]))
        {
      ?>
      <div class="navbar-nav">
        <a href="registration.html" class="nav-item nav-link"><i class='fas fa-user-alt' style='font-size:20px'></i> Signup</a>
        <a href="logout.php" class="nav-item nav-link"><i class='fas fa-sign-in-alt' style='font-size:24px'></i> Logout</a>
      </div>
      <?php
        }
          else
          {
      ?>
      <div class="navbar-nav">
          <a href="registration.html" class="nav-item nav-link"><i class='fas fa-user-alt' style='font-size:20px'></i> Signup</a>
          <a href="login.php" class="nav-item nav-link"><i class='fas fa-sign-in-alt' style='font-size:24px'></i> Login</a>
      </div>
      <?php
       }
      ?> 
    </div>
 </nav>

<div class="container1" style="background-image: url(./images/gallery.png);max-width: 100%;background-repeat: no-repeat;">
  <div class="py-4" >
    <h1 class="text-right mt-5 pr-5 mr-5" style="color: white;">Video Gallery</h1>
    <h2 class="text-right pr-5 mr-5" style="color: white ;font-family: monotype corsiva">Mumbai Dabbawala</h2>
  </div>
  <div>
    <img class="img-fluid" src="./images/cloud.png" style="margin-top: 50px;width: 100%">
  </div>
</div>

<div class="container">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb" style="background-color:transparent; font-size:20px;">
      <li class="breadcrumb-item"><a href="index.php" style="color: black;">Home</a></li>
      <li class="breadcrumb-item active" style="color: #ed2025;">Video Gallery</a></li>
    </ol>
  </nav>
  <div class="row">
    <div class="col-xl mt-4">
      <div class="embed-responsive embed-responsive-16by9">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/c7xsUxk36CQ" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>

    <div class="col-xl mt-4">
      <div class="embed-responsive embed-responsive-16by9">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/mZl_qAO-6CI" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
  </div>


  <div class="row">
    <div class="col-xl mt-4">
      <div class="embed-responsive embed-responsive-16by9">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/VYsR1KEOO7I" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>

    <div class="col-xl mt-4 ">
      <div class="embed-responsive embed-responsive-16by9">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/kNpNeVwmpX0" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-xl mt-4 ">
      <div class="embed-responsive embed-responsive-16by9"> 
        <iframe width="560" height="315" src="https://www.youtube.com/embed/bgEOnooSW_I" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>

    <div class="col-xl mt-4 ">
      <div class="embed-responsive embed-responsive-16by9">
        <iframe width="560" height="315" src="https://www.youtube.com/embed/aUsXloR42ZE" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
      </div>
    </div>
  </div>
</div>


<div class="mt-5 pt-5 pb-5 footer" style="background:black">
<div class="container"  style="color:white">
  <div class="row">
    <div class="col-lg-5 col-xs-12 about-company">
      <h2>MUMBAI DABBAWALA</h2>
      <p class="pr-5 text-white-50">Since 1890,Dressed in white outfit and traditional
     Gandhi Cap, Mumbai Army of 5,000 Dabbawalas fulfilling the hunger of almost 200,000 Mumbaikar with home-cooked food that is lug between home and office daily.</p>
    </div>
    <div class="col-lg-3 col-xs-12 links" style="color:white">
      <h4 class="mt-lg-0 mt-sm-3">LINKS</h4>
        <ul class="m-0 p-0">
          <li><a href="index.php" style="color:white">HOME</a></li>
          <li><a href="#aboutus" style="color:white">ABOUT  US</a></li>
          <li><a href="#" style="color:white">SERVICES</a></li>
          <li><a href="#" style="color:white">MEDIA</a></li>
        </ul>
    </div>
    <div class="col-lg-4 col-xs-12 location">
      <h4 class="mt-lg-0 mt-sm-4">ADDRESS</h4>
      <p><i class="fas fa-home mr-2"></i> 3rd floor nav prabhat chembEr, Ranade Rd, Mumbai,Maharashtra 400042 </p>
      <p><i class="fa fa-phone mr-2"></i> +91 xxxxxxxxxx</p>
      <p><i class="fa fa-envelope-square mr-2" aria-hidden="true"></i>  mumbai@dabbawala.com</p>
    </div>
  </div>
    <div class="col-lg-12 text-center">
        <a href="#" class="scl-btn scl-crcl shadow fab fa-facebook-f"></a>
        <a href="#" class="scl-btn scl-crcl shadow fab fa-twitter"></a>
        <a href="#" class="scl-btn scl-crcl shadow fab fa-linkedin-in"></a>
        <a href="#" class="scl-btn scl-crcl shadow fab fa-youtube"></a>
    </div>    
</div>
</div>


</body>
</html>