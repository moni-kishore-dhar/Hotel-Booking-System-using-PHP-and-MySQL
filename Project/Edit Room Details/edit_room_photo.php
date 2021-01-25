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

<form action="connect_edit_room_photo.php" method="Post" enctype="multipart/form-data">
<p>
            <input type="hidden" name="size" value="1000000">
    
            <input type="file" name="room_photo">
  </p>

  <input name="submit" type="submit" value=" Update ">
</form>

</body>
</html>

