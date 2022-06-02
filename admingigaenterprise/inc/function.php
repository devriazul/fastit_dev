<?php 

function Reconect($url){
	echo "<script> location.replace('".$url."')</script>";
}


//select data
function SelectData($table_name, $more){
	global $conn;
	$sql = "SELECT * FROM {$table_name} {$more}";
	$query = mysqli_query($conn,$sql);
	return $query;
}

//update data
function UpdateData($table_name, $more){
	global $conn;
	$sql = "UPDATE {$table_name} SET {$more} ";
	$update = mysqli_query($conn,$sql);
	return $update;
}


//delete data
function DeleteData($table_name, $more){
	global $conn;
	$sql = "DELETE FROM {$table_name} WHERE {$more} ";
	$Delete = mysqli_query($conn,$sql);
	return $Delete;
}





