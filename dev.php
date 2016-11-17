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
	<li><a href="photos.php">Photos</a></li>	
	<li> / </li>
	<li><a href="/blog">Blog</a></li>
	</ul>
	<br>	
<hr>
<div>
  <h1>1.) VERY AWESOME TIMER</h1>
  <h2>Enter a number. Click the button.</h2>
      
      <br>
      
      <div id="inputForm">
      </div>
      <br>
      <div id="inputBtn">
      </div>
      
      <h1 id="time">0:00</h1>
  <h3>Things you could be doing while this timer is running:</h3>
  <br>
  <ul>
  <li>Make a sandwich.</li>
  <li>Get coffee.</li>
  <li>Change your life.</li>
  <li>Read <em>War & Peace</em>.</li>
  <li>Build a website.</li>
  <li>Run a marathon.</li>
  <li>Check the weather.</li>
  <li>Procrastinate.</li>
  <li>Wonder why.</li>
  </ul>  
</div>

<hr>

<div>
<h1>2.) FLAWLESS MULTIPLICATION TABLE</h1>
<h2>Dynamically generated with PHP</h2>
<table id="mult_table">
    <?php
    // Create first row of table headers
    echo '<tr>';
    echo '<th>&nbsp;</th>';
    for ($col = 1; $col <= 15; $col++) :
        echo "<th>$col</th>";
    endfor;
    echo '</tr>';
    // Create remaining rows
    for ($row = 1, $col = 1; $row <= 15; $row++) :
        echo '<tr>';
        // First cell is a table header
        if ($col == 1) {
            echo "<th>$row</th>";
        }
        while ($col <= 15) :
            echo '<td>' . $row * $col++ . '</td>';
        endwhile;
        echo '</tr>';
        // Reset $col at the end of each row
        $col = 1;
    endfor;
    ?>
</table>
</div>

<br>
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
<script src="javascript.js"></script>
</body>
</html>