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
    width: 400px;
    height: 150px;
   }

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


<br>

<div id="search">
  <form action="visitor_search.php" method="POST">

    <input type="text" name="search" placeholder="Search Hotels.....">
    <input type="submit" value="Go">
</form>
</div>

<br>
<br><br><br><br>




<b><font size="15">Find your escape!!</font></b>
<br>
<br>
<br>
<br>
<br>



<?php
 



 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "mr_guide";
  
  $db_connect = new mysqli($host,$dbUsername,$dbPassword,$dbname) or die('unable to connect');







$result = mysqli_query($db_connect,"SELECT * FROM hotel");

while($row = mysqli_fetch_array($result))
{

// for sending hotel id in next room type page
$hotel_id=$row['hotel_id'];

$manager_id=$row['manager_manager_id'];
$hotel_catagory_id=$row['hotel_catagory_id'];

$result1 = mysqli_query($db_connect,"SELECT * FROM manager WHERE manager_id='$manager_id'");
$result2 = mysqli_query($db_connect,"SELECT * FROM hotel_catagory WHERE hotel_catagory_id='$hotel_catagory_id'"); 




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


<center>
<div class="box">


  <?php

while($row1 = mysqli_fetch_array($result1))
{

 ?>
      

       <font size="3">Manager : <?php echo $row1['manager_name'];?>
        </font>

<?php    
}

?>

<br><br><br>
<center>
      <br>
     
      <a href="visitor_room_type.php?var=<?php echo $hotel_id;?>"><font color="black"><font size="9"><b><?php echo $row['hotel_name'];?></a></b></font>  


      <br>

         <font size="6"><b><?php echo $row['hotel_address'];?></b></font><br>
         <font size="3"><b><?php echo $region_name;?></b></font><br>



<?php      
while($row2 = mysqli_fetch_array($result2))
{
 ?> 
  
<font size="3"><b><?php echo $row2['hotel_catagory_star'];?></b></font> 
<?php
}

?>




        <br><br><br><br>

      <table width="80%">
        
        <tr>
          <td><?php echo "<img src='/Project/images/".$row['pic_1']."' >";?>
            
          </td>
         <td><?php echo "<img src='/Project/images/".$row['pic_2']."' >";?>
          
         </td>

        </tr>

        <tr>
          <td><?php echo "<img src='/Project/images/".$row['pic_3']."' >";?>
          
          </td>
         <td><?php echo "<img src='/Project/images/".$row['pic_4']."' >";?>
        
         </td>

        </tr>
      </table>
      <br>
      <br>
<font size="5"><?php echo $row['hotel_description'];?></font> 

</center>


<br>

</div>
<br><br><br><br><br><br>
</center>
<?php

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