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
				<li><a href="admin.php" title="Admin Dashboard">Admin Dashboard</a></li>

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
				<h1 class="title">Manage Stations</h1>
			</div>
		</section>
		<!-- end top -->

		<section class="wrapper">
			<div class="content">
				<div class="row">
<?php
require ('../db.php');
$table = 'station_area';

ECHO "<h2>Stations</h2>";

ECHO "<h4><a href='createstation.php'> Create station </h4>";

ECHO "<table border='1'><tr>";
// printing table headers
ECHO "<th>Station ID</th>";
ECHO "<th>Station Image</th>";
ECHO "<th>Name</th>";
ECHO "<th>Address</th>";
ECHO "<th>Area</th>";
ECHO "<th>City</th>";
echo "<th class='child' style='colspan:2; '>Manage</th>";

ECHO "</tr>\n";
// printing table rows
if ($_SERVER ['REQUEST_METHOD'] === 'GET') {
	// something posted
	if (isset ( $_POST ['ButtonDelete'] )) {
		$ID = $_GET ['B'];
		$query = mysql_query ( "Delete FROM station_area WHERE id ='$ID'" ) or die ( "Could not delete" );
		echo "
            <script type=\"text/javascript\">
            </script>
        ";
	}
}

$sql = "SELECT * FROM {$table}";
$query = mysql_query ( $sql );
$products = array ();
while ( $row = mysql_fetch_array ( $query, MYSQL_ASSOC ) ) {
	$products [$row ['id']] [] = $row;
}
foreach ( $products as $product_column => $list_products ) {
	foreach ( $list_products as $product ) {
		echo "<form action='' method='get' onClick='window.location.reload()'>";
		echo "<tr><td class='child'>" . $product ['id'] . "<input type='hidden' name='A' value=" . $product ['id'] . "></td>";
    echo "<td class='child'><img src='../" . $product ['fuel_station_image'] . "' height='60' width='110'></td>";
		echo "<td class='child'>" . $product ['fuel_station_name'] . "</td>";
    echo "<td class='child'>" . $product ['fuel_station_address'] . "</td>";
    echo "<td class='child'>" . $product ['area'] . "</td>";
    echo "<td class='child'>" . $product ['fuel_station_city'] . "</td>";
    echo "<td ><button type='submit'name='ButtonDelete' class='child' style='border:none; background-color:#3C9; color:#FFF; font-size:16px; border-radius:6px; cursor:pointer;'><input type='hidden' name='B' value=" . $product ['id'] . ">Delete</button></td>";
		echo "</form>";
	}
	echo "</div>";
}
?>
</dvi>
					</br>

				</div>
				<!-- end content -->

		</section>
	</section>
	<!-- end main -->

</body>
</html>
