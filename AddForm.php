<?php
$email_err="";
$name=$email=$password=$message="";
require_once 'connection.php';
if($_SERVER['REQUEST_METHOD']=="POST"){


	if (!empty($_POST["name"]))
	{
		$name=validate_func($name);
		$name=$_POST["name"];
	}
	if(!empty($_POST["email"]))
	{
		$email=$_POST["email"];
		$email = filter_var($email, FILTER_SANITIZE_EMAIL);

		if(!empty($email) && filter_var($email,FILTER_VALIDATE_EMAIL)===false){
			$email_err="Please put valid email";
			//$email_err="";

		}
		else{
			$email=$_POST["email"];
		
			//$email_err="Please put valid email";
			//$email=$_POST["email"];	
		}
	}
	if(!empty($_POST["password"])){

		//$password=password_hash($password, PASSWORD_DEFAULT);
		$password=$_POST["password"];
	}
	if(!empty($_POST["message"])){

		$message=validate_func($message);
		$message=$_POST["message"];
	}
	if(!empty($_POST["gender"])){

		$gender=$_POST["gender"];
	}
$sql="INSERT INTO users(name,email,password,message,gender) VALUES (?,?,?,?,?)";
$stmt=mysqli_prepare($conn,$sql);
if($stmt && empty($email_err) ){
	mysqli_stmt_bind_param($stmt,"sssss",$param_name,$param_email,$param_password,$param_message,$param_gender);
	$param_name=$name;
	$param_email=$email;
	$param_password=password_hash($password, PASSWORD_DEFAULT);
	$param_message=$message;
	$param_gender=$gender;

	if(mysqli_stmt_execute($stmt)){

	}
	else{
		echo "ERROR!";
		
	}

}else{
	echo "error_log($email_err)";
}
mysqli_stmt_close($stmt);
}
mysqli_close($conn);

function validate_func($name){
	 $name=trim($name);
	 $anme=stripcslashes($name);
	 $name=htmlspecialchars($name);
	 return $name;
}
?>



<!DOCTYPE html>
<html>
<head>
	<title>Form</title>
</head>
<body>
	<header>
		<center>
		PHP Add FORM
		<nav>
			<a href="form.php"> Display</a>
				<a> <strong>|</strong></a>
			<a href="Edit.php"> Edit </a>
		</nav>
			
		</center>
	</header>

	<form action="AddForm.php" method="POST">
		<center>
		<br>
		Name:<input type="text" name="name" placeholder="enter name" required="true"> <br><br>
		Email:<input type="text" name="email" placeholder="enter Email" required="true"><span><?php echo $email_err; ?></span><br><br>
		Password:<input type="Password" name="password" placeholder="enter Password" required="true"><br><br>
		Message:<textarea name="message" row="15" cols="30" reaquired="true"> </textarea><br><br>
		Gender:<input type="radio" name="gender" value="M">Male
			   <input type="radio" name="gender" value="F">Female
			   <input type="radio" name="gender" value="C">Custom

		<br><br>
		<input style="cursor: pointer; border-radius: 10px; color: red; "
		type="submit" value="submit">
		<br><br>
		</center>
	
	
	</form>

	<footer>
		<center>
		MS &copy | 2021 
		</center>
	</footer>

</body>
</html>