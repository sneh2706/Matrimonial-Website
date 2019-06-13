
<?php 

$host="localhost"; // Host name 
$username="xyzab"; // Mysql username 
$password="111111111"; // Mysql password 
$db_name="database"; // Database name 

// Connect to server and select databse.
$conn=mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 

mysqli_select_db($conn,"$db_name")or die("cannot select DB");

?>
