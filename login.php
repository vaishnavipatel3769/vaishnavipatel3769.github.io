
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="ft.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" type="text/css" href="login.css">
    
</head>
<body>
<nav class="navbar navbar-expand-md navbar-dark bg-dark sticky-top" style="font-size: 18px;">
		<button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
        <span class="navbar-toggler-icon" style="background-image: url(./images/cycle.png)";></span>
        </button>
        <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
        		<div class="navbar-nav">
		        <a href="index.php" class="nav-item nav-link">Home</a>
                <div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Services</a>
                    <div class="dropdown-menu">
                        <a href="tiffin.php" class="dropdown-item">Tiffin</a>
                        <a href="#" class="dropdown-item">Catering</a>
                        
                    </div>
                </div>
				
				
				<div class="nav-item dropdown">
                    <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Media</a>
                    <div class="dropdown-menu">
                        <a href="imagegallery.php" class="dropdown-item">Image Gallery</a>
                        <a href="videogallery.php" class="dropdown-item">Video Gallery</a>
                        
                    </div>
                </div>
                <a href="#" class="nav-item nav-link">About Us</a>
                <a href="#" class="nav-item nav-link">Contact Us</a>
            </div>
            
            <div class="navbar-nav">
                 <a href="registration.html" class="nav-item nav-link"><i class='fas fa-user-alt' style='font-size:20px'></i> Signup</a>
                <a href="login.php" class="nav-item nav-link active"><i class='fas fa-sign-in-alt' style='font-size:24px'></i> Login</a>
            </div>
        </div>
    </nav>
</div>

 <div class="login"> 
    <form action="logindb.php" method="post">  
       <center> <img src="./images/logo.jpg" width="100px"></center>
        <h1 class="font-weight-bolder"> <center> Sign In </center> </h1>
        <p> <center>Please fill this form to login</center> </p>
        <hr> 
        <label><b>Username : </b></label>   
        <input type="text" placeholder="Enter Username" name="username" value="<?php if(isset($_COOKIE["username"])) { echo $_COOKIE["username"]; } ?>" required>  
        <label><b>Password :</b> </label>   
        <input type="password" placeholder="Enter Password" name="password" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>"required>  
        <center>  
        <input type="checkbox" name="remeberme"> 
        <label><b> Remeber Me</b></label>
        <br>
        <button type="submit" class="btn">Login</button>
                
    	<button type="button" class="btn" ><a href="registration.html"style="text-decoration: none;color:black">SignUp</a></button>
        <br>
        <a href="forgotpassword.html"style="text-decoration: none;color:black"> Forgot password? </a> 
    </center>
  </form>  
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
          <li><a href="#" style="color:white">ABOUT  US</a></li>
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