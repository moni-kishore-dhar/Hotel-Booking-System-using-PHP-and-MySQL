
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
    <li><a href="visitor_log_out.php">Log Out</a></li>
    <li><a href="/Project/Visitor Folder/visitor_history.php">History</a></li>
    <li><a href="connect_profile.php">Profile</a></li>
    <li><a href="/Project/Visitor Folder/home_page_after_log_in.php">Home</a></li>
      
          </div>
    </li>
  
</ul>

</div>


<br>


<div id="search">
    <input type="text" id="Search" name="Search" placeholder="Search Hotels.....">
    <input type="submit" value="Go">

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

	$visitor_email=$_SESSION['visitor_email'];
	




$result = mysqli_query($db_connect,"SELECT * FROM visitor WHERE visitor_email LIKE '$visitor_email'");

?>


<?php

while($row = mysqli_fetch_array($result))
{


?>


        <font size="5">
            <center><font size="6">Profile</font></center><br><br><br>

            <table width="80%">
              <tr>
        <td>Name: <?php echo $row['visitor_name'];?></td>
     <td>
      <a href="Edit Visitor Profile/edit_visitor_name.php"><font size="3"><font color="black">Edit</font></a>

        </td>
      </tr>
      <tr>
        <td>Email: <?php echo $row['visitor_email'];?></td>
      </tr>
      <tr>
        <td>Contact Number: <?php echo $row['visitor_phone'];?></td>
        <td><a href="Edit Visitor Profile/edit_visitor_number.php"><font size="3"><font color="black">Edit</font></a></td>
      </tr>
        <tr>
        <td>Gender: </b><?php echo $row['visitor_gender'];?></td>
        <td><a href="Edit Visitor Profile/edit_visitor_gender.php"><font size="3"><font color="black">Edit</font></a></td>
      </tr>
      <tr>
        <td>Address: </b> <?php echo $row['visitor_address'];?></td>
        <td><a href="Edit Visitor Profile/edit_visitor_address.php"><font size="3"><font color="black">Edit</font></a></td>
      </tr>
      <tr>
      <td>Date of Birth: <?php echo $row['visitor_dob'];?></td>
      <td><a href="Edit Visitor Profile/edit_visitor_dob.php"><font size="3"><font color="black">Edit</font></a></td>
    </tr>
      </table>


</font>
 
<?php

}


mysqli_close($db_connect);
?>
   

   </div>



<br><br><br><br><br>

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
<p text align="right"><b><a href="home_page_after_log_in.php"><font size="1"><font color="white">mrguide.com</font></font></a></b></p>
</div>


</body>


</html>


