
<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<form action="edit_hotel_catagory.php" method="Post">

            One Star <input type="radio" name="hotel_catagory_id" value="1">
            Two Star <input type="radio" name="hotel_catagory_id" value="2">
            Three Star <input type="radio" name="hotel_catagory_id" value="3">
            Foure Star <input type="radio" name="hotel_catagory_id" value="4">
            Five Star <input type="radio" name="hotel_catagory_id" value="5">
            Six Star <input type="radio" name="hotel_catagory_id" value="6">
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
$new_hotel_catagory_id=$_POST['hotel_catagory_id'];

$ad="UPDATE hotel
                 SET hotel_catagory_id=? WHERE manager_manager_id='$manager_id'";


$stmt= $db_connect->prepare($ad);
$stmt->bind_param('s',$new_hotel_catagory_id);
$stmt->execute();
// $newId = $stmtins->insert_id;


$stmt->close();

header("location:/Project/hotel_manager_home_page.php");



}











?>





