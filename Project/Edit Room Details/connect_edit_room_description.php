
<?php



    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "mr_guide";
    
    $db_connect = new mysqli($host,$dbUsername,$dbPassword,$dbname) or die('unable to connect');



session_start();
$room_id=$_SESSION["room_id"];


if(isset($_POST['submit']))
{

$new_room_description=$_POST['room_description'];


$ad="UPDATE room
                 SET room_description=? WHERE room_id='$room_id'";


$stmt= $db_connect->prepare($ad);
$stmt->bind_param('s',$new_room_description);
$stmt->execute();
// $newId = $stmtins->insert_id;


$stmt->close();

header("location:/Project/hotel_manager_home_page.php");



}











?>





