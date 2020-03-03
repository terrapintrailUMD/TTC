<!--This is the landing page which displays a slideshow of pictures-->

<!DOCTYPE html>
<html>
<head>
<link rel="shortcut icon" type="image/x-icon" href="images/favicon.png">
<title>Home</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inconsolata">
</head>
<style>
body, html {
    height: 100%;
    font-family: "Inconsolata", sans-serif;
	background-color: #000000;
}
.slides {display: none}
</style>
<body>

<!--This is the navigation bar at the very top-->
<div class="w3-top">
  <div class="w3-row w3-padding w3-black">
    <div class="w3-col" style="width:14.28%">
      <a href="#" class="w3-button w3-block w3-black">HOME</a>
    </div>
    <div class="w3-col" style="width:14.28%">
      <a href="about.html" class="w3-button w3-block w3-black">ABOUT US</a>
    </div>
    <div class="w3-col" style="width:14.28%">
      <a href="join.html" class="w3-button w3-block w3-black">HOW TO JOIN</a>
    </div>
    <div class="w3-col" style="width:14.28%">
      <a href="ttc_officers.html" class="w3-button w3-block w3-black">OFFICERS</a>
    </div>
	<div class="w3-col" style="width:14.28%">
      <a href="faq.html" class="w3-button w3-block w3-black">FAQ</a>
    </div>
	<div class="w3-col" style="width:14.28%">
      <a href="contact.html" class="w3-button w3-block w3-black">CONTACT US</a>
    </div>
    <div class="w3-col" style="width:14.28%">
      <a href="calendar.html" class="w3-button w3-block w3-black">EVENT CALENDAR</a>
    </div>
  </div>
</div>

<!--Sets the format for the rest of the page-->
<div class="w3-display-container">

<!--This displays all of the pictures-->

<div class="slides w3-animate-right">
  <img src="images/first.jpg" style="width:100%;">
</div>
<div class="slides w3-animate-right">
  <img src="images/second.jpg" style="width:100%;">
</div>
<div class="slides w3-animate-right">
  <img src="images/third.jpg" style="width:100%;">
</div>
<div class="slides w3-animate-right">
  <img src="images/fourth.jpg" style="width:100%;">
</div>
<div class="slides w3-animate-right">
  <img src="images/fifth.jpg" style="width:100%;">
</div>
<div class="slides w3-animate-right">
  <img src="images/seventh.jpg" style="width:100%;">
</div>
<div class="slides w3-animate-right">
  <img src="images/eighth.jpg" style="width:100%;">
</div>
<div class="slides w3-animate-right">
  <img src="images/ninth.jpg" style="width:100%;">
</div>
<div class="slides w3-animate-right">
  <img src="images/tenth.jpg" style="width:100%;">
</div>
<div class="slides w3-animate-right">
  <img src="images/eleventh.jpg" style="width:100%;">
</div>
<div class="slides w3-animate-right">
  <img src="images/twelth.jpg" style="width:100%;">
</div>

<div class="w3-display-middle w3-center">
    <span class="w3-text-white" style="font-size:5vw">Terrapin<br>Trail Club<br></span>
	<span class="w3-text-red" style="font-size:3vw">Meeting: Every Monday at 7:10pm in School of Public Health 0302</span>
  </div>
  
 
<!--This will run the script to initiate button functionality-->
<button class="w3-button w3-black w3-display-left" onclick="prevSlide()">&#10094;</button>
  <button class="w3-button w3-black w3-display-right" onclick="nextSlide()">&#10095;</button>

</div>


<!--This is the script used to run the slideshow-->
<script>
var i = 1;
var timer = null;
slides(i);

<!--This will go to the next slide-->
function nextSlide()
{
	clearTimeout(timer)<!--This will clear the current timer-->
	slides(++i)
}

<!--This will go to the previous slide-->
function prevSlide()
{
	clearTimeout(timer)<!--This will clear the current timer-->
	slides(--i)
}

<!--This will translate over n amount of slides-->
function slides(n) {
  var slideShow = document.getElementsByClassName("slides");
  
  var x = 0;
  while (x < slideShow.length)<!--Set all slides to none-->
  	slideShow[x++].style.display = "none";
  
  <!--If n is greater than the length of the slides set n to 1 or if n is less-->
  <!--than 1, then set n to the length - 1. Or if it is not either one return n-->
  i= n > slideShow.length ? 1 : (n < 1) ? slideShow.length:i
  slideShow[i-1].style.display = "block";
  
  <!--Set a timer for 10 seconds to automatically transition to the next one-->
  timer = setTimeout(nextSlide,10000)
}
</script>

</div>

<!--This is the footer for the webpage-->
<footer class="w3-center w3-light-grey w3-padding-48 w3-large">
  <!--<p>Developed by William Guo</p>-->
</footer>

</body>
</html>
