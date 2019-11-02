<?php
$baseurl = 'http://localhost/hms';

$host = 'localhost';
$user_name = 'root';
$password = '';
$db_name = 'hms';

$con = mysqli_connect($host,$user_name,$password,$db_name);

// Check connection
if (mysqli_connect_errno())
{
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
}
?>