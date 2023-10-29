<?php
// database connection code
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');

$hostname = "localhost";
$username = "root";
$password = "";
$db_name ="anas";

$conn = mysqli_connect($hostname, $username, $password, $db_name);

if(!$con){
echo "connection failed";

}


?>