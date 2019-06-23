
<?php 

$host="localhost"; // Host name 
$username="admin"; // Mysql username 
$password="29331243"; // Mysql password 
$db_name="dbms"; // Database name 

// Connect to server and select databse.
$conn=mysqli_connect("$host", "$username", "$password")or die("cannot connect"); 

mysqli_select_db($conn,"$db_name")or die("cannot select DB");

?>
