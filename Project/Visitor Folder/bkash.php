<!DOCTYPE html>
<html>
<head>
<title>Mr Guide</title>
<link rel="stylesheet" type="text/css" href="/Project/style.css">
<link rel="stylesheet" type="text/css" href="/Project/home_page_style.css">

<style>

div.box
{


  border-radius: 5px;
  border: 2px solid black;
  padding: 20px; 
  width: 700px;
  height: 700px; 
  
  box-shadow: 5px 10px 8px 10px rgba(0, 0, 0, 0.5); 
  text-align: left;
  background: white;
  color: black;
  position: relative;
  right: 40px;
  
}



div.box a{
    text-decoration: none;
    font-size: 14px;
    color: black;
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
    width: 30%;
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
    <li><a href="/Project/visitor_log_out.php">Log Out</a></li>
    <li><a href="/Project/Visitor Folder/visitor_history.php">History</a></li>
    <li><a href="/Project/connect_profile.php">Profile</a></li>
    <li><a href="/Project/Visitor Folder/home_page_after_log_in.php">Home</a></li>
      
          </div>
    </li>
  
</ul>

</div>








<?php



 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "mr_guide";
  
  $db_connect = new mysqli($host,$dbUsername,$dbPassword,$dbname) or die('unable to connect');


session_start();

$reservation_id=$_SESSION["reservation_id"];
$hotel_id=$_SESSION["hotel_id"];


$result5= mysqli_query($db_connect,"SELECT * FROM reservation WHERE reservation_id=$reservation_id");


$result6= mysqli_query($db_connect,"SELECT * FROM hotel WHERE hotel_id=$hotel_id");
while($row6 = mysqli_fetch_array($result6))
{
$manager_id= $row6['manager_manager_id'];
  }
$result7= mysqli_query($db_connect,"SELECT * FROM manager WHERE manager_id=$manager_id");

while($row7 = mysqli_fetch_array($result7))
{
$manager_phone= $row7['manager_phone'];
  }

$result6= mysqli_query($db_connect,"SELECT * FROM hotel WHERE hotel_id=$hotel_id");
while($row6 = mysqli_fetch_array($result6))
{
$manager_id= $row6['manager_manager_id'];
  }
$result7= mysqli_query($db_connect,"SELECT * FROM manager WHERE manager_id=$manager_id");

while($row7 = mysqli_fetch_array($result7))
{
$manager_phone= $row7['manager_phone'];
  }


?>












<br><br><br><br><br><br><br><br>

<center>

	<div class="box">


<?php
while($row5 = mysqli_fetch_array($result5))
{

?>



<b>
<p>STEP -1: Go to your bKash account Menu by dialing *247#</p>
<p>STEP -2: Choose ‘Payment’</p>
<p>STEP -3: Enter our bKash wallet number : <?php echo $manager_phone;?></p>
<p>STEP -4: Enter the amount you have to pay</p>
<p>STEP -5: Enter reference number "<?php echo $row5['reservation_id'];?>" against your payment.</p>
<p>STEP -6: Enter the counter number : 1</p>
<p>STEP -7: Now enter your PIN to confirm</p>
<br>
<p>Done! You will get a confirmation SMS from bKash.</p>
</b><br><br>
<b><p>Enter Trxansection ID</p></b>
<form action="booking_details_after_payment.php" method="Post">
<input type="text" name="code">
<input name="submit" type="submit" value=" Enter "><br>

</form>


<?php
}



?>

</div>


<br><br><br><br><br>

<div class="footer">
<br>


<center>
<table style="width:60%">

<tr>
  <td><b><a href="/Project/privacy.html"><font size="2"><font color="white">Privacy Notice</font></font></a></b></td>
</tr>

<tr>
  <td><b><a href="/Project/condition.html"><font size="2"><font color="white">Terms and Conditions</font></font></a></b></td>
</tr>
  <tr>
  <td><b><a href="/Project/legal_information.html"><font size="2"><font color="white"> Legal Information</font></font></a></b></td>

</tr>


</table>

</center>




<br><br>
<center><font size="2">Mr. Guide Copyright © 2019</font></center>
<p text align="right"><b><a href="home_page_after_log_in.php"><font size="1"><font color="white">mrguide.com</font></font></a></b></p>
</div>


</body>


</html>



