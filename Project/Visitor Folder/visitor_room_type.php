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
  width: 70%;
  height: 800px; 
  
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

div.room_type
{


  border-radius: 5px;
  border: 2px solid black;
  padding: 20px; 
  width: 20%;
  min-height: 600px;
  max-height: 50%;
  left: 25px; 
  box-shadow: 5px 10px 8px 10px rgba(0, 0, 0, 0.5); 
  text-align: left;
  background: white;
  color: black;
  position: relative;
}



div.room_type a{
    text-decoration: none;
    font-size: 14px;
    color: #fff;
}
div.room_type a:hover
{
    color: #39dc79;
    opacity: 0.5;
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
    <li><a href="/Project/visitor_log_out.php">Log Out</a></li><li><a href="/Project/Visitor Folder/visitor_history.php">History</a></li>
    <li><a href="/Project/connect_profile.php">Profile</a></li>
    
    <li><a href="/Project/Visitor Folder/home_page_after_log_in.php">Home</a></li>
      
          </div>
    </li>
  
</ul>

</div>


<br><br><br><br><br><br><br><br>


<div class="room_type">
<center><font size="5"><b>Catagories</b></font></center><br>







<?php
 



 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "mr_guide";
  
  $db_connect = new mysqli($host,$dbUsername,$dbPassword,$dbname) or die('unable to connect');


session_start();

$_SESSION["hotel_id"]=$_GET['var'];

$hotel_id=$_SESSION["hotel_id"];






$result= mysqli_query($db_connect,"SELECT * FROM room_type WHERE hotel_hotel_id=$hotel_id");





while($row = mysqli_fetch_array($result))
{

//for pass the room type id in room details page
$room_type_id=$row['room_type_id'];


?>


       <font size="4"> 
            <table width="80%">
              <tr>
        <td><a href="visitor_room_details.php?var1=<?php echo $room_type_id;?>"><font color="black"><font size="4"><?php echo $row['room_type_catagory'];?></font></font></a></td>
      </tr>

<tr>
     <td>
      <font size="4"><?php echo $row['room_type_price'];?></font>

        </td>
      </tr>
      
      </table>
      <br>



<?php

}

?>
</font>
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