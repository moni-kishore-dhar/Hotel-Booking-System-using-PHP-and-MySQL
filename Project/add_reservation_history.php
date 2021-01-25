<!DOCTYPE html>
<html>
<head>
<title>Mr Guide</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="home_page_style.css">


<style>





div.box
{


  border-radius: 5px;
  border: 2px solid black;
  padding: 20px; 
  width: 600px;
  height: 550px; 

  
  box-shadow: 5px 10px 8px 10px rgba(0, 0, 0, 0.5); 
  text-align: left;
  background: white;
  color: black;
  position: relative;
  right: 40px;
  text-align: right;
}


div.box a{
    text-decoration: none;
    font-size: 14px;
    color: #fff;
}
div.box a:hover
{
    opacity: 0.5;
}




input[type="text"]
{
    border: none;
    border: 2px solid black;
    background: transparent;
    outline: none;
    height: 40px;
    color: black;
    font-size: 16px;
    width: 60%;
    margin-bottom: 20px;
}

 
input[type="submit"]
{
    border: none;
    
    background: gray;
    outline: none;
    height: 40px;
    color: black;
    font-size: 16px;
    width: 60%;
    margin-bottom: 20px;
}


</style>




</head>







<body>


<div class="top">
<br>
<font color="white"><font size="7px"> <b>Mr.Guide</b> </font></font>
<br><br><br>
</div>




<div class="nevi">

<ul>
    <li><a href="manager_log_out.php">Log Out</a></li>
    <li><a href="reservation_history.php">Reservation History</a></li>
    <li><a href="connect_manager_profile.php">Profile</a></li>
    
    
    <li><a href="hotel_manager_home_page.php">Home</a></li>
      
         
    </li>
  
</ul>

</div>



<br><br><br><br>
<br><br><br><br>
<br><br><br><br>



<center>

<div class="box">








  
<center>













  <form action="add_reservation_history.php" method="Post">
    <b><font size="6"><p>Enter Transiton Id</p>
<input type="text" name="trans_id"><br>
<p>Enter Reference Id</p></b></font>
<input type="text" name="reservation_id"><br><br>
<input name="submit" type="submit" value=" Enter "><br>
</form>
</center>


</div>

</center>







<br><br><br><br><br><br><br><br>

<?php
 



 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "mr_guide";
  
  $db_connect = new mysqli($host,$dbUsername,$dbPassword,$dbname) or die('unable to connect');


  session_start();

?>


<?php
if(isset($_POST["submit"]))
   {
 
$manager_email= $_SESSION["manager_email"];

$result_m= mysqli_query($db_connect,"SELECT * FROM manager WHERE manager_email like '$manager_email'");


while($row_m = mysqli_fetch_array($result_m))
{

$_SESSION["manager_id"]=$row_m['manager_id'];

}

$manager_id=$_SESSION["manager_id"];


$trans_id = $_POST['trans_id'];
$reservation_id = $_POST['reservation_id'];
  
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "mr_guide";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
 
     $INSERT = "INSERT Into reservation_history (trans_id,  reservation_id, manager_id) values(?, ?, ?)";
     //Prepare statement
     
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ssi", $trans_id, $reservation_id, $manager_id);
      $stmt->execute();

     

      header("location:reservation_history.php");
     
      $stmt->close();
     $conn->close();
     } 

     }
     
    
?>











<div class="footer">
<br>


<center>
<table style="width:60%">

<tr>
  <td><b><a href="privacy.html"><font size="2"><font color="white">Privacy Notice</font></font></a></b></td>
</tr>

<tr>
  <td><b><a href="condition.html"><font size="2"><font color="white">Terms and Conditions</font></font></a></b></td>
</tr>
  <tr>
  <td><b><a href="legal_information.html"><font size="2"><font color="white"> Legal Information</font></font></a></b></td>

</tr>


</table>

</center>




<br><br>
<center><font size="2">Mr. Guide Copyright © 2019</font></center>
<p text align="right"><b><a href="hotel_manager_home_page.php"><font size="1"><font color="white">mrguide.com</font></font></a></b></p>
</div>


</body>


</html>
