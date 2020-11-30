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

   		$sql_insert = "CREATE TABLE IF NOT EXISTS Tiffin(lunch varchar(10),dinner varchar(20),lunch_dinner varchar(10), specialitem varchar(10),quantity varchar(10),deliverytype varchar(10),area varchar(10))";

		if (mysqli_query($conn, $sql_insert)) {
            echo "Table created successfully";
         }
        else {
            echo "Error creating Table: " . mysqli_error($conn);
         }

			if(isset($_POST['submit'])){
				if($_POST['lunch']== '1')
				{
					$lunch = 'Meal_1';

				}
				else{
					$lunch = 'Meal_2';
				}

				if($_POST['dinner']== '1')
				{
					$dinner = 'Meal_1';
				}
				else{
					$dinner = 'Meal_2';
				}

				if($_POST['lunch_dinner']== '1')
				{
					$lunch_dinner = 'Yes';

				}
				else{
					$lunch_dinner = 'No';
				}
			
				if($_POST['specialitem']== '1')
				{
					$specialitem = 'Yes';

				}
				else{
					$specialitem = 'No';
				}

				if($_POST['deliverytype']== '1')
				{
					$deliverytype = 'normal';

				}
				else{
					$deliverytype = 'emergency';
				}

				if($_POST['area']== '1')
				{
					$area = 'Ville_parle';

				}
				elseif ($_POST['area']== '2')
				{
					$area = 'Lokhandwala';
				}
				
				else{
					$area = 'Daddar';
				}
				

			$query = "insert into Tiffin(lunch,dinner,lunch_dinner,specialitem,quantity,deliverytype,area) values ('$lunch', '$dinner','$lunch_dinner','$specialitem','{$_POST["quantity"]}','$deliverytype','$area')";
			
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
  