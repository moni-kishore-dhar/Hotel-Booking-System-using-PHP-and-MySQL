
<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<form action="edit_manager_gender.php" method="Post">

Male <input type="radio" name="manager_gender" value="Male">
Female <input type="radio" name="manager_gender" value="Female">
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
$new_manager_gender=$_POST['manager_gender'];

$ad="UPDATE manager
                 SET manager_gender=? WHERE manager_email LIKE '$manager_email'";


$stmt= $db_connect->prepare($ad);
$stmt->bind_param('s',$new_manager_gender);
$stmt->execute();
// $newId = $stmtins->insert_id;


$stmt->close();

header("location:/Project/connect_manager_profile.php");



}











?>





