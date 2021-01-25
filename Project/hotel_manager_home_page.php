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
    width: 400px;
    height: 150px;
   }


div.relative
{
position: relative;
min-height: 1500px;
max-height: 1000%;

width: 100%;


}



div.box
{


  border-radius: 5px;
  border: 2px solid black;
  padding: 20px; 
  width: 70%;
  height: 900px; 
  
  box-shadow: 5px 10px 8px 10px rgba(0, 0, 0, 0.5); 
  text-align: left;
  background: white;
  color: black;
  position: absolute;
  right: 40px;
  text-align: right;
}







div.room_type
{


  border-radius: 5px;
  border: 2px solid black;
  padding: 20px; 
  width: 20%;
  min-height: 800px;
  max-height: 400%;
  
  left: 25px; 
  box-shadow: 5px 10px 8px 10px rgba(0, 0, 0, 0.5); 
  text-align: left;
  background: white;
  color: black;
  position: absolute;
  

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

div.relative a{
    text-decoration: none;
    font-size: 14px;
    color: #fff;
}
div.relative a:hover
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
      
          </div>
    </li>
  
</ul>

</div>
<br><br><br><br><br><br><br><br>

<?php
 



 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "mr_guide";
  
  $db_connect = new mysqli($host,$dbUsername,$dbPassword,$dbname) or die('unable to connect');


  session_start();

?>



<div class="relative">

<div class="room_type">
<center><font size="5"><b>Catagories</b></font></center><br>




<?php


  $hotel_id=$_SESSION["hotel_id"];
  




$result_type = mysqli_query($db_connect,"SELECT * FROM room_type WHERE hotel_hotel_id=$hotel_id");





while($row_type = mysqli_fetch_array($result_type))
{

$room_type_id=$row_type['room_type_id'];
?>


       <font size="4"> 
            <table width="100%">
              <tr>
        <td><a href="room_details.php?var=<?php echo $room_type_id;?>"><font color="black"><font size="4"><?php echo $row_type['room_type_catagory'];?></font></font></a></td>
       <td><a href="Edit Room Type/edit_room_catagory.php?var=<?php echo $room_type_id;?>"><font color="black"><font size="4">Edit</font></font></a></td>

</tr>

        <tr>
          <td><font size="4"><?php echo $row_type['room_type_price'];?></font></font></a></td>
       <td><a href="Edit Room Type/edit_room_price.php?var=<?php echo $room_type_id;?>"><font color="black"><font size="4">Edit</font></font></a></td>

            </tr> 

  
 
<tr>
      <td><a href="Edit Room Type/delete_room_type.php?var=<?php echo $room_type_id;?>"><font color="black"><font size="4">Delete</font></font></a></td>
   </tr>  
      

  
      </tr>
      
      </table>
      <br>


</font>
 
<?php

}

?>
  



<p><b><a href="add_catagory.php"><font size="5"><font color="black">Add Catagories...</a></font></b></p>

</div>


















<?php

$manager_id=$_SESSION["manager_id"];
  

$result = mysqli_query($db_connect,"SELECT * FROM hotel WHERE manager_manager_id='$manager_id'");

while($row = mysqli_fetch_array($result))
{
 

        $_SESSION["hotel_id"]=$row['hotel_id'];



$result1 = mysqli_query($db_connect,"SELECT * FROM manager WHERE manager_id='$manager_id'");


 $hotel_catagory_id=$row['hotel_catagory_id'];
 $result3 = mysqli_query($db_connect,"SELECT * FROM hotel_catagory WHERE hotel_catagory_id='$hotel_catagory_id'"); 

 //for region output

 $result_region1 = mysqli_query($db_connect,"SELECT * FROM regions_to_hotels WHERE hotel_hotel_id='$hotel_id'");



while($row_region1 = mysqli_fetch_array($result_region1))
{
 $region_id=$row_region1['region_region_id'];
}


 $result_region2 = mysqli_query($db_connect,"SELECT * FROM region WHERE region_id='$region_id'");

while($row_region2 = mysqli_fetch_array($result_region2))
{
 $region_name=$row_region2['region_name'];
}

?>



<div class="box">

       
        <?php
        while($row1 = mysqli_fetch_array($result1))
{
        


        ?>


       <font size="3">Manager : <?php echo $row1['manager_name'];?>
        </font>
     

     <?php
   }


$hotel_id=$_SESSION["hotel_id"]

     ?>

    <center>
      <br>
      <font size="9"><b><?php echo $row['hotel_name'];?></b></font> 
      <a href="Edit Hotel Details/edit_hotel_name.php"><font size="3"><font color="black">Edit</font></a><br>

         <font size="6"><b><?php echo $row['hotel_address'];?></b></font> 
         <a href="Edit Hotel Details/edit_hotel_address.php"><font size="3"><font color="black">Edit</font></a><br>


         <font size="4"><b><?php echo $region_name;?></b></font> 
         <a href="Edit Hotel Details/edit_hotel_region.php"><font size="3"><font color="black">Edit</font></a><br><br><br>

      <table width="80%">
        
        <tr>
          <td><?php echo "<img src='images/".$row['pic_1']."' >";?>
            <a href="Edit Hotel Details/edit_pic_1.php"><font size="3"><font color="black">Edit</font></a>
          </td>
         <td><?php echo "<img src='images/".$row['pic_2']."' >";?>
          <a href="Edit Hotel Details/edit_pic_2.php"><font size="3"><font color="black">Edit</font></a>

         </td>

        </tr>

        <tr>
          <td><?php echo "<img src='images/".$row['pic_3']."' >";?>
          <a href="Edit Hotel Details/edit_pic_3.php"><font size="3"><font color="black">Edit</font></a>

          </td>
         <td><?php echo "<img src='images/".$row['pic_4']."' >";?>
         <a href="Edit Hotel Details/edit_pic_4.php"><font size="3"><font color="black">Edit</font></a>

         </td>

        </tr>
      </table>
      <br>
      <br>

     <?php
        while($row3 = mysqli_fetch_array($result3))
{
        ?>  


        
          <font size="5"><b><?php echo $row3['hotel_catagory_star'];?></b></font>  
          <a href="Edit Hotel Details/edit_hotel_catagory.php"><font size="3"><font color="black">Edit</font></a><br><br>




         <font size="5"><?php echo $row['hotel_description'];?></font> 
        <a href="Edit Hotel Details/edit_hotel_description.php"><font size="3"><font color="black">Edit</font></a>





    </center>



    
  



         <?php
   }
     ?>
          
        


 <?php

  
}

?>

  
      
    </font>

</div>



</div>



<br>





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