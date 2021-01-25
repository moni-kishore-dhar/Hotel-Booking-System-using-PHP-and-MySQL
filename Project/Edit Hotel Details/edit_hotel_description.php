
<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<form action="edit_hotel_description.php" method="Post">

<textarea id="name" name="hotel_description" placeholder="Enter Hotel Description.." type="text" cols="90" 
        rows="5" ></textarea>
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
$new_hotel_description=$_POST['hotel_description'];

$ad="UPDATE hotel
                 SET hotel_description=? WHERE manager_manager_id='$manager_id'";


$stmt= $db_connect->prepare($ad);
$stmt->bind_param('s',$new_hotel_description);
$stmt->execute();
// $newId = $stmtins->insert_id;


$stmt->close();

header("location:/Project/hotel_manager_home_page.php");



}











?>





