
<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<form action="edit_hotel_address.php" method="Post">

<input id="name" name="hotel_address" placeholder="Enter Hotel Address.." type="text">
<input name="submit" type="submit" value=" Update ">
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
$new_hotel_address=$_POST['hotel_address'];

$ad="UPDATE hotel
                 SET hotel_address=? WHERE manager_manager_id='$manager_id'";


$stmt= $db_connect->prepare($ad);
$stmt->bind_param('s',$new_hotel_address);
$stmt->execute();
// $newId = $stmtins->insert_id;


$stmt->close();

header("location:/Project/hotel_manager_home_page.php");



}











?>





