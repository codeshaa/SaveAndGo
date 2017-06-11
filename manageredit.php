<?php
session_start();
if(empty($_SESSION["manager"]) && (empty($_SESSION["admin"]))){
header("Location: managerlogin.php");
exit();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>Save & Go App - Search Engine Fuel Station</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0" />
	<link rel="stylesheet" type="text/css" href="css/reset.css">
	<link rel="stylesheet" type="text/css" href="css/save&go.css">
		<link rel="stylesheet" type="text/css" href="css/manager.css">
     <link rel="shortcut icon" href="img/IMG_1419.ico">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</head>
<body>

	<header>
		<div class="logo">
			<a href="save&go.php"><img src="img/logo.png" title="Save & Go App - Search Engine Fuel Station" alt="Save & Go App - Search Engine Fuel Station"/></a>
		</div><!-- end logo -->

		<h1 class="title"><div class="form">
		<p>Welcome, <a style="color:#F60;"><?php echo $_SESSION['username']; ?></a></p>
		</div></h1>

		<div id="menu_icon"></div>
		<nav>
			<ul>
                <li><a href="save&go.php" title="Save & Go">Save & Go</a></li>
				<li><a href="quicksearch.php" title="Quick Search">Quick Search</a></li>
				<li><a href="managerlogin.php" class="selected" title="Manager Login">Managers</a></li>

				<!--<li><a href="contact.html">Contact Us</a></li>-->
			</ul>
		</nav><!-- end navigation menu -->
    <a href="logout.php" style="text-decoration:none; color:#FF4A4A; font-size:14px; "><img src="img/logout.png" width="70" height="22" title="Logout"/></a>
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

		<section class="top2">
			<div class="wrapper content_header clearfix">
				<div class="work_nav">

					<!--<ul class="btn clearfix">
						<li><a href="#" class="previous" data-title="Previous"></a></li>
						<li><a href="index.html" class="grid" data-title="Portfolio"></a></li>
						<li><a href="#" class="next" data-title="Next"></a></li>
					</ul>	-->

				</div><!-- end work_nav -->
				<h1 class="title">Edit Profile</h1>
			</div>
		</section><!-- end top -->

		<section class="wrapper">
			<div class="content">


<?php
	require('db.php');
	// session_start();


  $row = 0;
  if((isset($_SESSION["manager"])) || (isset($_SESSION["admin"]))){
		$manager_id = $_SESSION['admin'];
		if (isset($_POST['password'])){
				$password = $_POST['password'];
					$password = md5($password);
					$updatequery = "UPDATE `managers` SET password= $password WHERE id= $manager_id";
					$updateres = mysql_query($updatequery) or die(mysql_error());
          if($updateres){
            echo "<div class='form'><h3>Password updated successfully.</h3><br/>Click here to <a href='managerlogin.php'>Login as Manager</a></div>";
          }
			}
    $query = "SELECT * FROM `managers` WHERE id = $manager_id";
    $res = mysql_query($query) or die(mysql_error());
    $row = mysql_num_rows($res);
		if($row>0){
			while($row1 = mysql_fetch_assoc($res)) {
        $resf = $row1;
    	}
		}
  }
  if($row == 1){    ?>

		<div class="form">
		<form name="manageredit" action="" method="post"></br></br></br></br>
    <?php echo "Name: ".$resf['name']; ?> </br></br>
    <?php echo "Username: ".$resf['username']; ?> </br></br></br></br>
		Password: </br>
		<input type="password" name="password" placeholder="Your new password" /></br></br>
		<input type="submit" name="submit" value="Update Password" style="border:none; background-color:#3C9; color:#FFF; font-size:16px; border-radius:6px; cursor:pointer;" title="Profile"/>
		</form>
		</div>

  <?php }
  else{
  echo "<div class='form'><h3>Oops! Something went wrong.</h3></div>";
  }
?>

			</div><!-- end content -->
		</section>
	</section><!-- end main -->

</body>
</html>
