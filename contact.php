<?php
$errors = [];
$missing = [];
if (isset($_POST['send'])) {
    $expected = ['name', 'email', 'comments'];
    $required = ['name', 'comments', 'fav_movie'];
    $to = 'Mike Luz <onlymikeluz@gmail.com>';
    $subject = 'Hello! Feedback from online form';
    $headers = [];
    $headers[] = 'From: webmaster@mercywizard.com';
    $headers[] = 'Cc: webmaster@mercywizard.com';
    $headers[] = 'Content-type: text/plain; charset=uft-8';
    $authorized = null;
    if (!isset($_POST['fav_movie'])) {
        $_POST['fav_movie'] = '';
    }
    require './includes/process_mail.php';
    if ($mailSent) {
    	header('Location: thanks.php');
    	exit;
    }
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
	
<div id="contact_form">
<h1 id="hello">Say Hello!</h1><p>Click "Say Hello!" to toggle.</p>
<?php if ($_POST && ($suspect || isset($errors['mailfail']))) : ?>
<p class="warning">Sorry, your mail could not be sent.</p>
<?php elseif ($errors || $missing) : ?>
<p class="warning">You didn't say anything! Let's try that again.</p>
<?php endif; ?>
<br>
<form method="post" action="<?= $_SERVER['PHP_SELF']; ?>">

	<p>
	<label for="name">Name:
	<?php if ($missing && in_array('name', $missing)) : ?>
		<br><span class="warning">Please enter your name</span>
	<?php endif; ?>
	</label>
	<br>
	<input type="text" name="name" id="name"
	<?php
	if ($errors || $missing) {	
		echo 'value="' . htmlentities($name) . '"';
	}
	?>
	>
	</p>
	
	<br>
	
	<p>
	<label for="email">Email:
	<?php if ($missing && in_array('email', $missing)) : ?>
		<br><span class="warning">Please enter your email address</span>
		<?php elseif (isset($errors['email'])) : ?>
		<br><span class="warning">Invalid email address</span>
	<?php endif; ?>
	</label>
	<br>
	<input type="email" name="email" id="email"
		<?php
	if ($errors || $missing) {	
		echo 'value="' . htmlentities($email) . '"';
	}
	?>
	>
	</p>
	
	<br>
	
	<p>
	<label for="comments">Comments:
	<?php if ($missing && in_array('comments', $missing)) : ?>
		<br><span class="warning">Please enter your comments</span>
	<?php endif; ?>
	</label>
	<br>
	<textarea name="comments" id="comments"><?php  
		if ($errors || $missing) {
			echo htmlentities($comments);
		}	
	?></textarea>
	</p>
	<br>
	<p>
	<input type="submit" name="send" id="send" value="Say Hello!">
	</p>
	
	<br>
	
	<fieldset>
	   <legend>Favorite Movie: <?php if ($missing && in_array('fav_movie', $missing)) : ?>
	   	<br><span class="warning">Come on! You gotta like at least ONE of these!</span>
	   	<?php endif; ?>
	   </legend>
	<p>
	   <input type="radio" name="fav_movie" value="The Shining" id="shining"
	   <?php 
	   if ($_POST && $fav_movie == 'The Shining') {
	   	echo 'checked';
	   }
	   ?>
	   >
	      <label for="shining">The Shining</label>
	   <input type="radio" name="fav_movie" value="Solaris" id="solaris"
	   <?php 
	   if ($_POST && $fav_movie == 'Solaris') {
	   	echo 'checked';
	   }
	   ?>
	   >
	      <label for="solaris">Solaris</label>
	   <input type="radio" name="fav_movie" value="Fanny & Alexander" id="fanny"
	   	   <?php 
	   if ($_POST && $fav_movie == 'Fanny & Alexander') {
	   	echo 'checked';
	   }
	   ?>
	   >
	      <label for="fanny">Fanny & Alexander</label>
      	   <input type="radio" name="fav_movie" value="Troll 2" id="troll2"
      	   	   <?php 
	   if ($_POST && $fav_movie == 'Troll 2') {
	   	echo 'checked';
	   }
	   ?>
      	   >
	      <label for="troll2">Troll 2</label>  
	</p>
	</fieldset>

</form>
</div>

<!--
<pre>
<?php
if ($_GET) {
	echo 'Content of the $_GET array:<br>';
	print_r($_GET);	
} elseif ($_POST) {
	echo 'Content of the $_POST array:<br>';
	print_r($_POST);	
}
?>
</pre>
-->

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