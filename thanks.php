<?php
$errors = [];
$missing = [];
if (isset($_POST['send'])) {
    $expected = ['name', 'email', 'comments'];
    $required = ['name', 'comments'];
    $to = 'Mike Luz <onlymikeluz@gmail.com>';
    $subject = 'Hello! Feedback from online form';
    $headers = [];
    $headers[] = 'From: webmaster@mercywizard.com';
    $headers[] = 'Cc: webmaster@mercywizard.com';
    $headers[] = 'Content-type: text/plain; charset=uft-8';
    $authorized = null;
    require './includes/process_mail.php';
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Mercy Wizard | Dev Music Ideas</title>
  <meta charset="utf-8">
<meta name=viewport content='width=700'>
  <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
  <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  <script src="accordion.js"></script>
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
	<li><a href="dev.php">Dev</a></li>
	<li> / </li>
	<li><a href="photos.php">Photos</a></li>	
	<li> / </li>
	<li><a href="/blog">Blog</a></li>
	</ul>
	<br>
	
<h1>Thanks!</h1>

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
</body>
</html>