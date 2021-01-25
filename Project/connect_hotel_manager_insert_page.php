






<?php




$hotel_name = $_POST['hotel_name'];
$hotel_address = $_POST['hotel_address'];
$hotel_description = $_POST['hotel_description'];
$hotel_catagory_id = $_POST['hotel_catagory_id'];
$pic_1 = $_FILES['pic_1']['name'];
$pic_2 = $_FILES['pic_2']['name'];
$pic_3 = $_FILES['pic_3']['name'];
$pic_4 = $_FILES['pic_4']['name'];




 
    $host = "localhost";
    $dbUsername = "root";
    $dbPassword = "";
    $dbname = "mr_guide";
    //create connection
    $conn = new mysqli($host, $dbUsername, $dbPassword, $dbname);
    if (mysqli_connect_error()) {
     die('Connect Error('. mysqli_connect_errno().')'. mysqli_connect_error());
    } 

    else {
     
            $SELECT = "SELECT manager_manager_id From hotel Where manager_manager_id = ? Limit 1";
            


           session_start();
     
           
$target1 = "images/".basename($pic_1);
$target2 = "images/".basename($pic_2);
$target3 = "images/".basename($pic_3);
$target4 = "images/".basename($pic_4);

     $INSERT = "INSERT Into hotel (hotel_name, hotel_address, hotel_description, hotel_catagory_id, pic_1, pic_2, pic_3, pic_4, manager_manager_id) values(?, ?, ?, ?, ?, ?, ?, ?, ?)";
     //Prepare statement
     
     
     $stmt = $conn->prepare($SELECT);
     $stmt->bind_param("i", $_SESSION["manager_id"]);
     $stmt->execute();
     $stmt->bind_result($_SESSION["manager_id"]);
     $stmt->store_result();
     $rnum = $stmt->num_rows;




     if ($rnum==0) {
      $stmt->close();

      $stmt = $conn->prepare($INSERT);
      $stmt->bind_param("sssissssi", $hotel_name, $hotel_address, $hotel_description, $hotel_catagory_id, $pic_1, $pic_2, $pic_3, $pic_4, $_SESSION["manager_id"]);
      $stmt->execute();



     move_uploaded_file($_FILES['pic_1']['tmp_name1'], $target1);
     move_uploaded_file($_FILES['pic_2']['tmp_name1'], $target2);
     move_uploaded_file($_FILES['pic_3']['tmp_name1'], $target3);
     move_uploaded_file($_FILES['pic_4']['tmp_name1'], $target4);

   
 //sending hotel id 

$manager_id=$_SESSION["manager_id"];
  
$result = mysqli_query($conn,"SELECT * FROM hotel WHERE manager_manager_id='$manager_id'");

while($row = mysqli_fetch_array($result))
{
 

        $_SESSION["hotel_id"]=$row['hotel_id'];
}


$region_region_id=$_POST['region_region_id'];
$hotel_hotel_id=$_SESSION["hotel_id"];

$INSERT1 = "INSERT Into regions_to_hotels (region_region_id, hotel_hotel_id) values (?,?)";
     //Prepare statement
     
      $stmt1 = $conn->prepare($INSERT1);
      $stmt1->bind_param("ii", $region_region_id, $hotel_hotel_id);
      $stmt1->execute();

 
     
      header("location:hotel_manager_home_page.php");
      $stmt->close();
      $stmt1->close();
       $conn->close();
     

     } 


else {
      
      echo "already insert data";
      $stmt->close();
     $conn->close();
     }
     
     
    }
     
  

?>





