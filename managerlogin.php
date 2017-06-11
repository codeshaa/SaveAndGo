<?php
session_start();
if(isset($_SESSION["manager"])){
	header("Location: manager.php");
	exit();
}
elseif (isset($_SESSION["admin"])) {
	header("Location: admin.php");
	exit();
}
elseif (isset($_SESSION["username"])) {
	header("Location: save&go.php");
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
     <link rel="shortcut icon" href="img/IMG_1419.ico">
    <script type="text/javascript" src="js/jquery.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
</head>
<body>

	<header>
		<div class="logo">
			<a href="save&go.php"><img src="img/logo.png" title="Save & Go App - Search Engine Fuel Station" alt="Save & Go App - Search Engine Fuel Station"/></a>
		</div><!-- end logo -->

		<div id="menu_icon"></div>
		<nav>
			<ul>
                <li><a href="save&go.php" title="Save & Go">Save & Go</a></li>
				<li><a href="quicksearch.php" title="Quick Search">Quick Search</a></li>
                <li><a href="login.php" title="Login">Login</a> | <a href="registration.php" title="Register">Register</a></li>
        <li><a href="managerlogin.php" class="selected" title="Manager Login">Managers</a></li>
				<!--<li><a href="contact.html">Contact Us</a></li>-->
			</ul>
		</nav><!-- end navigation menu -->

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
				<h1 class="title">Manager Login</h1>
			</div>
		</section><!-- end top -->

		<section class="wrapper">
			<div class="content">


<?php
	require('db.php');
    // If form submitted, insert values into the database.
    if (isset($_POST['username'])){
        $username = $_POST['username'];
        $password = $_POST['password'];

		$username = stripslashes($username);
		$username = mysql_real_escape_string($username);
		$password = stripslashes($password);
		$password = mysql_real_escape_string($password);

	//Checking is user existing in the database or not
        $query = "SELECT id, username, password, station_id, status FROM `managers` WHERE username='$username' and password='".md5($password)."'";
		$res = mysql_query($query) or die(mysql_error());
		$rows = mysql_num_rows($res);
        if($rows==1){
					if($rows>0){
						while($row1 = mysql_fetch_assoc($res)) {
			        $resf = $row1;
			    	}
					}
					if($resf["status"] == 2 ){
							$_SESSION['manager'] = $resf["id"];
							$_SESSION['station_id'] = $resf["station_id"];
							$_SESSION['username'] = $username;
							header("Location: manager.php"); // Redirect user to manager.php
						}
						elseif ($resf["status"] == 3) {
							$_SESSION['admin'] = $resf["id"];
							$_SESSION['username'] = $username;
							header("Location: admin/admin.php"); // Redirect user to admin.php
						}
						elseif ($resf["status"] == 1) {
							echo "<div class='form'><h3>You are not approved yet. Please contact Admin.</h3><br/>Click here to <a href='managerlogin.php'>Login as Manager</a></div>";
						}
						else {
							echo "<div class='form'><h3>Somethings went wrong. Please contact database admin.</h3><br/>Click here to <a href='managerlogin.php'>Login as Manager</a></div>";
							echo $resf;
						}
            }
			else{
				echo "<div class='form'><h3>Username/password is incorrect.</h3><br/>Click here to <a href='managerlogin.php'>Login as Manager</a></div>";
			}
    }
		else
		{
?>

<div class="form">
<form action="" method="post" name="login">
Username:</br>
<input type="text" name="username" placeholder="Username" required /></br></br>
Password:</br>
<input type="password" name="password" placeholder="Password" required /></br></br>
<input name="submit" type="submit" value="Login" style="border:none; background-color:#3C9; color:#FFF; font-size:16px; border-radius:6px; cursor:pointer;" title="Login"/>
</form>
<p>Petrol Station managers <a href="managerregister.php" title="Register Here">Register Here</a></p>
</div>
<?php } ?>









				<!--<h1>H1 : Quisque non semper justo</h1>
				<h2>H2 : Quisque non semper justo</h2>
				<h3>H3 : Quisque non semper justo</h3>
				<h4>H4 : Quisque non semper justo</h4>
				<h5>H5 : Quisque non semper justo</h5>
				<h6>H6 : Quisque non semper justo</h6>-->
			</div><!-- end content -->
		</section>
	</section><!-- end main -->

</body>
</html>
