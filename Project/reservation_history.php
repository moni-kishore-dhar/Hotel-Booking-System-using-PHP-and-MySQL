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
  width: 1000px;
  min-height: 400px;
  max-height: 400%; 

  
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
<br><br>

<center>
<table width="80%">
  
  <tr>
    <td><center><p><b><font size="4">Room Number</font></center></p></b></td>
    <td><b><center><p><font size="4">Check In</font></center></p></b></td>
    <td><b><center><p><font size="4">Check Out</font></center></p></b></td>
    <td><b><center><p><font size="4">Transition Id</font></center></p></b></td>
</center>
  </tr>

<?php
 



 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "mr_guide";
  
  $db_connect = new mysqli($host,$dbUsername,$dbPassword,$dbname) or die('unable to connect');


  session_start();


$manager_email= $_SESSION["manager_email"];

$result_m= mysqli_query($db_connect,"SELECT * FROM manager WHERE manager_email like '$manager_email'");


while($row_m = mysqli_fetch_array($result_m))
{

$_SESSION["manager_id"]=$row_m['manager_id'];

}

$manager_id=$_SESSION["manager_id"];

$result= mysqli_query($db_connect,"SELECT * FROM reservation_history WHERE manager_id=$manager_id");


$result1= mysqli_query($db_connect,"SELECT * FROM reservation WHERE reservation_id=$manager_id");

while($row = mysqli_fetch_array($result))
{

$reservation_id=$row['reservation_id'];

$result1= mysqli_query($db_connect,"SELECT * FROM reservation WHERE reservation_id=$reservation_id");

while($row1 = mysqli_fetch_array($result1))
{


    $room_id=$row1['room_room_id'];

$result2= mysqli_query($db_connect,"SELECT * FROM room WHERE room_id=$room_id");

while($row2 = mysqli_fetch_array($result2))
{
  ?>
  
<tr>
       <td><center><p><font color="black"><font size="4"><?php echo $row2['room_no'];?></font></font></p></center></td>

       <td><center><p><font color="black"><font size="4"><?php echo $row1['check_in'];?></font></font></p></center></td>
        <td><center><p><font color="black"><font size="4"><?php echo $row1['check_out'];?></font></font></p></center></td>
        <td><center><p><font color="black"><font size="4"><?php echo $row['trans_id'];?></font></font></p></center></td>
        <td>     <a href="delete_reservation_history.php?var=<?php echo  $row['reservation_history_id'];?>"><font size="3"><font color="black">Delete</font></a></td>
</td>

</tr>





  <?php
}
  }

  
}
?>











</table>
</center>


<center>
<p><b><a href="add_reservation_history.php"><font size="5"><font color="black">Add</a></font></b></p>
</center>


</div>

</center>







<br><br><br><br><br><br><br><br>









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
