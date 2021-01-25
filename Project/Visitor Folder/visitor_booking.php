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
  width: 400px;
  height: 500px; 
  
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
    color: #fff;
}
div.box a:hover
{
    opacity: 0.5;
}



input[type="date"]
{
    border: none;
    border-bottom: 1px solid black;
    background: transparent;
    outline: none;
    height: 30px;
    color: black;
    font-size: 16px;
    width: 90%;
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
    width: 80%;
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






<br><br><br><br><br><br><br><br>

<center>

	<div class="box">
     
     <form action="connect_visitor_booking.php" method="Post">

	<p><b>Cheak in date</b></p><br>
	<input type="date" name="check_in" required>
	<p><b>Cheak out date</b></p><br>
<input type="date" name="check_out" required>


<br><br>

<center><input type="submit" value="Book"></center>


</form>

</div>

</center>










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












<?php



 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "mr_guide";
  
  $db_connect = new mysqli($host,$dbUsername,$dbPassword,$dbname) or die('unable to connect');



session_start();

$_SESSION["room_id"]=$_GET['var2'];

?>

