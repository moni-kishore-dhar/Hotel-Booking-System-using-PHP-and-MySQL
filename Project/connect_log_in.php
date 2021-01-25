<!DOCTYPE html>
<html>
<body>

<?php
    

    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "mr_guide";
	
	$db_connect = new mysqli($host,$dbUsername,$dbPassword,$dbname) or die('unable to connect');





	 session_start();
	 if(isset($_POST["submit"]))
	 {
	$visitor_email=$_POST["visitor_email"];
	$visitor_password=$_POST["visitor_password"];
	
	
	$_SESSION["loginstatus_visitor"]="true";
    $_SESSION['visitor_email']=$visitor_email;
 

	 

	$qry = "select * from visitor where visitor_email='$visitor_email' and visitor_password='$visitor_password'";
	 
	$res = $db_connect->query($qry) or die('bad query');


	
	
	if($res->num_rows>0){
		header("location:Visitor Folder/home_page_after_log_in.php");

		
		
	}

	else
	{
		header("location:sign_in_page(after_given_wrong_password).php");
	}


   }
	 
?>
 
</body>
</html>