<?php 

	include_once 'connect.php';
	if($_SERVER['REQUEST_METHOD']=='POST'){
		$name = $_POST['name'];
		$lname = $_POST['lname'];
		$phone = $_POST['phone'];
		$job = $_POST['job'];
		$id = $_POST['id'];

		try {
			$stmt = $con -> prepare('update users set name=?,lname=?,phone=?,job=? where id = ?');
			$stmt -> execute(array($name,$lname,$phone,$job,$id));
		} catch (Exception $e) {
			echo "Error ". $e -> $e.getMessage();
		}
	}