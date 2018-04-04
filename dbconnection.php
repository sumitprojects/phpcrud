<?php
define("servername", "localhost");
define("username", "root");
define("password", "mysql");
define("database", "Employees");


function connect()
{
	try {
		$con = mysqli_connect(servername,username,password,database);
	} catch (Exception $e) {
		echo 'Message: ' .$e->getMessage();
	}
	return $con;
}
?>