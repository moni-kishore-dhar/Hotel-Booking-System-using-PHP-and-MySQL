
<!DOCTYPE html>
<html>
<head>
<title>Mr Guide</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="home_page_style.css">


<style>
div.profile
{


  border-radius: 5px;
  border: 2px solid black;
  padding: 20px; 
  width: 800px;
  height: 600px; 
  left: 400px;
  box-shadow: 5px 10px 8px 10px rgba(0, 0, 0, 0.5); 
  text-align: left;
  background: white;
  color: black;
  position: relative;
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

<br><br><br><br><br><br>
<div class="profile">



<?php
 



 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "mr_guide";
	
	$db_connect = new mysqli($host,$dbUsername,$dbPassword,$dbname) or die('unable to connect');


	session_start();

	$manager_email=$_SESSION['manager_email'];
	




$result = mysqli_query($db_connect,"SELECT * FROM manager WHERE manager_email LIKE '$manager_email'");

?>


<?php



while($row = mysqli_fetch_array($result))
{


//session variable for inser the manager id
  
$_SESSION["manager_id"]=$row['manager_id'];


?>


        <font size="5">
          
            <center><font size="6">Profile</font></center><br><br><br>

      
            <table width="80%">
        <tr>
        <td>Name: <?php echo $row['manager_name'];?></td>
        <td><a href="Edit Manager Profile/edit_manager_name.php"><font size="3"><font color="black">Edit</font></a></td>
        </tr>

            <tr>
        <td>Email: <?php echo $row['manager_email'];?></td>
      </tr>        
      <tr>
        <td>Contact Number: <?php echo $row['manager_phone'];?></td>
        <td><a href="Edit Manager Profile/edit_manager_number.php"><font size="3"><font color="black">Edit</font></a></td>
        </tr>
        
        <tr>
        <td>Gender: </b><?php echo $row['manager_gender'];?></td>
        <td><a href="Edit Manager Profile/edit_manager_gender.php"><font size="3"><font color="black">Edit</font></a></td>
        </tr>

        <tr>
        <td>Address: </b> <?php echo $row['manager_address'];?></td>
        <td><a href="Edit Manager Profile/edit_manager_address.php"><font size="3"><font color="black">Edit</font></a></td>
      </tr>
        
        <tr>
        <td>NID: <?php echo $row['manager_nid'];?></td>
        <td><a href="Edit Manager Profile/edit_manager_nid.php"><font size="3"><font color="black">Edit</font></a></td>
        </tr>

        
</table>

</font>
 
<?php

}


mysqli_close($db_connect);
?>
   

   

   </div>





<br><br><br><br><br><br><br>

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