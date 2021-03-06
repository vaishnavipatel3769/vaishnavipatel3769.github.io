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

	.box img{
		height : 90%;
		width : 90%;	
	}

	.overlay {
	  position: absolute;
	  bottom: 0;
	  left: 29px;
	  right: 0;
	  top:0;
	  background-color: #8292ed;
	  overflow: hidden;
	  width: 90%;
	  height: 90%;
	  -webkit-transform: scale(0);
	  -ms-transform: scale(0);
	  transform: scale(0);
	  -webkit-transition: .3s ease;
	  transition: .3s ease;
	}

	.text {
	  color: white;
	  font-size: 14px;
	  position: absolute;
	  top: 50%;
	  left: 50%;
	  -webkit-transform: translate(-50%, -50%);
	  -ms-transform: translate(-50%, -50%);
	  transform: translate(-50%, -50%);
	  text-align: center;
	}

	.box:hover .overlay {
	  -webkit-transform: scale(1);
	  -ms-transform: scale(1);
	  transform: scale(1);
	}

    @media screen and (max-width: 1450px) {
    .a {
        margin-top:30px;
        width: 100%;
    }
    @media screen and (max-width: 1296px) {
    .a {
        margin-top:50px;
        width: 100%;
    }
    @media screen and (max-width: 1135px) {
    .a {
        margin-top:60px;
        width: 100%;
    }
    @media screen and (max-width: 995px) {
    .a {
        margin-top:80px;
        width: 100%;
    }
    @media screen and (max-width: 735px) {
    .a {
        margin-top:100px;
        width: 100%;
    }
    @media screen and (max-width: 490px) {
    .a {
        margin-top:110px;
        width: 100%;
    }
    @media screen and (max-width: 320px) {
    .a {
        margin-top:120px;
        width: 100%;
   }
   
</style>
    
</head>
<body data-spy="scroll" data-target=".navbar" data-offset="40">
<!--nav bar-->
    <nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top" style="font-size: 18px;">
        <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon" style="background-image: url(./images/cycle.png)";></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
            <div class="navbar-nav">
                <a href="" class="nav-item nav-link active">Home</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Services</a>
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
                <a href="#contactus" class="nav-item nav-link">Contact Us</a>
            </div>
            <div style="color: white">
                <?php
                
                  if(!empty($_SESSION["username"]))
                  {
                ?>
                  WELCOME <?php echo $_SESSION["username"]; ?>
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
        </div>
    </nav>
       
    <img class="img-fluid" src="./images/gate-3.gif" alt="dabba" > 
     
    <div class="a">
        <img class="img-fluid" src="./images/clouds.png" alt="dabba" style="margin-top: -300px;width: 100%" > 
    </div>

<div id="boxes">
    <div id="dialog" class="window"> 
      <div id="san">
        <a href="#" class="close agree">
        <img src="./images/close.jpg" width="25px" style="float:right; margin-right: -5px; margin-top: -10px;"></a>
        <img src="./images/popup.jpg" height="650" width="500">
       </div>
  </div>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.js"></script> 
<script src="swc.js"></script>
<div style="width: 2478px; font-size: 32pt; color:white; height: 1202px; display: none; opacity: 0.4;" id="mask">
</div>
</div>

<!--aboutus-->
<div id="aboutus" class="container-fluid">
	<center><h1 style="font-family: Monotype Corsiva;color: #b0190e; ">Mumbai Dabbawala</h1></center> 
     <center><h1 class="font-weight-bolder" style="color: #7096BD">ABOUT US </h1>
    <h3 class="font-weight-bolder" style="font-family: Poppins;color: #2D3C6B">
        WELCOME TO MUMBAI DABBAWALA
    </h3>
	</center>

 <div class="container-fluid">
    <div class="row ">
        <div class="col-xl p-5 ml-3">
        <blockquote>
            <p style="text-align: justify;font-size: 20px;font-family: lato;line-height: 32px;"><i>Since 1890, Dressed in white outfit and traditional Gandhi Cap, Mumbai Army of 5,000 Dabbawalas fulfilling the hunger of almost 200,000 Mumbaikar with home-cooked food that is lug between home and office daily.</i>
            <br>
            <i>For more than a century our team have been part of this grime-ridden metropolis-of-dreams.
            About 125 years back, a Parsi banker wanted to have home cooked food in office and gave this responsibility to the first ever Dabbawala. Many people liked the idea and the demand for Dabba delivery soared.</i>
            <br>
            <i>It was all inormal and individual effort in the beginning, but visionary Mahadeo Havaji Bachche saw the opportunity and started the lunch delivery service in its present team-delivery format with 100 Dabbawalas.</i>
           </blockquote> 
        </p>
        </div>
        <div class="col-xl mt-4 mr-4">
            <div class="embed-responsive embed-responsive-16by9">
                <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/U4pqDAIvtng" allow="accelerometer;encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <br>
</div>
</blockquote>

<div class="container-fluid mb-3">
    <center><h2 class="font-weight-bolder" style="font-family: Poppins;color: #2D3C6B">
        Why Choose Tiffin Services from Mumbai Dabbawala?
    </h2></center>
    <div class="d-flex justify-content-center row mb-3">
        <div class="col-md-3 col-8">
            <div class="card h-100">
        	    <center><img class="card-img-top w-50" src="./images/cards1.png" height="170" alt="Card image cap"></center>
	        	<div class="card-body">
	            	<center><h5 class="card-title">Stress-Free Planning</h5>
	                <p class="card-text">No need to order food every day, choose your meal plan and set your preferences just once</p></center>
	            </div>
            </div>
        </div>
        <div class="col-md-3 col-8">
            <div class="card h-100" >
                <center> <img class="card-img-top w-50" src="./images/cards2.png" height="170" alt="Card image cap"></center>
                <div class="card-body">
        	        <center><h5 class="card-title">No more grocery shopping</h5>
                    <p class="card-text">Put an end to those frequent trips to the grocery store and standing in line at supermarkets</p></center> 
                </div>
            </div>
        </div>
        <div class="col-md-3 col-8">
            <div class="card h-100">
        	    <center> <img class="card-img-top w-50" src="./images/cards3.png" height="170" alt="Card image cap"></center>
                <div class="card-body">
                    <center><h5 class="card-title">No need to hire a cook</h5>
                    <p class="card-text">Enjoy delicious home-cooked meals, delivered fresh straight from local home kitchens to your table</p></center>
                </div>
            </div>
        </div>
        <div class="col-md-3 col-8">
          <div class="card h-100">
            <center><img class="card-img-top w-50" src="./images/cards4.png" height="170" alt="Card image cap"></center>
          <div class="card-body">
            <center> <h5 class="card-title">Irresistibly delicious</h5>
            <p class="card-text">Our food is not only nutritious and free from additives and preservatives but also mouth-watering delicious</p></center>
          </div>
        </div>
      </div>
    </div>
</div>
</div>

<div class="container">
  <center><h1 class="font-weight-bolder mt-2" style="font-family: Poppins;color: #2D3C6B"> Recognition And Awardness</h1></center>
  <div class="row no-gutters gallerys mt-3">
    <div class="col-lg-4 col-md-6 col-sm-12 col-12 box">
      <img src="./images/gal1.jpg" class="img-thumbnail  ml-4"></img>
        <div class="overlay">
          <div class="text">
          In 2005, the Indian Institute of Management (Ahmedabad) featured a case study on the Mumbai Dabbawalas from a management perspective of logistics.
          </div>
        </div>
    </div>
  <div class="col-lg-4 col-md-6 col-sm-12 col-12 box">
    <img src="./images/gal2.jpg" class="img-thumbnail  ml-4"></img>
    <div class="overlay">
      <div class="text">
        The New York Times reported in 2007 that the 125-year-old Dabbawala industry continues to grow at a rate of 5–10% per year.
      </div>
    </div>
  </div>     
  <div class="col-lg-4 col-md-6 col-sm-12 col-12 box">
    <img src="./images/gal3.jpg" class="img-thumbnail  ml-4"></img>
      <div class="overlay">
        <div class="text">
          Mr Richard Branson actually travelled with us, like a Dabbawala and delivered a huge tiffin to his own employees at Virgin, Mumbai.
        </div>
      </div>
  </div>   

  <div class="col-lg-4 col-md-6 col-sm-12 col-12 box ">
    <img src="./images/gal4.jpg" class="img-thumbnail  ml-4"></img>
      <div class="overlay">
        <div class="text">
          In 1998, Forbes Global magazine, conducted a quality assurance study on our operations and gave it a Six Sigma efficiency rating of 99.999999
        </div>
      </div>
  </div>   

  <div class="col-lg-4 col-md-6 col-sm-12 col-12 box">
    <img src="./images/gal5.jpg" class="img-thumbnail  ml-4"></img>
      <div class="overlay">
        <div class="text">
           ISO 9001:2000 certified by the Joint Accreditation System of Australia and New Zealand.
        </div>
      </div>
  </div>   

  <div class="col-lg-4 col-md-6 col-sm-12 col-12 box">
    <img src="./images/gal6.jpg" class="img-thumbnail ml-4"></img>
      <div class="overlay">
        <div class="text">
            Prince Charles visited us during his visit to India. Charles also invited Dabbawalas to his wedding with Camilla Parker Bowles in London on 9 April 2005.
        </div>
      </div>
    </div>   
  </div>
</div>
   
	 
<!--footer-->	
<div id="contactus">  
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
</div>
</body>
</html>