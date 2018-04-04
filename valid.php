<?php

include 'dbfunction.php';

/**
*Author:Nilesh
*Date:15/3/2018
*
*/
header('location: index.php');
function validatedata($data)
{
	$error = 0;
	foreach ($data as $key => $value) {
		if (empty($value)) {
			$error = 1;
		}else{
			$value = filter_var($value, FILTER_SANITIZE_STRING);
		}
	}
	if ($error == 0) {
		return $data;
	}else {
		return "Please Fill the Data";
	}
}


if($_POST['submit']){

	if (!empty($_POST['id'])) {
		$data = array("id" => $_POST['id'],
					"emp_name" => $_POST['emp_name'],
			          "adress" => $_POST['address'],
			          "post" => $_POST['post']);
		$validatevalue  = validatedata($data);
		if(is_array($validatevalue)){
			$status = update($validatevalue);
			if ($status === 1) {
				header('location: index.php');
			}else{
				header('location: index.php');
			}
		}else{
			header('location: index.php');
		}

	} else {
		$data = array("emp_name" => $_POST['emp_name'],
			          "adress" => $_POST['address'],
			          "post" => $_POST['post']);
		$validatevalue  = validatedata($data);

		if(is_array($validatevalue)){
			$status = insert($validatevalue);
			if ($status > 0) {			
				header('location: index.php');
			}
		}else{
			header('location: index.php');
		}

	}
	
}
?>