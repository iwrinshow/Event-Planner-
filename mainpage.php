<!DOCTYPE html>
<html>
<head>

<link rel="stylesheet" href="main.css">
</head>
<body>

<div class="bar">
  
	<img src="images\logo.jpg" class="fig">
	<a href="signup.php" class="button1">Signup</a>
	<a href="loginpage.php" class="button1">Login</a>
	<a href="mainpage.php" class="button2">Home</a>
	<a href="#about" class="button2">About</a>
  
</div>


<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext">1 / 5</div>
  <img src="images\1.jpg" style="width:100%">
  <div class="text">Caption Text</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">2 / 5</div>
  <img src="images\2.jpg" style="width:100%">
  <div class="text">Caption Two</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">3 / 5</div>
  <img src="images\3.jpg" style="width:100%">
  <div class="text">Caption Three</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">4 / 5</div>
  <img src="images\4.jpg" style="width:100%">
  <div class="text">Caption Four</div>
</div>

<div class="mySlides fade">
  <div class="numbertext">5 / 5</div>
  <img src="images\5.jpg" style="width:100%">
  <div class="text">Caption Five</div>
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
</div>

<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none"; 
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1} 
    slides[slideIndex-1].style.display = "block"; 
    setTimeout(showSlides, 2000); // Change image every 2 seconds
}
</script>

</body>
</html>
