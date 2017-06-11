<?php
session_start();
if(isset($_SESSION["username"])){
header("Location: save&go.php");
exit(); }
?>

<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Save & Go App - Search Engine Fuel Station</title>
<link rel="stylesheet" href="css/style2.css" />
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
        <li><a href="managerlogin.php" title="Manager Login">Managers</a></li>
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

		<section class="top">
			<div class="wrapper content_header clearfix">
				<div class="work_nav">

					<!--<ul class="btn clearfix">
						<li><a href="#" class="previous" data-title="Previous"></a></li>
						<li><a href="index.html" class="grid" data-title="Portfolio"></a></li>
						<li><a href="#" class="next" data-title="Next"></a></li>
					</ul>	-->

				</div><!-- end work_nav -->
				<h1 class="title">Manager Register</h1>
			</div>
		</section><!-- end top -->

		<section class="wrapper">
			<div class="content">

               <?php
	require('db.php');
    // If form submitted, insert values into the database.
    if (isset($_POST['username'])){
        $username = $_POST['username'];
		    $name = $_POST['name'];
        $password = $_POST['password'];
        $contact = $_POST['contact'];
        $address = $_POST['address'];
        $station_id = $_POST['station_id'];
		$username = stripslashes($username);
		$username = mysql_real_escape_string($username);
		$name = stripslashes($name);
		$name = mysql_real_escape_string($name);
		$password = stripslashes($password);
		$password = mysql_real_escape_string($password);
    $contact = stripslashes($contact);
		$contact = mysql_real_escape_string($contact);
    $address = stripslashes($address);
		$address = mysql_real_escape_string($address);
		$pass = md5($password);
		$status = 1;
        $query = "INSERT into `managers` (name, username, password, contact, address, status, station_id) VALUES ('$name','$username','$pass','$contact','$address',$status,$station_id)";

				$result = mysql_query($query) or die(mysql_error());

		if (empty($_POST["username"]))
				{
				$emailError = "User name is required";
				}

        if($result){
            echo "<div class='form'><h3>You are registered successfully. Your approval is pending. Please contact admin.</h3><br/>Click here to <a href='managerlogin.php'>Login for managers</a></div>";
        }
    }else{
			$query_stations = "SELECT id, fuel_station_name, fuel_station_address FROM `station_area`";
			$res = mysql_query($query_stations);

				if ($res) {
				    // output data of each row
				    while($row = mysql_fetch_assoc($res)) {
								$station_name[$row["id"]] = $row["fuel_station_name"]." - ".$row["fuel_station_address"];
				    }
			}
?>

<div class="form">
<form name="managerregistration" action="" method="post">
Name: </br>
<input type="text" name="name" placeholder="Name" required /></br></br>
Username: </br>
<input type="text" name="username" placeholder="Username" required /></br></br>
Password:</br>
<input type="password" name="password" placeholder="Password" required /></br></br>
Contact: </br>
<input type="contact" name="contact" placeholder="Contact Phone" required /></br></br>
Address:</br>
<input type="address" name="address" placeholder="Address" required /></br></br>
Station: </br>
<select name = "station_id">
	<?php
foreach($station_name as $x => $x_value) {
	echo  "<option value=$x > $x_value </option>";
}
?>
</select></br></br>


<input type="submit" name="submit" value="Register" style="border:none; background-color:#3C9; color:#FFF; font-size:16px; border-radius:6px; cursor:pointer;" title="Register"/>
<p>Managers <a href="managerlogin.php" title="Login Here">Login Here</a></p>
</form>
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
