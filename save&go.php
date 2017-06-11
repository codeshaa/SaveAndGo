
<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Save & Go App - Search Engine Fuel Station</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/save&go.css">
     <link rel="shortcut icon" href="img/IMG_1419.ico">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</head>
<body>



	<header>
		<div class="logo">
			<a href="save&go.php"><img src="img/logo.png" title="Save & Go App - Search Engine Fuel Station" alt="Save & Go Search Engine Fuel Station"/></a>
		</div><!-- end logo -->

		<?php if(isset($_SESSION["username"])){ ?>
			<h1 class="title"><div class="form">
			<p>Welcome, <a style="color:#F60;"><?php echo $_SESSION['username']; ?></a></p>
			</div></h1>
		<?php } ?>

		<div id="menu_icon"></div>
		<nav>
			<ul>
                <li><a href="save&go.php" class="selected" title="Save & Go">Save & Go</a></li>
				<li><a href="quicksearch.php" title="Quick Search">Quick Search</a></li>
							<?php if(!isset($_SESSION["username"])){ ?>
                <li><a href="login.php" title="Login">Login</a> | <a href="registration.php" title="Register">Register</a></li>
							<?php } ?>
								<li><a href="managerlogin.php" title="Manager Login">Managers</a></li>

				<!--<li><a href="contact.html">Contact Us</a></li>-->
			</ul>
		</nav><!-- end navigation menu -->

		<?php if(isset($_SESSION["username"])){ ?>
				<a href="logout.php" style="text-decoration:none; color:#FF4A4A; font-size:14px; "><img src="img/logout.png" width="70" height="22" title="Logout"/></a>
		 <?php } ?>


		<div class="footer clearfix">
			<ul class="social clearfix">
				<li><a href="https://www.facebook.com/SaveAGo/" target="_blank" class="fb" data-title="Facebook"></a></li>

				<li><a href="https://twitter.com/SaveNnGo" target="_blank" class="twitter" data-title="Twitter"></a></li>
			</ul><!-- end social -->

			<div class="rights">
				<p>Copyright © 2016 Save & Go.</p>
				<p>Developed by <strong>. . .</strong></p>
			</div><!-- end rights -->
		</div ><!-- end footer -->
	</header><!-- end header -->

	<section class="main clearfix">
		<div class="work">
			<a href="#">
				<img src="img/Z.png" height="320" class="media" alt=""/>
				<div class="caption">
					<div class="work_title">
						<h1>Z Fuel Station</h1><br>
                       2 Stations <br>in</br>Auckland
					</div>
				</div>
			</a>
		</div>

		<div class="work">
			<a href="#">
				<img src="img/work2.jpg" height="320" class="media" alt=""/>
				<div class="caption">
					<div class="work_title">
						<h1>Caltex Fuel Station</h1><br>
                        2 Stations <br>in</br>Auckland
					</div>
				</div>
			</a>
		</div>

		<div class="work">
			<a href="#">
				<img src="img/work3.jpg" height="320" class="media" alt=""/>
				<div class="caption">
					<div class="work_title">
						<h1>BP Fuel Station</h1><br>
                       3 Stations <br>in</br>Auckland
					</div>
				</div>
			</a>
		</div>

		<div class="work">
			<a href="#">
				<img src="img/work4.jpg" height="320" class="media" alt=""/>
				<div class="caption">
					<div class="work_title">
						<h1>Challenge Fuel Station</h1>
                        <br>
                        1 Station <br>in</br>Auckland
					</div>
				</div>
			</a>
		</div>

		<div class="work">
			<a href="#">
				<img src="img/work5.jpg" height="320" class="media" alt=""/>
				<div class="caption">
					<div class="work_title">
						<h1>Mobil Fuel Station</h1>
                        <br>
                        4 Stations <br>in</br>Auckland
					</div>
				</div>
			</a>
		</div>

		<div class="work">
			<a href="#">
				<img src="img/work6.jpg" height="320" class="media" alt=""/>
				<div class="caption">
					<div class="work_title">
						<h1>Gull Fuel Station</h1>
                        <br>
                        1 Station <br>in</br>Auckland
					</div>
				</div>
			</a>
		</div>


	</section><!-- end main -->

</body>
</html>
