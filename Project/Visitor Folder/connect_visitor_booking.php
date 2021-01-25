<?php




 $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "mr_guide";
  
  $db_connect = new mysqli($host,$dbUsername,$dbPassword,$dbname) or die('unable to connect');



session_start();


$visitor_email= $_SESSION["visitor_email"];

$result = mysqli_query($db_connect,"SELECT * FROM visitor WHERE visitor_email='$visitor_email'");

while($row = mysqli_fetch_array($result))
{
      
$visitor_id=$row['visitor_id'];
}

$_SESSION["visitor_id"]=$visitor_id;





$room_id=$_SESSION["room_id"];

$check_in = $_POST['check_in'];
$check_out = $_POST['check_out'];



$check_in1=strtotime("$check_in");
$check_out1=strtotime("$check_out");
$dif=$check_out1-$check_in1;
if($dif>=0)
{
   


    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "mr_guide";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     

$payment_status='Not Done';

     $INSERT = "INSERT Into reservation (check_in, check_out, room_type_room_type_id, payment_status, visitor_visitor_id, hotel_hotel_id, room_room_id) values(?, ?, ?, ?, ?, ?, ?)";
     //Prepare statement
     
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("ssisiii", $check_in, $check_out,$_SESSION["room_type_id"], $payment_status, $_SESSION["visitor_id"], $_SESSION["hotel_id"], $_SESSION["room_id"]);
      $stmt->execute();










$result5= mysqli_query($conn,"SELECT * FROM reservation WHERE room_room_id=$room_id");
while($row5 = mysqli_fetch_array($result5))
{


//for sending reservation id in booking details
  session_start();
  $_SESSION["reservation_id"]=$row5["reservation_id"];



        $reservation_id=$row5["reservation_id"];
        $room_type_id=$row5['room_type_room_type_id'];

        $date1=$row5['check_in'];
        
        $date2=$row5['check_out'];


        $date11=strtotime("$date1");

        $date22=strtotime("$date2");

    $sec=$date22-$date11;
    $div=$sec/86400;
    $div1=$div+1;



$result6= mysqli_query($conn,"SELECT * FROM room_type WHERE room_type_id=$room_type_id");


while($row6 = mysqli_fetch_array($result6))

{
$room_type_price=$row6['room_type_price'];

}

}


$total=$room_type_price*$div1 ;


$ad="UPDATE reservation SET total_payment=? WHERE reservation_id='$reservation_id'";

$stmt1= $conn->prepare($ad);
$stmt1->bind_param('s',$total);
$stmt1->execute();
// $newId = $stmtins->insert_id;


$stmt1->close();




















     

      header("location:booking_details.php");
     
      $stmt->close();
     $conn->close();
}
}

else
{

  echo "Wrong Information";
}






      

    







?>



