<?php
	 require ('config.php');
	 require ('db.php');
	 	include 'header.php';

	// if(!isset($_SESSION['username']))
	// {
	// 	header("Location: http://localhost/phpsandbox/eca/WebContent/php/loginFirst.php");
	// }

	 	// print_r($_POST);
	if(isset($_POST['submitbtn']))
		{
			echo 'Submit button pressed!!';

			$fname=mysqli_real_escape_string($conn,$_POST['fname']);
			echo $fname;

			$lname=mysqli_real_escape_string($conn,$_POST['lname']);
			echo $lname;

			
			$email=mysqli_real_escape_string($conn,$_POST['email']);
			echo $email;

			$contact=mysqli_real_escape_string($conn,$_POST['pn']);
			echo $contact;

			$password=mysqli_real_escape_string($conn,$_POST['password']);
			echo $password;

			$query="insert into admin_data (fname,lname,email,phone,password) 
				values ('$fname','$lname','$email','$contact','$password')";

			if(mysqli_query($conn,$query)){
				echo 'Inserted in database';
				
			}
			else
			{
				//echo 'not Inserted';
				echo 'ERROR: '.mysqli_error($conn);
			}
		}


//----------------------------------EXAM FORM------------------------------------

	

//----------------------------------EXAM FORM------------------------------------

	
?>

	<link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet" />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
	<link rel="stylesheet" type="text/css" href="../css/reg.css">

	<script>
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
		<fieldset>
			<legend>Administrator Registration</legend>
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
				 		<td>Email address</td>
				 		<td><?php echo htmlentities($_POST['email']) ?></td>
				 	</tr>
				 	<tr>
				 		<td>Phone number</td>
				 		<td><?php echo htmlentities($_POST['pn']) ?></td>
				 	</tr>
				
				 </table>

				 <br><br>

				 <button>Proceed</button>
			</div>
			

				
		</fieldset>
		
	</div>
<?php include 'footer.php'; ?>