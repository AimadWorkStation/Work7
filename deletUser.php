<?php 

	include_once 'connect.php';
	if($_SERVER['REQUEST_METHOD'] == 'POST'){
		$id = $_POST['userid'];
		echo "probleme here ".$id ;
		try {
			
			$stmt = $con -> prepare("delete from users where id = ?");
			$stmt -> execute(array($id));	

		} catch (Exception $e) {
			echo "probleme here ".$id ;
		}
		


	}