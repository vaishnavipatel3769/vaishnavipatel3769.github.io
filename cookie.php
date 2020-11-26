<?
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
?>