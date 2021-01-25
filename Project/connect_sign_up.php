<?php
$visitor_name = $_POST['visitor_name'];
$visitor_dob = $_POST['visitor_dob'];
$visitor_email = $_POST['visitor_email'];
$visitor_phone = $_POST['visitor_phone'];
$visitor_gender = $_POST['visitor_gender'];
$visitor_address = $_POST['visitor_address'];
$visitor_password = $_POST['visitor_password'];

 
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "mr_guide";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {
     $SELECT = "SELECT visitor_email From visitor Where visitor_email = ? Limit 1";
     $INSERT = "INSERT Into visitor (visitor_name, 	visitor_email, 	visitor_password, visitor_phone, visitor_gender, 	visitor_address, visitor_dob) values(?, ?, ?, ?, ?, ?, ?)";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $visitor_email);
     $stmt->execute();
     $stmt->bind_result($visitor_email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("sssssss", $visitor_name, $visitor_email, $visitor_password, $visitor_phone, $visitor_gender, $visitor_address, $visitor_dob);
      $stmt->execute();

      //session variable create
      session_start();
      $_SESSION['visitor_email']=$visitor_email;


      header("location:Visitor Folder/home_page_after_log_in.php");
      $_SESSION['visitor_email']=$visitor_email;
      $stmt->close();
     $conn->close();
     } 

     else {
      
      header("location:sign_up_with_(already_you_have_register_this_email)_message.php");
      $stmt->close();
     $conn->close();
     }
     
     
    }

?>