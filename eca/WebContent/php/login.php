<?php
	require 'config.php';
	require 'db.php';

	if(isset($_POST['username'])&&isset($_POST['password']))
	{
		$username=mysqli_real_escape_string($conn,$_POST['username']);
		$password=mysqli_real_escape_string($conn,$_POST['password']);
		
	$query="select * from student_data where password='$password' AND email='$username'";
	$result=mysqli_query($conn,$query);
	$rows = mysqli_num_rows($result);


	$query="select * from admin_data where password='$password' AND email='$username'";
	$result=mysqli_query($conn,$query);
	$rows_A = mysqli_num_rows($result);

	if($rows==1)
	{
		session_start();
		$_SESSION["username"]=$username;
		$_SESSION["password"]=$password;
		echo 'student';
		exit();
	}


	else if($rows_A==1){

		session_start();
		$_SESSION["username_A"]=$username;
		$_SESSION["password"]=$password;
		echo 'admin';
		exit();
	}


	else
	{
		echo 'false';
	}
	
	}
	
?>

