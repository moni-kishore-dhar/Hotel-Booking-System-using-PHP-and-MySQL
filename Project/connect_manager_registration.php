<?php
$manager_name = $_POST['manager_name'];
$manager_nid = $_POST['manager_nid'];
$manager_email = $_POST['manager_email'];
$manager_phone = $_POST['manager_phone'];
$manager_gender = $_POST['manager_gender'];
$manager_address = $_POST['manager_address'];
$manager_password = $_POST['manager_password'];

 
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "mr_guide";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } else {

     session_start();

     $SELECT = "SELECT manager_email From manager Where manager_email = ? Limit 1";
     $INSERT = "INSERT Into manager (manager_name, manager_nid, 	manager_email, 	manager_password, manager_phone, manager_gender, 	manager_address) values(?, ?, ?, ?, ?, ?, ?)";
     //Prepare statement
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("s", $manager_email);
     $stmt->execute();
     $stmt->bind_result($manager_email);
     $stmt->store_result();
     $rnum = $stmt->num_rows;
     if ($rnum==0) {
      $stmt->close();
      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("sssssss", $manager_name, $manager_nid, $manager_email, $manager_password, $manager_phone, $manager_gender, $manager_address);
      $stmt->execute();


      //session variable create
      
      $_SESSION['manager_email']=$manager_email;






        //session variable for insert the manager id
      $f=$_SESSION['manager_email'];

      $qry = mysqli_query($conn,"SELECT * FROM manager WHERE manager_email LIKE '$f'");


      $row = mysqli_fetch_array($qry);
      $_SESSION["manager_id"]=$row['manager_id'];
       



      



      header("location:hotel_manager_insert_page.php");
      $stmt->close();
     $conn->close();

     } 

     else {
      
      header("location:manager_registration_with_(already_you_have_register_this_email)_message.php");
      $stmt->close();
     $conn->close();
     }
     
     
    }

?>