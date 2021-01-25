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

<form action="connect_edit_room_description.php" method="Post">

<textarea id="name" name="room_description" placeholder="Enter Room Description.." type="text" cols="90" 
        rows="5" ></textarea>
<input name="submit" type="submit" value=" Update ">
</form>

</body>
</html>

