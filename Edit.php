<?php



?>



<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
	<header>
		<center>
		PHP FORM
		<nav>
			<a href="AddForm.php"> AddForm</a>
				<a> <strong>|</strong></a>
			<a href="Edit.php"> Edit </a>
		</nav>
			
		</center>
	</header>
<center>
	<table>
		<thead>
			<tr>

				<th>Name</th>
				<th>Email</th>
				<th>Gender</th>
				<th>Message</th>

			</tr>
		</thead>
		
		<tbody>
			
		<?php

		require_once "connection.php";

		error_reporting(0);
		$sql="SELECT * FROM `users`";
		$query=mysqli_query($conn,$sql);
		$row=mysqli_num_rows($query);
		
		if($row!=0){

    while($result=mysqli_fetch_assoc($query))
    {
             
            echo "
            <tr>
            <td>".$result[name]."</td>
            <td>".$result[email]."</td>
            <td>".$result[gender]."</td>
            <td>".$result[message]."</td>
            <td><a href='edit.php'>Edit</a></td>
			<td><a href='delete.php'>Delete</a></td>
			</tr>
            ";



    }
}


	else{
		echo "<tr> <th>NO RECORD FIND!</th> </tr>";
	}

	?>

	</tbody>


	</table>
</center>
	<footer>
		<center>
		MS &copy | 2021 
		</center>
	</footer>

</body>
</html>