<?php
session_start();
if(!isset($_SESSION['studentName']))
{
    header("Location: ../login/index.html");
    exit;
}
?><!--
Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html>
<head>
<title>Edu-Analytical App</title>
<!-- For-Mobile-Apps -->
<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Multiple Weather Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //For-Mobile-Apps -->
<!-- Style -->
<link rel="stylesheet" href="css/style.css" type="text/css" media="all" />
<!-- Style -->
<!-- JavaScript -->
<script type="text/javascript" src="js/jquery.min.js"></script>
<!-- Javascript -->
</head>
<body>

<h1>Edu-Analytical App</h1>
<h2>Welcome <?php echo '<font color="green">'.$_SESSION['studentName'].'</font>&nbsp<a href="../logout.php">[Logout]</a>'; ?>, Please select your game</h2>

<div class="content">

	<div class="top">

		<div class="hk">
			<h2> <a href="games/acid-base-solutions_en.html" target="_blank">ACID-BASE</a></h2>
				<div class="info">
					<div class="temp">Take Test</div>
					<div class="term"></div>
					<div class="clear"></div>
				</div>
		</div>

		<div class="ln">
			<h2> <a href="games/area-builder_en.html" target="_blank">AREA BUILDER</a> </h2>
				<div class="info">
					<div class="temp">Take Test</div>
					<div class="term"></div>
					<div class="clear"></div>
				</div>
		</div>

		<div class="ny">
			<h2> <a href="games/arithmetic_en.html" target="_blank"> ARITHMETIC</a></h2>
				<div class="info">
					<div class="temp">Take Test</div>
					<div class="term"></div>
					<div class="clear"></div>
				</div>
		</div>

		<div class="clear"></div>

	</div>

	<div class="bottom">

		<div class="sy">
			<h2> <a href="games/forces-and-motion-basics_en.html" target="_blank">FORCES AND MOTION</a> </h2>
				<div class="info">
					<div class="temp">Take Test</div>
					<div class="term"></div>
					<div class="clear"></div>
				</div>
		</div>

		<div class="ct">
			<h2> <a href="games/ohms-law_en.html" target="_blank"> OHM'S LAW</a></h2>
				<div class="info">
					<div class="temp">Take Test</div>
					<div class="term"></div>
					<div class="clear"></div>
				</div>
		</div>

		<div class="rio">
			<h2> <a href="games/ph-scale_en.html" target="_blank">PH SCALE</a> </h2>
				<div class="info">
					<div class="temp">Take Test</div>
					<div class="term"></div>
					<div class="clear"></div>
				</div>
		</div>

		<div class="clear"></div>

	</div>

</div>

<div class="footer">
     <p>Made with the love for education| Implemented by <a href="http://w3layouts.com">R&D Team-J&J Public School.</a></p>
</div>
</body>
</html>
