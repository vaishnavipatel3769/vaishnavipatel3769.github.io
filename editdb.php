	<?php
	include('dbcon.php');
	 $sql = "CREATE DATABASE IF NOT EXISTS mumbai_dabbawala";
         
         if (mysqli_query($conn, $sql)) {
            echo "Database created successfully";
         }
        else {
            echo "Error creating database: " . mysqli_error($conn);
         }
		mysqli_select_db($conn,"mumbai_dabbawala") or die('could not select database');
		
		$mobileno1=$_POST["new_mobileno"];
		$newadd=$_POST["newadd"];
	

		if(isset($_POST['edit']))
		{
				
				$result = "UPDATE registration SET contactno =$mobileno1,address ='$newadd'";
				//$result = "UPDATE registration SET address ='$newadd'";
			
			
		if (mysqli_query($conn, $result)) {

           echo '<script type= "text/javascript"> alert("Data Update")</script>';
         }
        else {
            echo "Error updating Table: " . mysqli_error($conn);
         }
			
		}
	
?>
  