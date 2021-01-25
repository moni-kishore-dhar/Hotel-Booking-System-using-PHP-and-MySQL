<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "mr_guide");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload'])) {
    
    // image file directory
    $target = "images/".basename($_FILES['image']['name']);

    // Get image name
    $image = $_FILES['image']['name'];
    $text = $_POST['text'];
    // Get text
    

    $sql = "INSERT INTO hotel (hotel_name, pic_1) VALUES ('$image', '$text')";
    // execute query
    mysqli_query($db, $sql);

    if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
      $msg = "Image uploaded successfully";
    }else{
      $msg = "Failed to upload image";
    }
  }
?>
<!DOCTYPE html>
<html>
<head>
<title>Image Upload</title>
<style type="text/css">
   #content{
    width: 50%;
    margin: 20px auto;
    border: 1px solid #cbcbcb;
   }
   form{
    width: 50%;
    margin: 20px auto;
   }
   form div{
    margin-top: 5px;
   }
   #img_div{
    width: 80%;
    padding: 5px;
    margin: 15px auto;
    border: 1px solid #cbcbcb;
   }
   #img_div:after{
    content: "";
    display: block;
    clear: both;
   }
   img{
    float: left;
    margin: 5px;
    width: 300px;
    height: 140px;
   }
</style>
</head>

<body>
<div id="content">
  <?php
  $db = mysqli_connect("localhost", "root", "", "mr_guide");
  $sql = "SELECT * FROM `hotel`";
  $result = mysqli_query($db,$sql);
    while ($row = mysqli_fetch_array($result)) {
      echo "<div id='img_div'>";
        echo "<img src='hotel/".$row['image']."' >";
        echo "<p>".$row['text']."</p>";
      echo "</div>";
    }
  ?>
  <form method="POST" action="photo.php" enctype="multipart/form-data">
    <input type="hidden" name="size" value="1000000">
    <div>
      <input type="file" name="image">
    </div>
    <div>
      <textarea 
        id="text" 
        cols="40" 
        rows="4" 
        placeholder="Say something about this image..."></textarea>
    </div>
    <div>
      <button type="submit" name="upload" value="Upload Image">POST</button>
    </div>
  </form>
</div>
</body>
</html>