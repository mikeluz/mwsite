<!DOCTYPE html>
<html lang="en">
<head>
  <title>Mercy Wizard | Dev Music Ideas</title>
  <meta charset="utf-8">
<meta name=viewport content='width=700'>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>
  <link rel="stylesheet" href="MWsite.css" type="text/css" media="screen"/>
</head>

<body>
<div class="container">

	<div class="banner">
 	  <a href="index.php"><img src="images/handwrittenbanner.jpg" alt="MERCY WIZARD" height="120" width=auto></a>
	</div>
	
<aside id="sticky-social">
    <ul>
        <li><a href="https://www.facebook.com/Mercy-Wizard-138067332877122/" class="entypo-facebook" target="_blank"><span>Facebook</span></a></li>
        <li><a href="https://twitter.com/mercywizard" class="entypo-twitter" target="_blank"><span>Twitter</span></a></li>
        <li><a href="https://www.linkedin.com/in/mike-luz-a6714497" class="entypo-linkedin" target="_blank"><span>LinkedIn</span></a></li>
        <li><a href="https://www.instagram.com/mercywizard/" class="entypo-instagrem" target="_blank"><span>Instagram</span></a></li>
    </ul>
</aside>
	
	<br>
	<ul class="menu">
	<li><a href="music.php">Music</a></li>
	<li> / </li>
	<li><a href="dev.php">Code</a></li>
	<li> / </li>
	<li><a href="/blog">Dev Blog</a></li>
	</ul>
	
	<hr>

<div id= "photos" class="slideshow-container">

  <div class="mySlides">
    <div class="numbertext">1 / 5</div>
    <a href="images/bodegacat.jpg"><img src="images/bodegacat.jpg" style="width:50%"></a>
    <div class="text"></div>
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 5</div>
    <a href="images/bodegahorse.jpg"><img src="images/bodegahorse.jpg" style="width:50%"></a>
    <div class="text"></div>
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 5</div>
    <a href="images/watertower.jpg"><img src="images/watertower.jpg" style="width:50%"></a>
    <div class="text"></div>
  </div>
  
    <div class="mySlides">
    <div class="numbertext">4 / 5</div>
    <a href="images/waterfront.jpg"><img src="images/waterfront.jpg" style="width:50%"></a>
    <div class="text"></div>
  </div>
  
    <div class="mySlides">
    <div class="numbertext">5 / 5</div>
    <a href="images/brokencat.jpg"><<img src="images/brokencat.jpg" style="width:50%"></a>
    <div class="text"></div>
  </div>

<!--
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>
-->  
 
</div>

<br>

<div style="text-align:center">
  <span class="dot" onclick="currentSlide(1)"></span> 
  <span class="dot" onclick="currentSlide(2)"></span> 
  <span class="dot" onclick="currentSlide(3)"></span> 
  <span class="dot" onclick="currentSlide(4)"></span> 
  <span class="dot" onclick="currentSlide(5)"></span> 
</div>

<hr>

	<ul class="menu2">
	<li><a href="about.php">About</a></li>
	<li>  /  </li>
	<li><a href="contact.php">Contact</a></li>
	<li>  /  </li>
	<li><a href="http://www.beingrecords.com/">Being Records</a></li>
	</ul>
	<br>
		</div>
  		<div>   
 		<?php include "./includes/copyright.php" ?>
                </div>
		<br>

</div>
<script src="slideshow.js"></script>
<script src="colorbox/jquery.colorbox-min.js"></script>
</body>
</html>