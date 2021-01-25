
<?php



    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "mr_guide";
    
    $db_connect = new mysqli($host,$dbUsername,$dbPassword,$dbname) or die('unable to connect');


session_start();

   $room_type_id=$_GET['var'];



 $_SESSION["room_type_id"]=$room_type_id;
  
 
?>





<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<form action="connect_edit_room_catagory.php" method="Post">

<input id="name" name="room_type_catagory" placeholder="Enter Room Type.." type="text">
<input name="submit" type="submit" value=" Update ">
</form>

</body>
</html>

