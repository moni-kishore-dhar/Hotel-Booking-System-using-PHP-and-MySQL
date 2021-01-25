 <!DOCTYPE html>
<html>
<head>
  <title>Sign In</title>
  <link rel="stylesheet" type="text/css" href="style.css">
  
<link rel="stylesheet" type="text/css" href="home_page_style.css">


  <style>
    





input[type=text], select {
  width: 60%;
  padding: 12px 20px;
  margin: 0px;
  border: none;
  box-sizing: border-box;
  background: transparent;
  outline: none;
  border-bottom: 1px solid black;

}

input[type=password], select {
 width: 60%;
  padding: 12px 20px;
  margin: 0px;
  border: none;
  box-sizing: border-box;
  background: transparent;
  outline: none;
  border-bottom: 1px solid black;
}

input[type=submit] {
  width: 40%;
  height: 40px;
  background-color: gray;
  color: black;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 20px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: darkgray;
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


 
<br><br><br><br><br>


  <center>
  <div class="signinbox">
    
  <form action="connect_log_in.php" method="Post">
   <br><br>
   <font size="4"><b>UserName</b></font><br>
   <input id="name" name="visitor_email" placeholder="username" type="text"><br><br>
   <font size="4"><b>Password</b></font><br>
   <input id="password" name="visitor_password" placeholder="**********"type="password"><br><br>
   <input name="submit" type="submit" value=" LOG IN "><br><br><br>

   <a href="sign_up_try.php"><font size="3"><font color="black">Create an account??</font></font></a>
    
  </form>




</div>


</center>


<br><br><br><br><br>

<br><br><br><br><br>

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