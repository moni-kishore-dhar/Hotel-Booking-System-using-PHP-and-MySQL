
<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<form action="edit_manager_name.php" method="Post">

<input id="name" name="manager_name" placeholder="Enter Name.." type="text">
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
$new_manager_name=$_POST['manager_name'];

$ad="UPDATE manager
                 SET manager_name=? WHERE manager_email LIKE '$manager_email'";


$stmt= $db_connect->prepare($ad);
$stmt->bind_param('s',$new_manager_name);
$stmt->execute();
// $newId = $stmtins->insert_id;


$stmt->close();

header("location:/Project/connect_manager_profile.php");



}











?>





