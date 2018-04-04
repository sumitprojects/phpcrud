<?php

include 'dbconnection.php';

function insert($data)
{
	try {
		$con = connect();
		$insert = "INSERT INTO `Employees`.`employee` (`id`, `emp_name`, `adress`, `post`) VALUES (NULL, '".$data["emp_name"]."','".$data["adress"]."', '".$data["post"]."')";
		$status = mysqli_query($con, $insert);//0 or 1>
	} catch (Exception $e) {
		echo 'Message: ' .$e->getMessage();
	}
	return $status;
}


function selectalldata(){
	try {
		$con = connect();
		$selectalldata = "SELECT * from employee";
		$result = mysqli_query($con, $selectalldata);//0 or 1>
		$row = mysqli_fetch_all($result,MYSQLI_ASSOC);
	} catch (Exception $e) {
		echo 'Message: ' .$e->getMessage();
	}

	/*echo "<pre>";
	print_r($row);
	echo "</pre>";*/
	return $row;	
}


function delete($id)
{
	try {
		$con = connect();
		$delete = "DELETE FROM `Employees`.`employee` WHERE `employee`.`id` = $id";
		$result = mysqli_query($con, $delete);//0 or 1>
	} catch (Exception $e) {
		echo 'Message: ' .$e->getMessage();
	}

	/*echo "<pre>";
	print_r($row);
	echo "</pre>";*/
	return $result;
}

function selectbyid($id){
	try {
		$con = connect();
		$selectalldata = "SELECT * from employee where id=$id";
		$result = mysqli_query($con, $selectalldata);//0 or 1>
		$row = mysqli_fetch_array($result,MYSQLI_ASSOC);
	} catch (Exception $e) {
		echo 'Message: ' .$e->getMessage();
	}

	return $row;	
}


function update($data)
{
	try {
		$con = connect();
		$update = "UPDATE employee SET emp_name = '{$data['emp_name']}', adress = '{$data['adress']}', post = '{$data['post']}' WHERE id = {$data['id']}";
		$status = mysqli_query($con, $update);//0 or 1>
	} catch (Exception $e) {
		echo 'Message: ' .$e->getMessage();
	}
	var_dump($status);
	return $status;
}
?>