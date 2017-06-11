<?php
session_start();
if(!isset($_SESSION["manager"])){
header("Location: managerlogin.php");
exit(); }
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
				<h1 class="title">Manager</h1>
			</div>
		</section><!-- end top -->

		<section class="wrapper">
			<div class="content">


<?php
	require('db.php');
	// session_start();


  $row = 0;
  if(isset($_SESSION["station_id"])){
		$station_id = $_SESSION['station_id'];
		if (isset($_POST['price'])){
				$price = $_POST['price'];
				if(is_numeric($price)){
					$price = '"'.$price. ' Per litre"';
					$updatequery = "UPDATE `station_area` SET fuel_price= $price WHERE id= $station_id";
					$updateres = mysql_query($updatequery) or die(mysql_error());
				}
				else {
					echo "<div class='form'><h3>Please submit a numeric to update.</h3></div>";
				}
			}
    $query = "SELECT * FROM `station_area` WHERE id = $station_id";
    $res = mysql_query($query) or die(mysql_error());
    $row = mysql_num_rows($res);
		if($row>0){
			while($row1 = mysql_fetch_assoc($res)) {
        $resf = $row1;
    	}
		}
}
  if($row == 1){    ?>
    <table id="managertable">
      <tr>
				<?php echo "<td rowspan='6'><img src='".$resf["fuel_station_image"]."'></img></td>" ?>
      </tr>
			<tr>
				<?php echo "<td style='width:50%;'>".$resf["fuel_station_name"]."</td>" ?>
      </tr>
			<tr>
				<?php echo "<td>".$resf["fuel_station_address"]."</td>" ?>
      </tr>
			<tr>
				<?php echo "<td>".$resf["fuel_station_city"]."</td>" ?>
      </tr>
      <tr>
        <?php echo "<td>".$resf["fuel_price"]."</td>" ?>
      </tr>
			<tr>
          <a href="manageredit.php" style="text-decoration:none; color:#FF4A4A; font-size:14px; ">EDIT MANAGER</a>
      </tr>
    </table>

		<div class="form">
		<form name="managerupdate" action="" method="post"></br></br></br></br>
		Update Price: </br>
		<input type="text" name="price" placeholder="New price" required /> $ Per litre</br></br>
		<input type="submit" name="submit" value="Update Price" style="border:none; background-color:#3C9; color:#FFF; font-size:16px; border-radius:6px; cursor:pointer;" title="Price"/>
		</form>
		</div>

  <?php }
  else{
  echo "<div class='form'><h3>You are not assigned to any petrol station. Contact Admin.</h3></div>";
  }
?>

			</div><!-- end content -->
		</section>
	</section><!-- end main -->

</body>
</html>
