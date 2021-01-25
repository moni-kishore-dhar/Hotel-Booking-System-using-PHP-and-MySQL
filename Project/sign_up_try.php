
<!DOCTYPE html>

<html>
<head>
<title>Sign Up</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="home_page_style.css">



<style>

div.signupbox {
  border-radius: 5px;
  border: 2px solid black;
  padding: 20px; 
  width: 50%;
  height: 700px;
   
  top: 35%;
  box-shadow: 5px 10px 8px 10px rgba(0, 0, 0, 0.5); 
  
  background: transparent;
  color: black;
  position: relative;
  text-align: right;
}


 
  

  

 

  


 



div.signupbox input[type="text"], input[type="password"], input[type="email"], input[type="date"]
{
    border: none;
    border-bottom: 1px solid black;
    background: transparent;
    outline: none;
    height: 40px;
    color: black;
    font-size: 16px;
}
input[type=submit] {
  border: none;
    outline: none;
    height: 40px;
    background: gray;
    color: black;
    font-size: 18px;
    border-radius: 20px;
}

input[type=submit]:hover {
  opacity: 0.5;
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
  
      <li><a href="#">About</a></li> 
    <li><a href="sign_up_try.php">Sign Up</a></li>
    <li><a href="sign_in_try.php">Sign In</a></li>
    

    <li><a href="home_page_try.php">Home</a></li>
      
          </div>
    </li>
  
</ul>

</div>





<br><br><br>



<br><br><br><br>
<center>
<div class="signupbox">
<br><br>
<center><b><font size="6"><font color="black">Registration</font></font></b></center><br><br><br>
<form action="connect_sign_up.php" method="Post">
  <center>
<table width="50%">

<tr>
<td>NAME</td>
<td><input type="text" name="visitor_name" maxlength="30" placeholder="max 30 characters" required>

</td>
</tr>

 

<tr>
<td>DATE OF BIRTH</td>
 
<td>
<input type="date" name="visitor_dob" required>
</td>
</tr>
 

<tr>
<td>EMAIL ID</td>
<td><input type="email" name="visitor_email" placeholder="@gmail.com" required></td>
</tr>
 


<tr>
<td>MOBILE NUMBER</td>
<td>
<input type="text" name="visitor_phone" maxlength="11" required>
</td>
</tr>


<tr>
<td>GENDER</td>
<td>
Male <input type="radio" name="visitor_gender" value="Male" required>
Female <input type="radio" name="visitor_gender" value="Female" required>
Others <input type="radio" name="visitor_gender" value="Others" required>
</td>
</tr>
 
<tr>
<td>ADDRESS </td>
<td><input type="text" name="visitor_address" required/></td>
</tr>
 


<tr>
<td>PASSWORD</td>
<td><input type="password" name="visitor_password" placeholder="at least 6 characters" minlength="6" required/></td>
</tr>

   

</table>
</center>

<br><br>

<center><input type="submit" value="Sign Up"></center><br><br>

</form>
</div>

</center>

<br><br><br><br><br><br><br><br><br><br>


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