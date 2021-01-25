
<?php



 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "mr_guide";
  
  $db_connect = new mysqli($host,$dbUsername,$dbPassword,$dbname) or die('unable to connect');


session_start();

$code = $_POST['code'];


//room statust no
$room_id=$_SESSION["room_id"];
$No='No';
$ad="UPDATE room
                 SET room_availablity=? WHERE room_id='$room_id'";


$stmt= $db_connect->prepare($ad);
$stmt->bind_param('s',$No);
$stmt->execute();
// $newId = $stmtins->insert_id;


$stmt->close();

//payment status done
$reservation_id=$_SESSION["reservation_id"];
$Done='Done';
$ad1="UPDATE reservation
                 SET payment_status=? WHERE reservation_id='$reservation_id'";


$stmt1= $db_connect->prepare($ad1);
$stmt1->bind_param('s',$Done);
$stmt1->execute();
// $newId = $stmtins->insert_id;


$stmt1->close();



?>


<!DOCTYPE html>
<html>
<head>


<link rel="stylesheet" type="text/css" href="/Project/style.css">
<link rel="stylesheet" type="text/css" href="/Project/home_page_style.css">

<style>

div.box
{


  border-radius: 5px;
  border: 2px solid black;
  padding: 20px; 
  width: 700px;
  height: 800px; 
  
  box-shadow: 5px 10px 8px 10px rgba(0, 0, 0, 0.5); 
  text-align: left;
  background: white;
  color: black;
  position: relative;
  right: 40px;
  
}



div.box a{
    text-decoration: none;
    font-size: 14px;
    color: black;
}
div.box a:hover
{
    opacity: 0.5;
}



input[type="date"]
{
    border: none;
    border-bottom: 1px solid black;
    background: transparent;
    outline: none;
    height: 30px;
    color: black;
    font-size: 16px;
    width: 90%;
    margin-bottom: 20px;
}

 
input[type="submit"]
{
    border: none;
    
    background: gray;
    outline: none;
    height: 40px;
    color: black;
    font-size: 16px;
    width: 80%;
    margin-bottom: 20px;
}

</style>








<script>
    function printDiv(divName){
      var printContents = document.getElementById(divName).innerHTML;
      var originalContents = document.body.innerHTML;
      document.body.innerHTML = printContents;
      window.print();
      document.body.innerHTML = originalContents;
    }
  </script>






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






<br><br><br><br><br><br><br><br>

<center>
<div class="box">
	<div id="box">

<?php



 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "mr_guide";
  
  $db_connect = new mysqli($host,$dbUsername,$dbPassword,$dbname) or die('unable to connect');







$room_id=$_SESSION["room_id"];
$room_type_id=$_SESSION["room_type_id"];
$hotel_id=$_SESSION["hotel_id"];
$visitor_id=$_SESSION["visitor_id"];



$result= mysqli_query($db_connect,"SELECT * FROM hotel WHERE hotel_id=$hotel_id");


$result2= mysqli_query($db_connect,"SELECT * FROM room_type WHERE room_type_id=$room_type_id");


$result3= mysqli_query($db_connect,"SELECT * FROM room WHERE room_id=$room_id");


$result4= mysqli_query($db_connect,"SELECT * FROM visitor WHERE visitor_id=$visitor_id");


$reservation_id=$_SESSION["reservation_id"];
$result5= mysqli_query($db_connect,"SELECT * FROM reservation WHERE reservation_id=$reservation_id");



while($row4 = mysqli_fetch_array($result4))
{

?> 
<br><br><br><br>
<center>
<b><font color="black"><font size="9">Mr. <?php echo $row4['visitor_name'];?></font></font></b><br><br>

<b><p><font size="6">Booking Details</p></b></font>
<br>
</center>



<?php

}



while($row = mysqli_fetch_array($result))
{

?>  
<center>
<b><font color="black"><font size="6"><?php echo $row['hotel_name'];?></font></font></b><br><br>
<b><font color="black"><font size="5"><?php echo $row['hotel_address'];?></font></font></b><br><br>
</center>

<?php
}


while($row2 = mysqli_fetch_array($result2))
{

?>  
<center>
<b><font color="black"><font size="5"><?php echo $row2['room_type_catagory'];?></font></font></b><br><br>
</center>

<?php
}



while($row3 = mysqli_fetch_array($result3))
{

?>  
<center>
<b><font color="black"><font size="4">Room No: <?php echo $row3['room_no'];?></font></font></b><br><br>
</center>

<?php
}



?>





<?php
while($row5 = mysqli_fetch_array($result5))
{

?>  
<center>
<b><font color="black"><font size="4">Check In Date: <?php echo $row5['check_in'];?></font></font></b><br>          <b><font color="black"><font size="4">Check Out Date: <?php echo $row5['check_out'];?></font></font></b><br><br>          <b><font color="black"><font size="4">Total Cost: <?php echo $row5['total_payment'];?></font></font></b><br>
</center>



<?php
}



?>

<br><br>

<center>
<b><font color="black"><font size="4">Confirmation Code: <?php echo $code;?></font></font></b><br>
</center>
<br><br><br>





</div>

<center>
<button onclick="printDiv('box')" style="height: 50px; width: 200px;">Print</button>
</center><br><br>
<center><b>Collect this page for future purpose</b></center>
</div>

</center>
<br><br><br>








































<br><br><br><br><br><br><br><br><br><br>

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



