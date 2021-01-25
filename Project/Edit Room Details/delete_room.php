
<?php



    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "mr_guide";
    
    $db_connect = new mysqli($host,$dbUsername,$dbPassword,$dbname) or die('unable to connect');




   $room_id=$_GET['var1'];
 


$ad="DELETE FROM room WHERE room_id='$room_id'";


$stmt= $db_connect->prepare($ad);
$stmt->execute();
// $newId = $stmtins->insert_id;


$stmt->close();

header("location:/Project/hotel_manager_home_page.php");















?>





