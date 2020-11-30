	<?php
	
	include('dbcon.php');
	 $sql = "CREATE DATABASE IF NOT EXISTS mumbai_dabbawala";
         
         if (mysqli_query($conn, $sql)) {
            echo "database created successfully";
         }
        else {
            echo "Error creating database: " . mysqli_error($conn);
         }
		mysqli_select_db($conn,"mumbai_dabbawala") or die('could not select database');

   		$sql_insert = "CREATE TABLE IF NOT EXISTS catering(menu varchar(10),orderdate varchar(20),deliverymethod varchar(10),pickuptime varchar(10),phoneno varchar(10),guestno varchar(10),location varchar(10))";

		if (mysqli_query($conn, $sql_insert)) {
            echo "Table created successfully";
         }
        else {
            echo "Error creating Table: " . mysqli_error($conn);
         }
		
		
if (mysqli_query($conn, $sql_insert)) {
            echo "Table created successfully";
         }
        else {
            echo "Error creating Table: " . mysqli_error($conn);
         }
		
		if(isset($_POST['submit']))
		{
			if($_POST['deliverymethod']=='method1')
			{
				$deliverymethod = 1;
			}
			if($_POST['deliverymethod']=='method2')
			{
				$deliverymethod = 0;
			}
			/*if(isset($_POST['submit'])){
				/*if(!empty($_POST['Lunch'])){
					$selected = $_POST['Lunch']
					echo 'You have chosen'.$selected;
					} else {
					echo 'Please Select the Value.';
				}
			}
			
			if(isset($_POST['submit'])){
				if(!empty($_POST['dinner'])){
					$selected = $_POST['dinner']
					
						echo 'You have chosen'.$selected;
					} else{
					echo 'Please Select the Value.';
				}
			}
			if(isset($_POST['submit'])){
				if(!empty($_POST['both'])){
					$selected = $_POST['both']
					
						echo 'You have chosen'.$selected;
					} else{
					echo 'Please Select the Value.';
				}
			}
			if(isset($_POST['submit'])){
				if(!empty($_POST['specialitem'])){
					$selected = $_POST['specialitem']
					
						echo 'You have chosen'.$selected;
					} else{
					echo 'Please Select the Value.';
				}
			}
			if(isset($_POST['submit'])){
				if(!empty($_POST['quantity'])){
					$selected = $_POST['quantity']
					
						echo 'You have chosen'.$selected;
					} else{
					echo 'Please Select the Value.';
				}
			}
			if(isset($_POST['submit'])){
				if(!empty($_POST['deliveryarea'])){
					$selected = $_POST['deliveryarea']
					
						echo 'You have chosen'.$selected;
					} else{
					echo 'Please Select the Value.';
				}
			}*/
			$query = "insert into catering(menu,orderdate,deliverymethod,pickuptime,phoneno,guestno,location)values ('{$_POST["menu"]}','{$_POST["orderdate"]}',$deliverymethod,'{$_POST["pickuptime"]}','{$_POST["phoneno"]}','{$_POST["guestno"]}','{$_POST["location"]}')";
			
			$result=mysqli_query($conn,$query);
			if($result)
			{
				echo "Data inserted";
			}
			else
			{
				 echo "Error inserting: " . mysqli_error($conn);


			}

			//header("location:login.html");
			}
?>
  
  