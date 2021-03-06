 <?php
include('logindb.php'); 
 ?>

<!DOCTYPE html>
<html lang="en">
<html>
<head>
	<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Tiffin</title>
	<!--navbar-->
	<link rel="stylesheet" type="text/css" href="ft.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
	<script src='https://kit.fontawesome.com/a076d05399.js'></script>
	<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
	<link rel="stylesheet" href="./slider.css">

	<style type="text/css">
    @media screen and (max-width: 640px) {
    .container1{
      background-position: right top;
        }
     }
	.animate
	{
  		transition: all 0.1s;
  		-webkit-transition: all 0.1s;
	}
	.action-button
	{
  		position: relative;
  		padding: 10px 40px;
  		margin: 0px 10px 10px 0px;
  		float: left;
  		border-radius: 10px;
  		font-family: 'Pacifico', cursive;
  		font-size: 25px;
  		color: #FFF;
  		text-decoration: none;  
  	}

	.blue
	{
  		background-color: #3498DB;
  		border-bottom: 5px solid #2980B9;
  		text-shadow: 0px -2px #2980B9;
  	}

    </style>
</head>

<body>
<!--navbar-->
  <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top" style="font-size: 18px;">
    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
      <span class="navbar-toggler-icon"style="background-image: url(./images/cycle.png)";></span>
    </button>
    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
      <div class="navbar-nav">
        <a href="index.php" class="nav-item nav-link">Home</a>
          <div class="nav-item dropdown">
            <a href="#" class="nav-link dropdown-toggle active" data-toggle="dropdown">Services</a>
            <div class="dropdown-menu">
              <a href="tiffin.php" class="dropdown-item">Tiffin</a>
              <a href="catering.php" class="dropdown-item">Catering</a>
            </div>
          </div>
		        <div class="nav-item dropdown">
              <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Media</a>
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
    <h1 class="text-right mt-5 pr-5 mr-5" style="color: white;">Dabba Service</h1>
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
      <li class="breadcrumb-item active" style="color: #ed2025;">Dabba Service</a></li>
    </ol>
  </nav>
	<p class="pl-3"style="font-family: lato;line-height: 28px;font-size: 19px;text-align: justify">No worries if you are not from Mumbai, No worries if there is no one at your house to cook food for you. We have the solution for all food related issues because we love foodies, moreover we love vegetarians! <br>We provide healthy home cooked food straight away from our kitchen to your table which would be appealing to your eye & to the palette too. Be it Dal or be it a gravy, our food is prepared under hygienic conditions using refined oil which best takes care of your heart, because for us your little heart is utmost important.<br> So the struggle for healthy food gets over, Contact us for wide variety of options!</p>
</div>

<!--carousel-->
<div class="slider mt-2">
	<div class="gallery">
		<div class="box" tabindex="1" autofocus>
			<img src="./images/s1.jpg"/>	
		</div>
		<div class="box" tabindex="2">
			<img src="./images/s2.jpg" class="h-75" />	
		</div>
		<div class="box" tabindex="3">
			<img src="./images/s3.jpg"/>	
		</div>
		<div class="box" tabindex="4">
			<img src="./images/s4.jpg"/>	
		</div>
		<div class="box" tabindex="5">
			<img src="./images/s5.jpg"/>	
		</div>
		<div class="box" tabindex="6">
			<img src="./images/s6.jpg"/>	
		</div>
	</div>
</div>

<div class="container">
	<center> <h2 class="font-weight-bolder mt-5" style="color: #2D3C6B"> HOW DOES THE SERVICE WORK</h2></center>
	<div class="d-flex justify-content-center row mb-3 mt-5">
            <div class="col-md-3 col-8">
                <div class="card h-100" style="border:none;">
                   <center><img class="card-img-top w-50" src="./images/reg.jpg" height="170" alt="Card image cap"></center>
                  <div class="card-body">
                    <center><h5 class="card-title">Register</h5></center>
                  </div>
                </div>
            </div>
            <div class="col-md-3 col-8">
                <div class="card h-100" style="border:none" >
                  <center> <img class="card-img-top w-75" src="./images/meal.png" height="220" alt="Card image cap"></center>
                  <div class="card-body">
                   <center><h5 class="card-title">Choose your meal plan <br>& shipping address
                   </center>	
                   </h5>
                  </div>
                </div>
            </div>
            <div class="col-md-3 col-8">
                <div class="card h-100" style="border:none;">
                  <center> <img class="card-img-top w-50 mt-2" src="./images/order.png" height="190" alt="Card image cap"></center>
                  <div class="card-body">
                    <center><h5 class="card-title">Order online & make payment either COD or online</h5>
                  </div>
                </div>
            </div>
            <div class="col-md-3 col-8">
                <div class="card h-100" style="border:none;">
                  <center><img class="card-img-top w-50" src="./images/processing.png" height="150" alt="Card image cap"></center>
                  <div class="card-body">
                  <center> <h5 class="card-title">Processing @ dabbawala office & confirmation of order</h5>
                   </center>
                  </div>
                </div>
            </div>
    </div>
    <div class="d-flex justify-content-center row mb-3">
            <div class="col-md-3 col-8">
                <div class="card h-100" style="border:none;">
                   <center><img class="card-img-top w-50" src="./images/delivery.png" height="170" alt="Card image cap"></center>
                  <div class="card-body">
                    <center><h5 class="card-title">Delivery @ your doorstep</h5></center>
                  </div>
                </div>
            </div>
            
            <div class="col-md-3 col-8">
                <div class="card h-100" style="border:none;">
                  <center> <img class="card-img-top w-50 mt-2" src="./images/review.png" height="190" alt="Card image cap"></center>
                  <div class="card-body">
                    <center><h5 class="card-title">If staisfied <br>
                   Review us on our website and refer to ur pals</h5>
                  </div>
                </div>
            </div>
            <div class="col-md-3 col-8">
                <div class="card h-100" style="border:none;">
                  <center> <img class="card-img-top w-50" src="./images/report.jpg" alt="Card image cap"></center>
                  <div class="card-body">
                    <center><h5 class="card-title">Else Report Us <br>
                   support@dabbawala.in</h5>
                  </div>
                </div>
            </div>
    </div>
</div>


<center><div class="btn">
 <a href="order.php" class="action-button shadow animate blue">Order Now</a>
</div></center>

<!--footer-->
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