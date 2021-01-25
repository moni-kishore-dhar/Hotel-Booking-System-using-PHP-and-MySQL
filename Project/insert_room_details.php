<!DOCTYPE html>
<html>
<head>
<title>Mr Guide</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="home_page_style.css">


<style>

div.room_insert
{


  border-radius: 5px;
  border: 2px solid black;
  padding: 20px; 
  width: 60%;
  min-height: 700px;
  max-height: 50%;
  left: 700px; 
  top: 35%;
  box-shadow: 5px 10px 8px 10px rgba(0, 0, 0, 0.5); 
  text-align: left;
  background: white;
  color: black;
  position: absolute;
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
        <td><a href="room_details.php?var=<?php echo $room_type_id;?>"><font color="black"><font size="4"><?php echo $row['room_type_catagory'];?></font></font></a></td></tr>

   <tr>  <td>
     <font color="black"><font size="4"><?php echo $row['room_type_price'];?></font></font></a>

        </td>
      </tr>
      
      </table>
<br>


<?php

}

?>




</font>
</div>

 <div class="room_insert">


<center><h1>Insert Data here</h1></center>
            <form action="insert_room_details.php" method="Post"  enctype="multipart/form-data">
            <p>Room Number</p>
            <input type="text" name="room_no" placeholder="Enter Room Number.." required>
            
            <p>Room Details</p>
            <textarea name="room_description" placeholder="Enter Room Details" cols="90" 
        rows="5" ></textarea>


        <p>Room Picture</p>

            <p>
            <input type="hidden" name="size" value="1000000">
    
            <input type="file" name="room_photo">
  </p>

            
            <p>Room status</p>
            Yes <input type="radio" name="room_availablity" value="Yes">
            No <input type="radio" name="room_availablity" value="No">
            



            <br><br><br>
            
           <center> <input type="submit" name="submit" value="Insert">
             </center>
            </form>
        
        


<?php
if(isset($_POST["submit"]))
   {
 
$room_type_id= $_SESSION["room_type_id"];

$room_no = $_POST['room_no'];
$room_availablity = $_POST['room_availablity'];
    $room_photo = $_FILES['room_photo']['name'];
$room_description = $_POST['room_description'];

    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "mr_guide";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     
$target = "images/".basename($room_photo);

     $INSERT = "INSERT Into room (room_no,  room_availablity, room_photo, room_description, room_type_room_type_id) values(?, ?, ?, ?, ?)";
     //Prepare statement
     
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("isssi", $room_no, $room_availablity, $room_photo, $room_description, $room_type_id);
      $stmt->execute();

     move_uploaded_file($_FILES['room_photo']['tmp_name'], $target);


      header("location:hotel_manager_home_page.php");
     
      $stmt->close();
     $conn->close();
     } 

     }
     
    
?>






</div>







  








<br><br><br><br><br><br><br><br><br><br><br><br>





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





