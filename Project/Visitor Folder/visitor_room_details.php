<!DOCTYPE html>
<html>
<head>
<title>Mr Guide</title>
<link rel="stylesheet" type="text/css" href="/Project/style.css">
<link rel="stylesheet" type="text/css" href="/Project/home_page_style.css">

<style>

 
 
   img{
    float: center;
    margin: 5px;
    width: 800px;
    height: 300px;
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






div.room_details
{


  border-radius: 5px;
  border: 2px solid black;
  padding: 20px; 
  width: 60%;
  min-height: 800px;
  max-height: 1000%;
  left: 700px; 
  top: 35%;
  box-shadow: 5px 10px 8px 10px rgba(0, 0, 0, 0.5); 
  text-align: left;
  background: white;
  color: black;
  position: relative;
  text-align: right;
}



div.room_details a{
    text-decoration: none;
    font-size: 14px;
    color: #fff;
}
div.room_details a:hover
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



$hotel_id=$_SESSION["hotel_id"];






$result= mysqli_query($db_connect,"SELECT * FROM room_type WHERE hotel_hotel_id=$hotel_id");





while($row = mysqli_fetch_array($result))
{

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












<?php



$room_type_id= $_GET['var1'];
$_SESSION["room_type_id"]=$room_type_id;


$result1 = mysqli_query($db_connect,"SELECT * FROM room_type WHERE room_type_id='$room_type_id'");

$result2 = mysqli_query($db_connect,"SELECT * FROM room WHERE room_type_room_type_id ='$room_type_id'");


while($row1 = mysqli_fetch_array($result1))
{


 while($row2 = mysqli_fetch_array($result2))
{
   
   //for pass the room id in next bookin page
$room_id=$row2['room_id'];


        ?>
<div class="room_details">

<br><br>

<center>
 <?php echo "<img src='/Project/images/".$row2['room_photo']."' >";?><br>

<br><br><br>
 


 <font color="black"><font size="4"><?php echo $row2['room_description'];?></font></font><br>

</center>

   <font size="4"> 


<br><br><br>

    <center>

     
            <table width="80%">
        <tr>
        <td><font color="black"><font size="4">Room Number:  <?php echo $row2['room_no'];?></font></font></td>
     <td>  <font color="black"><font size="4">Room Price:  <?php echo $row1['room_type_price'];?></font></font></td>
      </tr>


     
              <tr>
        <td></td>
     <td>  </td>
      </tr>
      

      <tr>
        <td><font color="black"><font size="4">Available Status:  <?php echo $row2['room_availablity'];?></font></font></td>

      </tr>

      
     
</table>
<br><br><br>
<?php

 $room_availablity=$row2['room_availablity'];

if($room_availablity=='Yes')
   {
?>


<a href="visitor_booking.php?var2=<?php echo $room_id;?>"><font color="black"><font size="8"><b>Book</b></font></font></a>


<?php
}

else
{
?>

<font color="black"><font size="8"><b>Not Availabe</b></font></font></a>


<?php
}
?>

</center>
</font>

</div>
<br><br><br><br>



     <?php
   }
     
}

?>











  



























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