<?php 
  session_start();
  if(isset($_SESSION['username']))
  {
  ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Order</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="ft.css">
    <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/css/bootstrap.min.css' rel='stylesheet'>
     <script type='text/javascript' src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js'></script>
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js"></script>
   <!-- <link href="custom.css" rel="stylesheet" type="text/css">-->
     <link rel="stylesheet" type="text/css" href="ft.css">

    <style type="text/css">
    body {  
    margin: 0px;
    padding: 0px;
    background-image:url("./images/bg.jpg");
    background-position: fixed;
    }
 
    .card {
    width: 400px;
    background-image: linear-gradient(to top left,#617078,#999966,#617078,#999966,#889da8,#999966);
    font-family: Calibri, Helvetica, sans-serif;
    border: 0px solid #00CED1;
    border-radius:5px 10px 20px 5px;
    opacity: 0.9;
    box-shadow: 10px 10px;
    }

    .btr {
    border-top-right-radius: 5px !important
    }

    .btl {
    border-top-left-radius: 5px !important
    }

    .btn-dark {
    background-image: linear-gradient(to top,#999966,white,#617078);
    border: 2px solid black;
  	border-radius: 25px; 
  	color:black;
    }

    .btn-dark:hover {
    opacity: 0.7;  
    color:red; 
    }

/*.nav-pills {
    display: table !important;
    width: 100%
}

.nav-pills .nav-link {
    border-radius: 0px;
    border-bottom: 1px solid red;
}

.nav-item {
    display: table-cell;
    background: red;
}
*/
  .form {
  padding: 20px;
  height: 605px;
  }

  .form input {
    margin-bottom: 12px;
    border-radius: 3px
  }

  .form input:focus {
    box-shadow: none
  }

  .form button {
    margin-top: 20px
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
                <a href="index.php" class="nav-item nav-link">Home</a>
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

<!--form-->

  <div class="d-flex justify-content-center align-items-center mt-5">
    
    <div class="card">
      <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist" style="margin-left: 30%;margin-top:35px;">

            <li class="nav-item text-center">
            <img src="./images/ti.png" class="Round" style="width: 60px;height:60%;margin-bottom: -10px;">
            	<a class="nav-link active btl" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true" style="font-size:20px;color: black;"><b>Tiffin</b></a> 
            </li>
            <li class="nav-item text-center"> 
              <img src="./images/catering.png" class="Round" style="width: 40px;height:60%;margin-bottom: -10px;">
            	<a class="nav-link btr" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false" style="font-size:20px;color: black;"><b>Catering</b></a> 
            </li>
        </ul> 
        <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
                <div class="form px-4"> 
                   <form action="orderdb.php" method="post">
              			<div class="form-group">
                      <label style="color:black;"><b>Lunch:</b></label>
                  			<select class="form-control" name="lunch" id="food_item" onchange="finalCost()">
	                      		<option value="0"> Select Food Item ... </option>
	                      		<option value="1"> Meal 1</option>
                             <option value="2"> Meal 2 </option>
                  			</select>
              			</div>
                    <div class="form-group">
                      <label style="color:black;"><b>Dinner:</b></label>
                        <select class="form-control" name="dinner"  id="food_item2" onchange="finalCost()">
                            <option value="0"> Select Food Item ... </option>
                            <option value="1"> Meal 1 </option>
                          <option value="2"> Meal 2</option>
                        </select>
                    </div>
                      <label style="color:black;"><b>Both:</b></label>
                	<div class="form-group">
                    	<select class="form-control" name="lunch_dinner"  id="food_item3" onchange="finalCost()">
                      		<option value="0"> Lunch and Dinner ... </option>
                      		<option value="1"> Yes </option>
                      		<option value="2"> No </option>
                    	</select>
                	</div>
              		<div class="form-group">
                    <label style="color:black;"><b>Want Special Item ?(Namkeen):</b></label>
                		<select class="form-control" name="specialitem" id="special_item" onchange="finalCost()">
		                    <option value="0"> Want Special Item ?(Namkeen)</option>
		                    <option value="1"> Yes </option>
		                    <option value="2"> No </option>
              			</select>
           			</div>

             		<div class="form-group">
                   <label style="color:black;"><b>Quantity:</b></label>
                		<input type="number" class="form-control"  name="quantity" id="food_quantity" placeholder="Quantity" onkeyup="finalCost()" >
             		</div>

              		<div class="form-group">
                    <label style="color:black;"><b> Delivery Type:</b></label>
              			<select class="form-control" name="deliverytype" id="delivery_type" onchange="finalCost()">
                   			<option value="0"> Delivery Type </option>
                   			<option value="1"> Normal </option>
                   			<option value="2"> Emergency </option>
               			</select>
           			</div>
           
           			<div class="form-group">
                   <label style="color:black;"><b>Location:</b></label>
		              	<select class="form-control" name="area" id="delivery_area" onchange="finalCost()">
		                  	<option value="0"> Select Delivery Area ... </option>
                          <option value="1"> Ville parle </option>
                            <option value="2">Lokhandwala </option>
                            <option value="3"> Daddar  </option>
                            <option value="4"> Andheri </option>
		               	</select>
              		</div>
              			
              		<div class="form-group">
	                		<label><b>Total Cost (₹) : </b></label>
	                  		<span id="result" style="background-color:#DA70D6;color: black;padding: 6px 70px;font-weight: 400;font-size: 18px;border-radius: 3px;">0
	                  		</span>
	                		<button value="SUBMIT" class="btn btn-dark  btn-block" style="float: right;font-size: 20px;margin-bottom:10px;"  name="submit" id="ok" onclick="ok_result1()" >Submit</button> 

              			</div>

                  </form>
        			
				<script>
              function finalCost(){
                  var foodItem = document.getElementById("food_item").value;
                  var fo = document.getElementById("food_item2").value;
                  var foo = document.getElementById("food_item3").value;
                  var specialItemm = document.getElementById("special_item").value;
                  var foodQuatity = document.getElementById("food_quantity").value;
                  var deliveryType = document.getElementById("delivery_type").value;
                  var deliveryArea = document.getElementById("delivery_area").value;
                  var all_food = (parseInt(foodItem)*7) +(parseInt(fo)*7) +(parseInt(foo)*7)+ (parseInt(specialItemm)*3) + ((foodQuatity)*2) + (parseInt(deliveryType)*4) + (parseInt(deliveryArea)*3)
                  document.getElementById("result").innerHTML = all_food;
              }
              function ok_result(){
                  document.getElementById("okResult").style.display="block";
                  document.getElementById("okResult").style.backgroundColor="#DCE775";
                  document.getElementById("input_box").style.display="none";
                }
            </script>      
				</div>
			</div>

	       <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">
         
	            <div class="form px-4"> 
	               <form action="cateringdb.php" method= "post">
	              	<div class="form-group">
                     <label style="color:black;"><b>Menu :</b></label>
	                  	<select class="form-control" name="menu" id="food_item1" onchange="finalCost1()">
	                    	<option value="0"> Select Combo  ... </option>
	                      	<option value="Combo 1 (per plate ₹ 330)">Combo 1 (per plate ₹ 330)</option>
	                     	<option value="Combo 2 (per plate ₹ 430)"> Combo 2 (per plate ₹ 430)</option>
	                      	<option value="Combo 3 (per plate ₹ 530)"> Combo 3 (per plate ₹ 530) </option>
	                      	<option value="Combo 4 (per plate ₹ 630)"> Combo 4 (per plate ₹ 630)</option>
	                      	
	                  	</select>
                        
	              	</div>
	              
                    <div class="form-group">
                      <label for="orderdate"><b>Order Due Date :</b></label>
                      <input type="date" class="form-control" id="orderdate" name="orderdate">
                  </div>
              
	              <div class="form-group">
                      <label for="deliverymethod"><b>Delivery Method :</b></label>
                        <input type="radio" name="deliverymethod" value="method1"><b>For Pick Up</b>
                        <input type="radio" name="deliverymethod" value="method2"><b>For Delivery</b><br>
                  </div>

                <div class="form-group">
                      <label for="pickuptime"><b>Pick Up Time/Delivery Time :</b></label>
                        <input type="time" class="form-control" id="pickuptime" name="pickuptime">
                  </div>

              <div class="form-group">
                  <label for="phoneno"><b>Enter a phone number :</b></label>
            <input type="tel"  class="form-control" id="phone" name="phoneno" >
                  </div>
                  <div class="form-group">
                  <label for="guestno"><b>Number of Guest :</b></label>
              <input type="text" class="form-control" id="guest" name="guestno">
            </div>
            <div class="form-group">
          <label for="location"><b> Location :</b></label>
                        <select class="form-control"class="form-control"  name="location" id="delivery_area" onchange="finalCost()">
                          <option value="0"> Select Delivery Area ... </option>
                          <option value="Ville parle"> Ville parle </option>
                            <option value="Lokhandwala">Lokhandwala </option>
                            <option value="Daddar"> Daddar  </option>
                            <option value="Andheri"> Andheri </option>
                        </select>
                    </div>
                </div>
	              <div class="form-group">
                      
                      <button value="SUBMIT" class="btn btn-dark  btn-block" style="float: right;font-size: 20px;margin-bottom:10px;" name="submit" id="ok" onclick="ok_result1()">Submit</button> 

                    </div>
	          	</form>
	            </div>
        	</div>
    	</div>
    </div>

</div>


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

<?php
}
  else{

   echo "<script type='text/javascript'>alert('Please Login First');location='login.php';</script>";
  } ?>