<?php 
include ('inc/db.php');

$sid=$_GET['sid'];
$status=$_GET['status'];
$sql = "UPDATE student_inf SET status=$status WHERE sid=$sid";

mysqli_query($conn, $sql);

header('location: all_student.php');

?>