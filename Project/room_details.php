<!DOCTYPE html>
<html>
<head>
<title>Mr Guide</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="home_page_style.css">


<style>

    
   img{
    float: center;
    margin: 5px;
    width: 800px;
    height: 300px;
   }







div.room_details
{


  border-radius: 5px;
  border: 2px solid black;
  padding: 20px; 
  width: 60%;
  min-height: 600px;
  max-height: 100%;
  left: 700px; 
  top: 35%;
  box-shadow: 5px 10px 8px 10px rgba(0, 0, 0, 0.5); 
  text-align: left;
  background: white;
  color: black;
  position: relative;
  text-align: right;
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
    <li><a href="manager_log_out.php">Log Out</a></li>
    <li><a href="connect_manager_profile.php">Profile</a></li>
    
    <li><a href="insert_room_details.php">Insert Room Details</a></li>
    <li><a href="hotel_manager_home_page.php">Home</a></li>
    
    
      
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
  




$result = mysqli_query($db_connect,"SELECT * FROM room_type WHERE hotel_hotel_id=$hotel_id");





while($row = mysqli_fetch_array($result))
{
$room_type_id=$row['room_type_id'];
?>


       <font size="4"> 
            <table width="80%">
              <tr>
        <td><a href="room_details.php?var=<?php echo $room_type_id;?>"><font color="black"><font size="4"><?php echo $row['room_type_catagory'];?></font></font></a></td>
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



$room_type_id= $_GET['var'];
$_SESSION["room_type_id"]=$room_type_id;

$result1 = mysqli_query($db_connect,"SELECT * FROM room_type WHERE room_type_id='$room_type_id'");

$result2 = mysqli_query($db_connect,"SELECT * FROM room WHERE room_type_room_type_id ='$room_type_id'");


while($row1 = mysqli_fetch_array($result1))
{


 while($row2 = mysqli_fetch_array($result2))
{
   
        ?>
<div class="room_details">

<a href="Edit Room Details/delete_room.php?var1=<?php echo  $row2['room_id'];?>"><font size="3"><font color="black">Delete</font></a>



<center>
 <?php echo "<img src='images/".$row2['room_photo']."' >";?><br>

<a href="Edit Room Details/edit_room_photo.php?var1=<?php echo  $row2['room_id'];?>"><font size="3"><font color="black">Edit</font></a>
<br><br><br>
 


 <font color="black"><font size="4"><?php echo $row2['room_description'];?></font></font><br>

 <a href="Edit Room Details/edit_room_description.php?var1=<?php echo  $row2['room_id'];?>"><font size="3"><font color="black">Edit</font></a>
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
        <td><font color="black"><font size="4">Available Status:  <?php echo $row2['room_availablity'];?></font></font></a></td>
     <td>  <a href="Edit Room Details/edit_room_availablity.php?var1=<?php echo  $row2['room_id'];?>"><font size="3"><font color="black">Edit</font></a></td>
      </tr>

      
     
</table>
</center>
</font>

</div>
<br><br><br><br>



     <?php
   }
     
}

?>











  








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





