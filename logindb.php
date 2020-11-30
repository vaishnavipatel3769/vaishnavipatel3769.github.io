<?php
session_start();
if(count($_POST)>0) {
	$con=mysqli_connect("localhost","root","");
	mysqli_select_db($con,'mumbai_dabbawala');
	$username=$_POST["username"];
	$password=$_POST["password"]; 
	$result =  mysqli_query($con,"select * from registration where username='".$username."' and password='".$password."'");
	$row = mysqli_fetch_array($result);
	if(is_array($row))
	{
		$_SESSION["username"] = $row['username'];
		$_SESSION["password"] =$row['password'];

		if(!empty($_POST["remeberme"])) {
			setcookie ("username",$_POST["username"],time()+ 3600);
			setcookie ("password",$_POST["password"],time()+ 3600);
			echo "cookie set successfully";
			} 
			else {
				setcookie("username","");
				setcookie("password","");
				echo "cookie not set";
			}
	header('location:index.php');
	}
	else {
		echo "<script type='text/javascript'>alert('Please Register First');location='registration.html';</script>";
	}
}
/*if(isset($_SESSION["username"]))
{
	echo $u;
}*/
?>
		