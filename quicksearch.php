<?php



$servername = "us-cdbr-iron-east-03.cleardb.net";
$username = "bda662b3a1ddc1";
$password = "0766bf1f";


$connection = mysql_connect($servername, $username, $password);
if (!$connection){
    die("Database Connection Failed" . mysql_error());
}
$select_db = mysql_select_db('ad_6ab48b484eff907');
if (!$select_db){
    die("Database Selection Failed" . mysql_error());
}
$output = '';
//collect
if(isset($_POST['search']))  {

	$searchq = $_POST['search'];
	$searchq = preg_replace ("#[^0-9a-z]#i", "", $searchq);

	$query = mysql_query("SELECT * FROM station_area WHERE area LIKE'%$searchq%'") or die("could not search");
	$count = mysql_num_rows($query);
	if($count == 0) {

		  $output = 'There was no search results!';
		}else {
		  	while($row = mysql_fetch_array($query)) {



				$ffuel_station_image = $row['fuel_station_image'];
				$ffuel_station_name = $row['fuel_station_name'];
				$ffuel_station_address = $row['fuel_station_address'];
				$farea = $row['area'];
				$ffuel_station_city = $row['fuel_station_city'];
				$ffuel_price = $row['fuel_price'];
				$link = $row['link'];
				$fnavigate = $row['navigate'];
				$id = $row['id'];

				$output .= '<div> <table style="width:100%; color:#0099cc; font-weight: bold;"><tr><td><img src="'.$ffuel_station_image.'"/></td></tr> <tr><td>'.$ffuel_station_name.'</td></tr> <tr><td>'.$ffuel_station_address.'</td></tr><tr><td>'.$farea.'</td></tr> <tr><td>'.$ffuel_station_city.'</td></tr><tr style="float:right;"><td style="float:right; color:#e60000; font-weight: bold;">'.$ffuel_price.'</td></tr><td style="float:right;"><a href="'.$link.'" target="_new"><img src="'.$fnavigate.'" title="Navigate"/></a></td></table> </div> <p><hr></p>';
		}
	}
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
			<a href="save&go.php"><img src="img/logo.png" title="Save & Go" alt="Save & Go Search Engine Fuel Station"/></a>
		</div><!-- end logo -->

    <?php if(isset($_SESSION["username"])){ ?>
		<h1 class="title"><div class="form">
		<p>Welcome, <a style="color:#F60;"><?php echo $_SESSION['username']; ?></a></p>
		</div></h1>
		<?php } ?>

		<div id="menu_icon"></div>
		<nav>
			<ul>
                <li><a href="save&go.php" title="Save & Go">Save & Go</a></li>
				<li><a href="quicksearch.php" class="selected"  title="Quick Search">Quick Search</a></li>
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

		<section class="top4">
			<div class="wrapper content_header clearfix">
				<div class="work_nav">

					<!--<ul class="btn clearfix">
						<li><a href="#" class="previous" data-title="Previous"></a></li>
						<li><a href="index.html" class="grid" data-title="Portfolio"></a></li>
						<li><a href="#" class="next" data-title="Next"></a></li>
					</ul>	-->

				</div><!-- end work_nav -->
				<h1 class="title">Quick Search</h1>
			</div>
		</section><!-- end top -->

		<section class="wrapper">
			<div class="content">
				<center><div id="station-logo"></div></center>

	<!-- HTML for SEARCH BAR -->
             <script>
function validateForm() {
    var x = document.forms["myForm"]["search"].value;
    if (x == null || x == "") {
        alert("you must enter something in the search!");
        return false;
    }
}
</script>

<!-- HTML for SEARCH BAR -->
	<form action="quicksearch.php" method="post" name="myForm" onsubmit="return validateForm()" class="search-wrapper cf">

		<input type="text" name="search" placeholder="Search location..."/>

		<button type="submit">Search</button>

	</form>



		<left><?php print("$output");?></left>


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
