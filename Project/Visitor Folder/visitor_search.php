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
    width: 200px;
    height: 200px;
   }





div.box
{


  border-radius: 5px;
  border: 2px solid black;
  padding: 20px; 
  width: 800px;
  height: 700px;
 
  
  box-shadow: 5px 10px 8px 10px rgba(0, 0, 0, 0.5); 
  
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
  


  $db = mysqli_connect("localhost", "root", "", "mr_guide");

  // Check connection
  if (!$db) {
      die("Connection failed: " . mysqli_connect_error());
  }

  $output='';

  if(isset($_POST['search'])){
    $searchkey= $_POST['search'];
    $searchkey=preg_replace("#[^0-9a-z]#i", "", $searchkey);
  
  

  $query ="SELECT * FROM ((region inner join regions_to_hotels on region.region_id = regions_to_hotels.region_region_id) inner join hotel on hotel.hotel_id = regions_to_hotels.hotel_hotel_id ) WHERE region.region_name LIKE '%$searchkey%' OR hotel.hotel_name LIKE '%$searchkey%'" ;
  
  $result = mysqli_query($db,$query);
    


    
        $count = mysqli_num_rows($result);

    if ($count==0){
      $output='No search result..';
    }

    else {

      while($row=mysqli_fetch_array($result)){
            $hotel_id=$row['hotel_id'];
            $hotel_name=$row['hotel_name'];
            $region_name=$row['region_name'];
            $hotel_address=$row['hotel_address'];
            $hotel_catagory_id=$row['hotel_catagory_id'];


$result1 = mysqli_query($db,"SELECT * FROM hotel_catagory WHERE hotel_catagory_id=$hotel_catagory_id");
while($row1=mysqli_fetch_array($result1))
{
              $hotel_catagory_star=$row1['hotel_catagory_star'];

}
          

?>
<center>
  <div class="box">
    <br><br>

  <a href="visitor_room_type.php?var=<?php echo $hotel_id;?>"><font color="black"><font size="6"><b><?php echo $hotel_name;?></a></b></font>  
           <font size="2"><b><?php echo $hotel_catagory_star;?></b></font>

      <br>

         <font size="4"><b><?php echo $hotel_address;?></b></font><br>
         <font size="2"><b><?php echo $region_name;?></b></font><br>

<table width="20%">
        
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

<br><br><br><br><br><br>

</center>
</div>
</center>
   <br><br><br><br><br><br>
         <?php
           
            

            }
    }
        



 }

?>
<center>

<?php

  print("$output");
?>

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