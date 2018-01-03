<?php 
include_once 'connect.php';

	$stmt = $con->prepare("Select * from users");
	$stmt -> execute();
	while ($row = $stmt->fetch()) { 	?>

		<tr>
	      <th scope="row"><?php echo $row['id'] ?></th>
	      <td><?php echo $row['name'] ?></td>
	      <td><?php echo $row['lname'] ?></td>
	      <td><?php echo $row['phone'] ?></td>
	      <td><?php echo $row['job'] ?></td>
	      <td><a href="?del=<?php echo $row['id'] ?>" onclick="return deletUser(<?php echo $row['id'] ?>);"><i class="fa fa-trash-o"></i></a>
	      <td><a href="?edit=<?php echo $row['id'] ?>"><i class="fa fa-pencil-square-o"></i></a></td>
	 	</tr>

		     <?php			
	} 