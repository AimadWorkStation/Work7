<?php 
include_once 'connect.php';
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>TP1</title>
	
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="css/tp1.css">


	



</head>
<body>
	
	
	
	<div class="container text-center">
		




		<form method="POST" class="ml-auto mr-auto mt-4" onsubmit="return addUser();">
			  <div class="form-group row">
			    <label for="Name" class="col-sm-2 col-form-label">Name</label>
			    <div class="col-sm-10">
			      <input type="text" name="name" class="form-control" id="name" placeholder="First Name" required>
			    </div>
			  </div>

			  <div class="form-group row">
			    <label for="LastName" class="col-sm-2 col-form-label">Last name</label>
			    <div class="col-sm-10">
			      <input type="text" name="lname" class="form-control" id="lname" placeholder="Last Name" required>
			    </div>
			  </div>
			  
			  <div class="form-group row">
			    <label for="Phone" class="col-sm-2 col-form-label">Phone</label>
			    <div class="col-sm-10">
			      <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone" required>
			    </div>
			  </div>

			  <div class="form-group row">
			    <label for="job" class="col-sm-2 col-form-label">Job</label>
			    <div class="col-sm-10">
			      <input type="text" name="job" class="form-control" id="job" placeholder="job" required>
			    </div>
			  </div>

			  <div class="form-group row justify-content-center">
			    <div class="col-sm-10">
			      <button type="submit" class="btn btn-primary">Confirme</button>
			    </div>
			  </div>
		</form>


		<button class="btn btn-success d-none" id='refresh' onclick="myNbInfo('GET','select.php');">Update</button>
		<table class="table table-striped">
		  <thead>
		    <tr>
		      <th scope="col">#</th>
		      <th scope="col">Name</th>
		      <th scope="col">L-name</th>
		      <th scope="col">Phone</th>
		      <th scope="col">Job</th>
		      <th scope="col">Del</th>
		      <th scope="col">Edit</th>

		    </tr>
		  </thead>
		  <tbody id='tbody'>
		    <?php 
				// include 'select.php';
			 ?>
		  </tbody>
		</table>



	</div>	




	<script
  	src="https://code.jquery.com/jquery-3.2.1.min.js"
  	integrity="sha256-hwg4gsxgFZhOsEEamdOYGBf13FyQuiTwlAQgxVSNgt4="
  	crossorigin="anonymous"></script>

  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.bundle.min.js" type="text/javascript"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/js/bootstrap.min.js" type="text/javascript"></script>

	<script src="js/tp1.js"></script>
</body>
</html>