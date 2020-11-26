<?php
	/*$con=mysqli_connect("localhost","root","");
	mysqli_select_db($con,'mumbai_dabbawala');
	session_start();
	
	$username=$_POST["username"];
	$password=$_POST["password"]; 
    
    if(!empty($username) && !empty($password))
    {
		$res="select * from registration where username='".$username."' and password='".$password."'";
		
		$val=mysqli_query($con,$res);
		$n=0;
		while($row=mysqli_fetch_assoc($val))
		{
			header("location:catering.html");
			$n=1;
		}
		if($n==0)
		{
			echo '<script>alert("inside if n=0")</script>';
			header("location:registration.html");
		}
	}*/
session_start();
$message="";
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
		header('location:index.php');
	}
	else {
		header('location:registration.html');
	}
}
/*if(isset($_SESSION["username"]))
{
	echo $u;
}*/
?>
		