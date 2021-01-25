
<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<form action="edit_visitor_dob.php" method="Post">

<input id="name" name="visitor_dob" placeholder="Enter Birth Date.." type="date">
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
$new_visitor_dob=$_POST['visitor_dob'];

$ad="UPDATE visitor
                 SET visitor_dob=? WHERE visitor_email LIKE '$visitor_email'";


$stmt= $db_connect->prepare($ad);
$stmt->bind_param('s',$new_visitor_dob);
$stmt->execute();
// $newId = $stmtins->insert_id;


$stmt->close();

header("location:/Project/connect_profile.php");



}











?>

