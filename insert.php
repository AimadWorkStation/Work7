<?php 

	include_once 'connect.php';
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$name = $_POST['name'];
		$lname = $_POST['lname'];
		$phone = $_POST['phone'];
		$job = $_POST['job'];

		try {
			$stmt = $con -> prepare('insert into users(name,lname,phone,job) values (?,?,?,?)');
			$stmt -> execute(array($name,$lname,$phone,$job));
		} catch (Exception $e) {
			echo "Error ". $e -> $e.getMessage();
		}
	}