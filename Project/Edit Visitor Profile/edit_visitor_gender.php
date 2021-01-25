
<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
    <title></title>
</head>
<body>

<form action="edit_visitor_gender.php" method="Post">

Male <input type="radio" name="visitor_gender" value="Male">
Female <input type="radio" name="visitor_gender" value="Female">
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
$new_visitor_gender=$_POST['visitor_gender'];

$ad="UPDATE visitor
                 SET visitor_gender=? WHERE visitor_email LIKE '$visitor_email'";


$stmt= $db_connect->prepare($ad);
$stmt->bind_param('s',$new_visitor_gender);
$stmt->execute();
// $newId = $stmtins->insert_id;


$stmt->close();

header("location:/Project/connect_profile.php");



}











?>

