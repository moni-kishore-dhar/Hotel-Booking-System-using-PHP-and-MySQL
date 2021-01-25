
<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action="edit_hotel_information.php" method="Post">

<input id="name" name="hotel_name" placeholder="username" type="text">
<input name="submit" type="submit" value=" LOG IN ">
</form>

</body>
</html>


<?php








 
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "mr_guide";
	
	$db_connect = new mysqli($host,$dbUsername,$dbPassword,$dbname) or die('unable to connect');




session_start();
$manager_id=$_SESSION["manager_id"];

if(isset($_POST['submit']))
{
$new_hotel_name=$_POST['hotel_name'];

$ad="UPDATE hotel
                 SET hotel_name=? where manager_manager_id ='$manager_id'";


$stmt= $db_connect->prepare($ad);
$stmt->bind_param('s',$new_hotel_name);
$stmt->execute();
// $newId = $stmtins->insert_id;


$stmt->close();

header("location:hotel_manager_home_page.php");

}











/*
     $new_hotel_name = $_POST['hotel_name'];


    $sql= mysqli_query($db_connect,"UPDATE hotel
                 SET hotel_name = '$new_hotel_name'");


      header("location:hotel_manager_home_page.php");
    
*/

?>





