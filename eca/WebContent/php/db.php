<?php
	
	$conn = mysqli_connect('localhost','root','amueed99','student');
	//print_r($conn);
	if(mysqli_connect_errno()){

		echo 'failed to connect to server'. mysqli_connect_errno();
	}