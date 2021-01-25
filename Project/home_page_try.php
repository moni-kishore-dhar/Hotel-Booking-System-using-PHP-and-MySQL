<!DOCTYPE html>
<html>
<head>
<title>Mr Guide</title>
<link rel="stylesheet" type="text/css" href="style.css">
<link rel="stylesheet" type="text/css" href="home_page_style.css">


<style>

 img{
    float: center;
    margin: 5px;
    width: 1000px;
    height: 400px;
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
   
    </li>
  
</ul>

</div>


<br>
<div id="search">
  <form action="/Project/Without Log In Search/search.php" method="POST">

    <input type="text" name="search" placeholder="Search Hotels.....">
    <input type="submit" value="Go">
</form>
</div>







<br>
<br><br><br><br>

<b><font size="15">Find your escape!!</font></b>
<br>
<br>
<br>
<br>
<br>





<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 7</div>
  <img src="Dhaka.jpg" width = "1000" hight="500">
  <div class="text">Dhaka</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 7</div>
  <img src="Shylet.jpg" width = "1000" hight="500">
  <div class="text">Sylhet</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 7</div>
  <img src="Chittagong.jpg" width = "1000" hight="500">
  <div class="text">Chittagong</div>
</div>


<div class="mySlides fade">
  <div class="numbertext">4 / 7</div>
  <img src="Cox's Bazar.jpg" width = "1000" hight="500">
  <div class="text">Khulna</div>
</div>


<div class="mySlides fade">
  <div class="numbertext">5 / 7</div>
  <img src="Bandarban.jpg" width = "1000" hight="500">
  <div class="text">Rajshahi</div>
</div>


<div class="mySlides fade">
  <div class="numbertext">6 / 7</div>
  <img src="sajek.jpg" width = "1000" hight="500">
  <div class="text">Rangpur</div>
</div>


<div class="mySlides fade">
  <div class="numbertext">7 / 7</div>
  <img src="Sundarban.jpg" width = "1000" hight="500">
  <div class="text">Barisal</div>
</div>




<a class="prev" onclick="plusSlides(-1)">&#10094;</a>
<a class="next" onclick="plusSlides(1)">&#10095;</a>

</div>
<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(4)"></span> 
  <span class="dot" onclick="currentSlide(5)"></span> 
  <span class="dot" onclick="currentSlide(6)"></span> 
  <span class="dot" onclick="currentSlide(7)"></span> 
</div>

<script>
var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides(slideIndex += n);
}

function currentSlide(n) {
  showSlides(slideIndex = n);
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("dot");
  if (n > slides.length) {slideIndex = 1}    
  if (n < 1) {slideIndex = slides.length}
  for (i = 0; i < slides.length; i++) {
      slides[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
  }
  slides[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " active";
}
</script>




<br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br><br>

<div class="relative">
  <div class="absolute1">
  <b><font size= "5">Mr guide's global hotel search</font></b><br><br>
  Mr guide’s hotel search allows users to compare hotel prices in just a few clicks from more than 400 booking sites for 1.8 million+ hotels in over 190 countries. With 1.4 billion visits annually to our site, travelers regularly use the hotel comparison to compare deals in the same city. Get information for trips to cities like Las Vegas or Orlando and you can find the right hotel on Mr guide quickly and easily. New York City and its surrounding area are great for trips that are a week or longer with the numerous hotels available.



  </div>


  <div class="absolute2">
  <b><font size= "5">Find cheap hotels on Mr Guide</font></b><br><br>
With Mr guide you can easily find your ideal hotel and compare prices from different websites. Simply enter where you want to go and your desired travel dates, and let our hotel search engine compare accommodation prices for you. To refine your search results, simply filter by price, distance (e.g. from the beach), star category, facilities and more. From budget hostels to luxury suites, Mr guide makes it easy to book online. You can search from a large variety of rooms and locations across the USA, like San Francisco and Chicago to popular cities and holiday destinations abroad!


  </div>



  <div class="absolute3">
<b> <font size= "5">Hotel reviews help you find your ideal hotel</font></b><br><br>
Over 175 million aggregated hotel ratings and more than 19 million images allow you to find out more about where you're traveling. To get an extended overview of a hotel property,Mr guide Mr guide shows the average rating and extensive reviews from other booking sites, e.g. Hotels.com, Expedia, Agoda, leading hotels, etc. Mr guide makes it easy for you to find information about your trip to Miami Beach, including the ideal hotel for you.


 </div>
  <div class="absolute4">
<b><font size= "5">How to book</font></b><br><br>
Mr guide is a hotel search with an extensive price comparison. The prices shown come from numerous hotels and booking websites. This means that while users decide on Mr guide which hotel best suits their needs, the booking process itself is completed through the booking sites (which are linked to our website). By clicking on the “view deal” button, you will be forwarded onto a booking site where you can complete the reservation for the hotel deal found on Mr guide.

Let Mr guide help you to find the right price from over 400 booking sites!
</div>
</div>



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