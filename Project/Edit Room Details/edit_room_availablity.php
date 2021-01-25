<?php



    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "mr_guide";
    
    $db_connect = new mysqli($host,$dbUsername,$dbPassword,$dbname) or die('unable to connect');


session_start();

   $room_id=$_GET['var1'];



 $_SESSION["room_id"]=$room_id;
  
 
?>



<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<form action="connect_edit_room_availablity.php" method="Post">


            Yes <input type="radio" name="room_availablity" value="Yes">
            No <input type="radio" name="room_availablity" value="No">
<input name="submit" type="submit" value=" Update ">
</form>

</body>
</html>
