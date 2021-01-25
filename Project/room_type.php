<!DOCTYPE html>
<html>
<head>
<title>Mr Guide</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="home_page_style.css">


<style>
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


div.room_type input{
    
    margin-bottom: 0px;
}
div.room_type input[type="text"]
{
    border: solid gray;
    border: box;
    background: transparent;
    outline: none;
    height: 40px;
    width: 60%;
    color: black;
    font-size: 16px;
}
div.room_type input[type="submit"]
{
    border: none;
    outline: none;
    height: 40px;
    width: 30%;
    background: gray;
    color: #fff;
    font-size: 18px;
    border-radius: 10px;
}
div.room_type input[type="submit"]:hover
{
    cursor: pointer;
    
    opacity: 0.5;
}

div.room_type a{
    text-decoration: none;
    font-size: 14px;
    color: #fff;
}
div.room_type a:hover
{
    color: #39dc79;
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
    

      <td><a href="Edit Room Type/delete_room_type.php?var=<?php echo $room_type_id;?>"><font color="black"><font size="4">Delete</font></font></a></td>
     
      

  
      </tr>
      
      </table>


</font>
 
<?php

}

?>
  
<form action="room_type.php" method="Post"><br><br>
  <input type="text" name="room_type_catagory" placeholder="Add Catagories...." required>
  <input type="text" name="room_type_price" placeholder="Add Price...." required>
  <input type="submit" name="submit" value="Submit">
  
</form>


<?php



if(isset($_POST["submit"]))
   {
$room_type_catagory = $_POST['room_type_catagory'];
$room_type_price = $_POST['room_type_price'];


     $INSERT = "INSERT Into room_type (room_type_catagory, room_type_price, hotel_hotel_id) values(?, ?, ?)";
     //Prepare statement
      
     
      $stmt = $db_connect->prepare($INSERT);
      $stmt->bind_param("ssi", $room_type_catagory, $room_type_price, $_SESSION["hotel_id"]);
      $stmt->execute();

      $stmt->close();
     $db_connect->close();
     header("location:room_type.php");
     

     } 
      

?>


</div>



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





