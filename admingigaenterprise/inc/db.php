<?php
// Normal Connection
$hostname = 'localhost';
$username = 'root';
$pass = '';
$database = 'fast_itbd';

$conn = mysqli_connect($hostname, $username, $pass, $database);
if (!isset($conn)) {
    echo "Connection Error";
}


?>