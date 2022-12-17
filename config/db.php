<?php
	
	$conn = mysqli_connect('localhost','root','amueed99','sample');

	if(mysqli_connect_errno()){

		echo 'failed to connect to server'. mysqli_connect_errno();
	}
	