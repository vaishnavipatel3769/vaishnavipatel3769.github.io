<?php
$db_host = "localhost";
$db_user = "root";
$db_password = "";
//$db_name = "mumbai dabawala";

//create connection
$conn  = mysqli_connect($db_host,$db_user,$db_password);


//check connection
if(!$conn)
{
	die("connection failed because ".mysqli_connect_error());
}
//echo "connected";

?>