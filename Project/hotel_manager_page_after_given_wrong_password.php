



<!DOCTYPE html>
<html>
<head>
<title>Mr Guide</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="home_page_style.css">



<style>

body{
  background-color: grey;
  background-image: url("hote.jpg");
  background-repeat: no-repeat;
  background-attachment: fixed;
  
  background-size: 100% 100%;
  
}
div.login-box{
  border-radius: 5px;
  border: 2px solid black;
  padding: 20px; 
  width: 400px;
  height: 500px; 
  box-shadow: 5px 10px 8px 10px rgba(0, 0, 0, 0.5); 
  text-align: left;
  background: rgba(0, 0, 0, 0.5);
  color: #fff;
  position: relative;
  left: 30px;
  
}

h1{
    margin: 0;
    padding: 0 0 20px;
    text-align: center;
    font-size: 22px;
}


div.login-box p{
    margin: 0;
    padding: 0;
    font-weight: bold;
}
div.login-box input{
    width: 100%;
    margin-bottom: 20px;
}
div.login-box input[type="text"], input[type="password"]
{
    border: none;
    border-bottom: 1px solid #fff;
    background: transparent;
    outline: none;
    height: 40px;
    color: #fff;
    font-size: 16px;
}
div.login-box input[type="submit"]
{
    border: none;
    outline: none;
    height: 40px;
    background: #1c8adb;
    color: #fff;
    font-size: 18px;
    border-radius: 20px;
}
div.login-box input[type="submit"]:hover
{
    cursor: pointer;
    background: #39dc79;
    color: #000;
}

div.login-box a{
    text-decoration: none;
    font-size: 14px;
    color: #fff;
}
div.login-box a:hover
{
    color: #39dc79;
}


.avatar{
    width: 100px;
    height: 100px;
    border-radius: 50%;
    position: absolute;
    top: -50px;
    left: calc(50% - 50px);
}


div.big_text{
    font-style: italic;
    position: absolute;
    top: 50%;
    right: 35px;
    margin: 0;
    padding: 0 0 20px;
    text-align: left;
    font-size: 56px;
    font color: white;
    text-shadow:2px 2px black;
}

div.small_text{
    font-style: italic;
    position: absolute;
    top: 52%;
    right: 35px;
    margin: 0;
    padding: 0 0 20px;
    
    text-align: left;
    font-size: 46px;
    font color: white;
    text-shadow:2px 2px black; 

}




#hideMe {
    -webkit-animation: cssAnimation 2s forwards; 
    animation: cssAnimation 2s forwards;
}
@keyframes cssAnimation {
    0%   {opacity: 1;}
    90%  {opacity: 1;}
    100% {opacity: 0;}
}
@-webkit-keyframes cssAnimation {
    0%   {opacity: 1;}
    90%  {opacity: 1;}
    100% {opacity: 0;}
}




</style>






</head>







<body>


<body>
<div class="top">
    <br>
<font color="white"><font size="7px"> <b>Mr.Guide</b> </font></font>
<br><br><br><br>
</div>



<div class="nevi">

<ul>
    

    <li><a href="#"><font color="white">About</font></a></li>
    <li><a href="manager_registration.php"><font color="white">Register</font></a></li>
    <li><a href="home_page_try.php"><font color="white">Home</font></a></li>
   
    </li>
  
</ul>

</div>
<br><br><br><br><br>
<br><br><br><br><br>


     
    
    <div class="login-box">
    <img src="avatar.png" class="avatar"><br><br>
        <center><h1>Login Here</h1></center>
            <form action="connect_manager_login.php" method="Post">
            <p>Username</p>
            <input type="text" name="manager_email" placeholder="Enter Username">
            <p>Password</p>
            <input type="password" name="manager_password" placeholder="Enter Password">
            <input type="submit" name="submit" value="Login">
            <a href="#">Forget Password</pre></a><br><br>
            <a href="manager_registration.php">Create an account??</pre></a>  <br><br><br>
            <center><div id='hideMe'><p><b>Invalid Username or Password</b></p></div></center>    
            </form>
        
        
        </div>
   
    
    <div class="big_text">
       <font color="white">Enlarge Your Business</font>
    </div>

    <div class="small_text">
       <font color="white"><pre>           With Us</pre></font>
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
<p text align="right"><b><a href="home_page_try.php"><font size="1"><font color="white">mrguide.com</font></font></a></b></p>
</div>



    </body>
</html>