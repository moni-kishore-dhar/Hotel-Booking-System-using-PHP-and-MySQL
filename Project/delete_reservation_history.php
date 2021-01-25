
<?php



    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "mr_guide";
    
    $db_connect = new mysqli($host,$dbUsername,$dbPassword,$dbname) or die('unable to connect');




   $reservation_history_id=$_GET['var'];
 


$ad="DELETE FROM reservation_history WHERE reservation_history_id='$reservation_history_id'";


$stmt= $db_connect->prepare($ad);
$stmt->execute();
// $newId = $stmtins->insert_id;


$stmt->close();

header("location:reservation_history.php");















?>





