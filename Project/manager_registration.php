<!DOCTYPE html>
<html>
<head>
<title>Mr Guide</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="home_page_style.css">



<style>




.avatar{
    width: 100px;
    height: 100px;
    border-radius: 50%;
    position: relative;
    top: -50px;
    left: calc(50% - 50px);
}






body{
    background-color: grey;
  background-image: url("hote.jpg");
  background-repeat: no-repeat;
  background-attachment: fixed;
  background-position: center;
  background-size: 100% 100%;
}
div.registration_box{
  border-radius: 5px;
  border: 2px solid black;
  padding: 20px; 
  width: 500px;
  height: 1000px; 
  box-shadow: 5px 10px 8px 10px rgba(0, 0, 0, 0.5); 
  text-align: left;
  background: rgba(0, 0, 0, 0.5);
  color: #fff;
    
   
}

h1{
    margin: 0;
    padding: 0 0 20px;
    text-align: center;
    font-size: 22px;
}

div.registration_box p{
    margin: 0;
    padding: 0;
   <input type="submit" name="submit" value="Register">
}
div.registration_box input{
    width: 100%;
    margin-bottom: 20px;
}
div.registration_box input[type="text"], input[type="password"], input[type="email"]
{
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 16px;

}
div.registration_box input[type="submit"]
{
    border: none;
    outline: none;
    height: 40px;
    width: 70%;
    background: #1c8adb;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;


}
div.registration_box input[type="submit"]:hover
{
    cursor: pointer;
    background: #39dc79;
    color: #000;
}




</style>






</head>







<body>
<div class="top">
<br><font color="white"><font size="7px"> <b>Mr.Guide</b> </font></font>
<br><br><br><br>

</div>




<div class="nevi">

<ul>
    

    <li><a href="#"><font color="white">About</font></a></li>
    <li><a href="hotel_manager.php"><font color="white">Log In</font></a></li>
    <li><a href="manager_registration.php"><font color="white">Register</font></a></li>
    <li><a href="home_page_try.php"><font color="white">Home</font></a></li>
   
    </li>
  
</ul>

</div>

<br><br><br><br><br>
<br><br><br><br><br>


<center>
    <div class="registration_box">
        <img src="avatar.png" class="avatar">
        <center><h1>Register Here</h1></center>
            <form action="connect_manager_registration.php" method="Post">
                <center>
        <table style="width:80%">

            <tr>
            <td>Name</td>
            <td><input type="text" name="manager_name" maxlength="30" placeholder="max 30 characters" required></td>
        </tr>
           

            <tr>
            <td>Nid or Passport Number</td>
            <td><input type="text" name="manager_nid" required=""></td>
            </tr>

            <tr>
            <td>Email Id</td>
            <td><input type="email" name="manager_email" placeholder="@gmail.com" required></td>
            </tr>


            <tr>
            <td>Mobile No</td>
            <td><input type="text" name="manager_phone" maxlength="11" required></td>
            </tr>



            <tr>
            <td>Gender</td>
            <td>
            Male<input type="radio" name="manager_gender" value="Male" required>
            Female<input type="radio" name="manager_gender" value="Female" required>
            Others<input type="radio" name="manager_gender" value="Others" required>
        </td>
        
        </tr>


            <tr>
            <td>ADDRESS</td>
            <td><input type="text" name="manager_address" required/></td>
                </tr>


            <tr>
            <td>Password</td>
            <td><input type="password" name="manager_password" placeholder="at least 6 characters" minlength="6" required></td>
            </tr>

            </table>
            <br><br>


            <input type="submit" name="submit" value="Register">
            </form>
        </center>
        
        </div>
    </center>







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
<p text align="right"><b><a href="home_page_try.php"><font size="1"><font color="white">mrguide.com</font></font></a></b></p>
</div>


</body>


</html>

  