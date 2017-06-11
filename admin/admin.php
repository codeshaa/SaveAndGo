<?php
session_start();
if(!isset($_SESSION["admin"])){
header("Location: ../managerlogin.php");
exit(); }
?>



<!DOCTYPE html>
<html lang="en">
<head>
<title>Save & Go App - Search Engine Fuel Station</title>
<meta charset="utf-8">
<meta name="viewport"
	content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
<link rel="stylesheet" type="text/css" href="../css/reset.css">
<link rel="stylesheet" type="text/css" href="../css/save&go.css">
<link rel="shortcut icon" href="../img/IMG_1419.ico">
<script type="text/javascript" src="../js/jquery.js"></script>
<script type="text/javascript" src="../js/main.js"></script>
</head>
<body>

	<header>
		<div class="logo">
			<a href="../save&go.php"><img src="../img/logo.png"
				title="Save & Go App - Search Engine Fuel Station"
				alt="Save & Go App - Search Engine Fuel Station" /></a>
		</div>
		<!-- end logo -->

		<div id="menu_icon"></div>
		<nav>
			<ul>
				<li><a href="../save&go.php" title="Save & Go">Save & Go</a></li>
				<li><a href="../quicksearch.php" title="Quick Search">Quick Search</a></li>

				<!--<li><a href="contact.html">Contact Us</a></li>-->
			</ul>
		</nav>
		<!-- end navigation menu -->
		<a href="../logout.php"
			style="text-decoration: none; color: #FF4A4A; font-size: 14px;"><img
			src="../img/logout.png" width="70" height="22" title="Logout" /></a>
		<div class="footer clearfix">
			<ul class="social clearfix">


				<li><a href="https://www.facebook.com/SaveAGo/" target="_blank"
					class="fb" data-title="Facebook"></a></li>

				<li><a href="https://twitter.com/SaveNnGo" target="_blank"
					class="twitter" data-title="Twitter"></a></li>

			</ul>
			<!-- end social -->

			<div class="rights">
				<p>Copyright © 2016 Save & Go.</p>
				<p>
					Developed by <strong>. . .</strong>
				</p>
			</div>
			<!-- end rights -->
		</div>
		<!-- end footer -->
	</header>
	<!-- end header -->

	<section class="main clearfix">

		<section class="top2">
			<div class="wrapper content_header clearfix">
				<div class="work_nav">

					<!--<ul class="btn clearfix">
						<li><a href="#" class="previous" data-title="Previous"></a></li>
						<li><a href="index.html" class="grid" data-title="Portfolio"></a></li>
						<li><a href="#" class="next" data-title="Next"></a></li>
					</ul>	-->

				</div>
				<!-- end work_nav -->
				<h1 class="title">ADMIN DASHBOARD</h1>
			</div>
		</section>
		<!-- end top -->

		<section class="wrapper">
			<div class="content">
				<div class="row">
</div>
					</br>

          <div><a href="managereq.php" style="background-color: #3C9; font-size: 24px; cursor: pointer; color: white; padding: 14px 25px; text-align: center; text-decoration: none; display: inline-block;">Manage Managers and Requests</a></div></br></br>
          <div><a href="managestations.php" style="background-color: #3C9; font-size: 24px; cursor: pointer; color: white; padding: 14px 25px; text-align: center; text-decoration: none; display: inline-block;">Manage Fuel Stations</a></div></br></br>
          <div><a href="../manageredit.php" style="background-color: #3C9; font-size: 24px; cursor: pointer; color: white; padding: 14px 25px; text-align: center; text-decoration: none; display: inline-block;">Reset Password</a></div></br></br>

				<!-- end content -->

		</section>
	</section>
	<!-- end main -->

</body>
</html>
