
<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<form action="edit_manager_number.php" method="Post">

<input id="name" name="manager_phone" placeholder="Enter Number.." type="text">
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
$manager_email=$_SESSION['manager_email'];

if(isset($_POST['submit']))
{
$new_manager_phone=$_POST['manager_phone'];

$ad="UPDATE manager
                 SET manager_phone=? WHERE manager_email LIKE '$manager_email'";


$stmt= $db_connect->prepare($ad);
$stmt->bind_param('s',$new_manager_phone);
$stmt->execute();
// $newId = $stmtins->insert_id;


$stmt->close();

header("location:/Project/connect_manager_profile.php");



}











?>





