<?php
/*
Author: Sai karnan
*/
?>

<?php
$servername = "us-cdbr-iron-east-03.cleardb.net";
$username = "bda662b3a1ddc1";
$password = "0766bf1f";

//$servername = "localhost";
//$username = "root";
//$password = "";

$connection = mysql_connect($servername, $username, $password);
if (!$connection){
    die("Database Connection Failed" . mysql_error());
}
$select_db = mysql_select_db('ad_6ab48b484eff907');
if (!$select_db){
    die("Database Selection Failed" . mysql_error());
}
?>
