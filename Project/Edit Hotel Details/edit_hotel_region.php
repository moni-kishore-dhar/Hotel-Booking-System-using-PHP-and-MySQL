
<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<form action="edit_hotel_region.php" method="Post">

             <select name="region_region_id">
             <option value="-1">Region</option>
             <option value="1">Dhaka</option>
             <option value="2">Sylhet</option>
             <option value="3">Chittagong</option>
             <option value="4">Rangpur</option>
             <option value="5">Rajshahi</option>
             <option value="6">Khulna</option>
             <option value="7">Barisal</option>

             </select>

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
$hotel_id=$_SESSION["hotel_id"];

if(isset($_POST['submit']))
{
$new_region_region_id=$_POST['region_region_id'];

$ad="UPDATE regions_to_hotels
                 SET region_region_id=? WHERE hotel_hotel_id='$hotel_id'";


$stmt= $db_connect->prepare($ad);
$stmt->bind_param('s',$new_region_region_id);
$stmt->execute();
// $newId = $stmtins->insert_id;


$stmt->close();

header("location:/Project/hotel_manager_home_page.php");



}











?>





