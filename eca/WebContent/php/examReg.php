<?php 
	include 'header.php';
	include 'config.php';
	include 'db.php';

	if(!isset($_SESSION['username']))
	{
		header("Location: http://localhost/phpsandbox/eca/WebContent/php/loginFirst.php");
	}

	$username=$_SESSION['username'];
if(isset($_POST['submitbtn1']))
		{
			// echo 'Submit button 1 pressed!!';

			$year=strtoupper(mysqli_real_escape_string($conn,$_POST['year']));
			echo $year;

			$sem=strtoupper(mysqli_real_escape_string($conn,$_POST['semester']));
			echo $sem;

			$branch=strtoupper(mysqli_real_escape_string($conn,$_POST['branch']));
			echo $branch;

			$college_code=strtoupper(mysqli_real_escape_string($conn,$_POST['collegec']));
			echo $college_code;

			$centre_code=strtoupper(mysqli_real_escape_string($conn,$_POST['centrec']));
			echo $centre_code;

			$query="update student_data set semester='$sem', year='$year', branch='$branch', college_code='$college_code', centre_code='$centre_code' where email='$username'";

			if(mysqli_query($conn,$query)){
				echo 'Inserted in database';
				
			}
			else
			{
				//echo 'not Inserted';
				echo 'ERROR: '.mysqli_error($conn);
			}

		}


 ?>


	<link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet" />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
	<link rel="stylesheet" type="text/css" href="../css/reg.css">

	<script>
		document.title="Exam Form";
		$(document).ready(function () {
			// body...
			$("button").click(function(){
				Swal.fire({
					icon: 'success',
					title: 'Registration successful!!',
					text: 'You are being redirected!',
					button: "Ok",
					}).then(function(){
						window.location.replace("http://localhost/phpsandbox/eca/WebContent/home.php");
					});
			});
		});
	</script>
	
	<div class="disp_form">
		<div class="siteMap" style="margin:30px;
    		/*padding:1%;*/
    		width: 85%;
    		border-bottom: 2px solid #35424a;">
    	<a style="color:#e8491d;font:28px/1.5  Arial,Helvetica, sans-serif; margin: 30px;">Exam Form</a>
    	</div>
			<h2>Record Submitted</h2>
			<div id="details">
				<table>
				 	<tr>
				 		<td>First Name</td>
				 		<td><?php echo htmlentities($_POST['fname']) ?></td>
				 	</tr>
				 	<tr>
				 		<td>Last Name</td>
				 		<td><?php echo htmlentities($_POST['lname']) ?></td>
				 	</tr>
				 	<tr>
				 		<td>Mothers Name</td>
				 		<td><?php echo htmlentities($_POST['mname']) ?></td>
				 	</tr>
				 	<tr>
				 		<td>Email address</td>
				 		<td><?php echo htmlentities($_POST['email']) ?></td>
				 	</tr>
				 	<tr>
				 		<td>Phone number</td>
				 		<td><?php echo htmlentities($_POST['pn']) ?></td>
				 	</tr>
				 	<tr>
				 		<td>Date of birth</td>
				 		<td><?php echo htmlentities($_POST['dob']) ?></td>
				 	</tr>
				 	<tr>
				 		<td>Branch</td>
				 		<td><?php echo htmlentities($_POST['branch']) ?></td>
				 	</tr>
				 	<tr>
				 		<td>College Code</td>
				 		<td><?php echo htmlentities($_POST['collegec']) ?></td>
				 	</tr>
				 	<tr>
				 		<td>Centre Code</td>
				 		<td><?php echo htmlentities($_POST['centrec']) ?></td>
				 	</tr>
				 </table>

				 <br><br>

				 <button>Proceed</button>
			</div>
			
		
	</div>
<?php include 'footer.php'; ?>


