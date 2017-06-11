<?php
?>

<?php
session_start();
if(session_destroy()) // Destroying All Sessions
{
header("Location: save&go.php"); // Redirecting To Home Page
}
?>
