
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

$new_room_photo = $_FILES['room_photo']['name'];
    
$target = "images/".basename($new_room_photo);

$ad="UPDATE room
                 SET room_photo=? WHERE room_id='$room_id'";


$stmt= $db_connect->prepare($ad);
$stmt->bind_param('s',$new_room_photo);
$stmt->execute();
// $newId = $stmtins->insert_id;
move_uploaded_file($_FILES['room_photo']['tmp_name'], $target);


$stmt->close();

header("location:/Project/hotel_manager_home_page.php");



}











?>





