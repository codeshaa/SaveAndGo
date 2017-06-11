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
				<h1 class="title">Create Station</h1>
			</div>
		</section>
		<!-- end top -->

		<section class="wrapper">
			<div class="content">
				<div class="row">
<?php
require ('../db.php');

// printing table rows
if ($_SERVER ['REQUEST_METHOD'] === 'POST') {
	// something posted
	if (isset ( $_POST ['station_name'] )) {
    $image = "";
		$name = $_POST['station_name'];
    $address = $_POST['address'];
    $area = $_POST['area'];
    $city = $_POST['city'];
    $price = $_POST['price'];
    $discount = $_POST['discount'];
    $link = $_POST['link'];
    $navigate = "pictures/navigate.png";

    switch ($name) {
      case 'BP':
            $image = "pictures/work3.jpg";
            break;
      case 'Z':
            $image = "pictures/Z.png";
            break;
      case 'Mobil':
            $image = "pictures/work5.jpg";
            break;
      case 'Gull':
            $image = "pictures/work6.jpg";
            break;
      case 'CALTEX':
            $image = "pictures/work2.jpg";
            break;

      default:
            $image = "pictures/work2.jpg";
        break;
    }

      $query = "INSERT into `station_area` (fuel_station_image, fuel_station_name, fuel_station_address, area, fuel_station_city, fuel_price, fuel_discount_code, link, navigate) VALUES ('$image','$name','$address','$area','$city','$price','$discount','$link','$navigate')";
      $result = mysql_query($query) or die(mysql_error());
      if($result){
          echo "<div class='form'><h3>Fuel Station created.</h3><br/>Click here to <a href='managestations.php'>View Fuel Stations</a></div>";
      }
      else {
        echo "<div class='form'><h3>New station entry failed. Please try again.</h3></div>";
      }

	} else {
      echo "<div class='form'><h3>Please select a station name.</h3><br/>Click here to <a href='createstation.php'>Create a new station</a></div>";
	}
}
?>
</div>
					</br>

          <div class="form">
          <form name="createstation" action="" method="post">
          Station Name: </br>
          <select name = "station_name">
          	<option value="BP" >BP</option>
            <option value="Z" >Z</option>
            <option value="Mobil" >Mobil</option>
            <option value="Gull" >Gull</option>
            <option value="CALTEX" >CALTEX</option>
          </select></br></br>
          Address: </br>
          <input type="text" name="address" placeholder="Station address" required /></br></br>
          Area: </br>
          <input type="text" name="area" placeholder="Station area" required /></br></br>
          City: </br>
          <input type="text" name="city" placeholder="Station city" required /></br></br>
          Price: </br>
          <input type="text" name="price" placeholder="Default Price" required /></br></br>
          Fuel Discount Code: </br>
          <input type="text" name="discount" placeholder="Fuel discount code" required /></br></br>
          Link: </br>
          <input type="text" name="link" placeholder="Link" required /></br></br>

          <input type="submit" name="submit" value="Create Station" style="border:none; background-color:#3C9; color:#FFF; font-size:16px; border-radius:6px; cursor:pointer;" title="Create"/>

          <a href="managestations.php">  '<<'Back to station list</a>

				</div>
				<!-- end content -->

		</section>
	</section>
	<!-- end main -->

</body>
</html>
