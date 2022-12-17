<?php
	 require ('config.php');
	 require ('db.php');
	 	include 'header.php';

	if(!isset($_POST['submitbtn']))
	{
		header("Location: http://localhost/phpsandbox/eca/WebContent/php/loginFirst.php");
	}

	 	
	if(isset($_POST['submitbtn']))
		{
			// echo 'Submit button pressed!!';

			$fname=mysqli_real_escape_string($conn,$_POST['fname']);
			// echo $fname;

			$lname=mysqli_real_escape_string($conn,$_POST['lname']);
			

			$mname=mysqli_real_escape_string($conn,$_POST['mname']);
			

			$email=mysqli_real_escape_string($conn,$_POST['email']);
			

			$contact=mysqli_real_escape_string($conn,$_POST['pn']);
			

			$password=mysqli_real_escape_string($conn,$_POST['password']);
			

			$dob=mysqli_real_escape_string($conn,$_POST['dob']);
			

			$gender=mysqli_real_escape_string($conn,$_POST['gender']);
			

			$addr=mysqli_real_escape_string($conn,$_POST['addr']);
			

			$query="insert into student_data (fname,lname,mname,email,contact,password,dob,gender,addr) values ('$fname','$lname','$mname','$email','$contact','$password','$dob','$gender','$addr')";

			if(mysqli_query($conn,$query)){
				// echo 'Inserted in database';
				
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
		<div class="siteMap" style="margin:30px;
    		/*padding:1%;*/
    		width: 85%;
    		border-bottom: 2px solid #35424a;">
    	<a style="color:#e8491d;font:28px/1.5  Arial,Helvetica, sans-serif; margin: 30px;">Student Registration</a>
    	</div>
			<h2>Record Submitted</h2>
			<div id="details">
				<table id="display_table">
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
				 		<td>Gender</td>
				 		<td><?php echo htmlentities($_POST['gender']) ?></td>
				 	</tr>
				 	<tr>
				 		<td>Address</td>
				 		<td><?php echo htmlentities($_POST['addr']) ?></td>
				 	</tr>
				 </table>

				 <br><br>

				 <button>Proceed</button>
			</div>
		
	</div>
<?php include 'footer.php'; ?>