<!DOCTYPE html>
<html>
<body>

<?php
	 session_start();
	 if(isset($_POST["submit"]))
	 {
	$manager_email=$_POST['manager_email'];
	$manager_password=$_POST['manager_password'];

	$_SESSION["manager_email"]=$manager_email;
	$_SESSION["loginstatus_manager"]="true";
	
	 
 
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "mr_guide";
	
	$db_connect = new mysqli($host,$dbUsername,$dbPassword,$dbname) or die('unable to connect');
	 

	$qry = "select * from manager where manager_email='$manager_email' and manager_password='$manager_password'";
	 
	$res = $db_connect->query($qry) or die('bad query');



	
	if($res->num_rows>0){


      //session variable for insert the manager id
         
		$row = mysqli_fetch_array($res);
		$_SESSION["manager_id"]=$row['manager_id'];

//for hotel id in catagory



$manager_id=$_SESSION["manager_id"];
  

$result_hotel = mysqli_query($db_connect,"SELECT * FROM hotel WHERE manager_manager_id='$manager_id'");

while($row_hotel = mysqli_fetch_array($result_hotel))
{
 

        $_SESSION["hotel_id"]=$row_hotel['hotel_id'];

}
		header("location:hotel_manager_home_page.php");

		
	}

	else
	{
		header("location:hotel_manager_page_after_given_wrong_password.php");
	}


   }
	 
?>
 
</body>
</html>