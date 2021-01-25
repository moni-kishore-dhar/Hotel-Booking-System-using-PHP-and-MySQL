
<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<form action="edit_visitor_name.php" method="Post">

<input id="name" name="visitor_name" placeholder="Enter Name.." type="text">
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
$visitor_email=$_SESSION['visitor_email'];

if(isset($_POST['submit']))
{
$new_visitor_name=$_POST['visitor_name'];

$ad="UPDATE visitor
                 SET visitor_name=? WHERE visitor_email LIKE '$visitor_email'";


$stmt= $db_connect->prepare($ad);
$stmt->bind_param('s',$new_visitor_name);
$stmt->execute();
// $newId = $stmtins->insert_id;


$stmt->close();

header("location:/Project/connect_profile.php");



}











?>

