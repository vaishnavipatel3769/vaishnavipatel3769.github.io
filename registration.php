	<?php
	include('dbcon.php');
	 $sql = "CREATE DATABASE IF NOT EXISTS mumbai_dabbawala";
         
         if (mysqli_query($conn, $sql)) {
            //echo "Database created successfully";
         }
        else {
            echo "Error creating database: " . mysqli_error($conn);
         }
		mysqli_select_db($conn,"mumbai_dabbawala") or die('could not select database');

   		$sql_insert = "CREATE TABLE IF NOT EXISTS registration(name varchar(10),username varchar(20) NOT NULL PRIMARY KEY,gender varchar(10),email varchar(10),password varchar(20),contactno varchar(10),address varchar(10))";

    	if (mysqli_query($conn, $sql_insert)) {
            //echo "Table created successfully";
         }
        else {
            echo "Error creating Table: " . mysqli_error($conn);
         }
		
		if(isset($_POST['submit']))
		{
			if($_POST['gender']=='male')
			{
				$gender = 1;
			}
			if($_POST['gender']=='female')
			{
				$gender = 0;
			}
			$query = "insert into registration(name,username,gender,email,password,contactno,address) values ('{$_POST["name"]}', '{$_POST["username"]}', $gender,'{$_POST["email"]}','{$_POST["psw"]}','{$_POST["mobileno"]}','{$_POST["home-add"]}')";
			
			$result=mysqli_query($conn,$query);
			if($result)
			{
				header('Location:login.html');
			}
			else
			{
				echo "<script type='text/javascript'>alert('You are already Registered');location='login.html';</script>";				
				

			}

			//header("location:login.html");
		}
	
?>
  