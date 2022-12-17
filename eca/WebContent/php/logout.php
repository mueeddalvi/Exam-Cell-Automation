<?php
	session_start();
	print_r($_SESSION);
	if(isset($_SESSION))
	{
		echo 'Logging out!!';
		print_r($_SESSION);	
		//unset($_SESSION['uesrrname']);
		session_destroy();
		// echo "logout";
		header("Location: http://localhost/phpsandbox/eca/WebContent/login.html");
	}
	echo 'hello';
?>
