

<!DOCTYPE html>
<html>
<head>
<title>Mr Guide</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="home_page_style.css">


<style>

div.insert_box{
  border-radius: 5px;
  border: 2px solid black;
  padding: 20px; 
  width: 900px;
  height: 1000px; 
  box-shadow: 5px 10px 8px 10px rgba(0, 0, 0, 0.5); 
  text-align: left;
  background: white;
  color: black;
  position: relative;
  left:400px;
  
}


input[type="text"], input[type="password"]
{
    border: none;
    border-bottom: 1px solid black;
    background: transparent;
    outline: none;
    height: 30px;
    color: black;
    font-size: 16px;
    width: 100%;
    margin-bottom: 20px;
}

</style>



</head>







<body>

<div class="top">
<br>
<font color="white"><font size="7px"> <b>Mr.Guide</b> </font></font>
<br><br><br>
</div>



     <br><br><br><br><br>
    
    <div class="insert_box">
    
        <center><h1>Insert Data here</h1></center>
            <form action="connect_hotel_manager_insert_page.php" method="Post" enctype="multipart/form-data">
            <p>Hotel Name</p>
            <input type="text" name="hotel_name" placeholder="Enter Hotel Name" required>
            <p>Hotel Address</p>
            <input type="text" name="hotel_address" placeholder="Enter Hotel Address" required>
            <p>Hotel Description</p>
            <input type="text" name="hotel_description" placeholder="Enter Hotel Description">

            
            <p>Hotel Catagory</p><br>
            One Star <input type="radio" name="hotel_catagory_id" value="1">
            Two Star <input type="radio" name="hotel_catagory_id" value="2">
            Three Star <input type="radio" name="hotel_catagory_id" value="3">
            Foure Star <input type="radio" name="hotel_catagory_id" value="4">
            Five Star <input type="radio" name="hotel_catagory_id" value="5">
            Six Star <input type="radio" name="hotel_catagory_id" value="6">
<br><br>

            <p>Hotel Pictures</p>



             <p>
            <input type="hidden" name="size" value="1000000">
    
            <input type="file" name="pic_1">
            
            <input type="hidden" name="size" value="1000000">
    
            <input type="file" name="pic_2">
             </p>

              <p>
            <input type="hidden" name="size" value="1000000">
    
            <input type="file" name="pic_3">
             
            <input type="hidden" name="size" value="1000000">
    
            <input type="file" name="pic_4">
             </p>

             <br>
             

             <select name="region_region_id">
             <option value="-1">Region</option>
             <option value="1">Dhaka</option>
             <option value="2">Sylhet</option>
             <option value="3">Chittagong</option>
             <option value="4">Rangpur</option>
             <option value="5">Rajshahi</option>
             <option value="6">Khulna</option>
             <option value="7">Barisal</option>

             </select>

            <br><br><br>
            
           <center> <input type="submit" name="submit" value="Insert">
             </center>
            </form>
        
        
        </div>
   
   









<br><br><br><br><br><br><br><br><br>


<div class="footer">
<br>


<center>
<table style="width:60%">

<tr>
  <td><b><a href="hotel_manager.php"><font size="2"><font color="white">Mr Guide Hotel Manager - for hoteliers</font></font></a></b></td>
  <td><b><a href="privacy.html"><font size="2"><font color="white">Privacy Notice</font></font></a></b></td>
</tr>

<tr>
  <td><b><a href="condition.html"><font size="2"><font color="white">Terms and Conditions</font></font></a></b></td>
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