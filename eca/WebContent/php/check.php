<?php
	
	include 'config.php';
	include 'db.php';
	
	 if(isset($_POST['email_check'])) {
  	    $email = $_POST['email'];
  	    $sql = "SELECT * FROM student_data WHERE email='$email'";
  	    $results = mysqli_query($conn, $sql);

        $sql = "SELECT * FROM admin_data WHERE email='$email'";
        $results1 = mysqli_query($conn, $sql);

        if(mysqli_num_rows($results) > 0 || mysqli_num_rows($results1) > 0 ) {
            echo 'taken';	
        }else{
            echo 'not_taken';
        }
        exit();
    }

?>
