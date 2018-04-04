<?php

include 'dbfunction.php';

if (!empty($_GET['id'])) {

	$status = delete($_GET['id']);
	if ($status === 1) {
		header("location:index.php");
	} else {
		# code...
		header("location:index.php");
	}
	
} else {
	# code...
	header("location:index.php");
}


?>