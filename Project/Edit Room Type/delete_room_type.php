
<?php



    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "mr_guide";
    
    $db_connect = new mysqli($host,$dbUsername,$dbPassword,$dbname) or die('unable to connect');




   $room_type_id=$_GET['var'];
 


$ad="DELETE FROM room_type WHERE room_type_id='$room_type_id'";


$stmt= $db_connect->prepare($ad);
$stmt->execute();
// $newId = $stmtins->insert_id;


$stmt->close();

header("location:/Project/hotel_manager_home_page.php");















?>





