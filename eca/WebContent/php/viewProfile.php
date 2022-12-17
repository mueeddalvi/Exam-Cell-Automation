<?php 
	include 'header.php';
	include 'config.php';
	include 'db.php';
	if(!isset($_SESSION))
	{
		session_start();
		
	}

	else if(!isset($_SESSION['username']))
	{
		header("Location: http://localhost/phpsandbox/eca/WebContent/php/loginFirst.php");
	}

		$username=$_SESSION['username'] ;
        $query="select * from student_data where email='$username'";
        $result = $conn->query($query);
        $row = $result->fetch_assoc();
?>

 <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>

	document.title="Profile Page";
	
	$(document).ready(function(){
		$("button").click(function(){
			window.location.replace("http://localhost/phpsandbox/eca/WebContent/home.php");
		});		
});

</script>



<title>Profile</title>
<link rel="stylesheet" type="text/css" href="../css/reg.css">
<div class="disp_form">
			<div class="siteMap" style="margin:30px;
            /*padding:1%;*/
            margin-top: 50px;
            width: 85%;
            border-bottom: 2px solid #35424a;">
        <a style="color:#e8491d;font:28px/1.5  Arial,Helvetica, sans-serif; margin: 30px;">Student Profile</a>
        </div>
			<div id="details" style="overflow-x:auto;">
				<table id="disp_table">
				 	<tr>
				 		<td>First Name</td>
				 		<td><?php echo htmlentities($row['fname']) ?></td>
				 	</tr>
				 	<tr>
				 		<td>Last Name</td>
				 		<td><?php echo htmlentities($row['lname']) ?></td>
				 	</tr>
				 	<tr>
				 		<td>Mothers Name</td>
				 		<td><?php echo htmlentities($row['mname']) ?></td>
				 	</tr>
				 	<tr>
				 		<td>Email address</td>
				 		<td><?php echo htmlentities($row['email']) ?></td>
				 	</tr>
				 	<tr>
				 		<td>Phone number</td>
				 		<td><?php echo htmlentities($row['contact']) ?></td>
				 	</tr>
				 	<tr>
				 		<td>Date of birth</td>
				 		<td><?php echo htmlentities($row['dob']) ?></td>
				 	</tr>
				 	<tr>
				 		<td>Gender</td>
				 		<td><?php echo htmlentities($row['gender']) ?></td>
				 	</tr>
				 	<tr>
				 		<td>Address</td>
				 		<td><?php echo htmlentities($row['addr']) ?></td>
				 	</tr>
				 </table>

				 <br><br>

				 <button id="prcd">Proceed</button>
			</div>
		
	</div>


<?php
	include 'footer.php';
	?>