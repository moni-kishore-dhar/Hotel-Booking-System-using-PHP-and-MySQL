
<?php



    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "mr_guide";
    
    $db_connect = new mysqli($host,$dbUsername,$dbPassword,$dbname) or die('unable to connect');





session_start();
$room_type_id=$_SESSION["room_type_id"];


if(isset($_POST['submit']))
{

$new_room_type_price=$_POST['room_type_price'];


$ad="UPDATE room_type
                 SET room_type_price=? WHERE room_type_id='$room_type_id'";


$stmt= $db_connect->prepare($ad);
$stmt->bind_param('s',$new_room_type_price);
$stmt->execute();
// $newId = $stmtins->insert_id;


$stmt->close();

header("location:/Project/hotel_manager_home_page.php");



}











?>





