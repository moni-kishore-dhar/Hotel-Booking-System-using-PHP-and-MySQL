
<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<form action="edit_pic_1.php" method="Post"  enctype="multipart/form-data">


<p>
            <input type="hidden" name="size" value="1000000">
    
            <input type="file" name="pic_1">
  </p>
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
$new_pic_1 = $_FILES['pic_1']['name'];
    
$target = "images/".basename($new_pic_1);

$ad="UPDATE hotel
                 SET pic_1=? WHERE manager_manager_id='$manager_id'";


$stmt= $db_connect->prepare($ad);
$stmt->bind_param('s',$new_pic_1);
$stmt->execute();

move_uploaded_file($_FILES['pic_1']['tmp_name'], $target);

// $newId = $stmtins->insert_id;


$stmt->close();

header("location:/Project/hotel_manager_home_page.php");



}











?>





