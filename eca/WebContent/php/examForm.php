<?php 
include 'header.php';
include 'config.php';
include 'db.php';

if(!isset($_SESSION))
	{
		session_start();
		
	}

	
	//IF NOT LOGGED IN => REDIRRECT (FOR DIRECT ACCESS TO WEBPAGE FROM URL)
	else if(!isset($_SESSION['username']))
	{
		header("Location: http://localhost/phpsandbox/eca/WebContent/php/loginFirst.php");
	}


		$username=$_SESSION['username'] ;
        $query="select * from student_data where email='$username'";
        $result = $conn->query($query);
        $row = $result->fetch_assoc();
       
       //ALREADY REGISTRED EXAM FORM(ALLOWED TO FILL ONLY ONCE)
       if($row["branch"]!="")
       {
       		echo ' <script >
 					$(document).ready(function () {
 						$(document).on
 						Swal.fire({
						icon: "info",
						title: "Allowed to register exam form only once!!",
						button: "Ok",
						}).then(function(){
						window.location.replace("http://localhost/phpsandbox/eca/WebContent/php/viewExamForm.php");
					});
 				});
 					</script>';

       		// header("Location: http://localhost/phpsandbox/eca/WebContent/php/viewExamForm.php");
      }
	//IF EXAM FORM ALREADY FILLED REDIRECT
	// elseif () {
	// 	# code...
	// }
		
		$username=$_SESSION['username'] ;
        $query="select * from student_data where email='$username'";
        $result = $conn->query($query);
        $row = $result->fetch_assoc();
        
?>

<div class="reg_form" style="margin: 20px;">
		<div class="siteMap" style="margin:30px;
    		/*padding:1%;*/
    		width: 85%;
    		border-bottom: 2px solid #35424a;">
    	<a style="color:#e8491d;font:28px/1.5  Arial,Helvetica, sans-serif; margin: 30px;">Exam Form</a>
    	</div>
	<form class = "reg" id="form" action="examReg.php" name="myform" method="post">
			
			<div class="form-control">
				<input class="box-background box-border" type="text" placeholder="Enter First Name" id="fname" name="fname" value=<?php echo $row["fname"] ; ?> readonly><br/>
				<i class="fa fa-check-circle"></i>
				<i class="fa fa-exclamation-circle"></i>
				<small>Error Message</small>
			</div>

			<div class="form-control">
				<input class="box-background box-border" type="text" placeholder="Enter last name" id="lname" name="lname" value=<?php echo $row["lname"] ?> readonly><br/>
				<i class="fa fa-check-circle"></i>
				<i class="fa fa-exclamation-circle"></i>
				<small>Error Message</small>
			</div>
			
			<div class="form-control">
				<input class="box-background box-border" type="text" placeholder="Mothers Name" name="mname" id="mname" value=<?php echo $row["mname"] ?> readonly><br/>
				<i class="fa fa-check-circle"></i>
				<i class="fa fa-exclamation-circle"></i>
				<small>Error Message</small>
			</div>
			
			<div class="form-control">
				<input class="box-background box-border" type="text" placeholder="Enter email (Username will be same as email address)" id="email" name="email" value=<?php echo $row["email"] ?> readonly><br/>
				<i class="fa fa-check-circle"></i>
				<i class="fa fa-exclamation-circle"></i>
				<small>Error Message</small>
			</div>
			
			<div class="form-control">
				<input class="box-background box-border" type="text" placeholder="Phone Number" id="pn" name="pn" value=<?php echo $row["contact"] ?> readonly><br/>
				<i class="fa fa-check-circle"></i>
				<i class="fa fa-exclamation-circle"></i>
				<small>Error Message</small>
			</div>
			
			
			<p id="p1" style="margin-left: 20px;"></p><br>
			
			<br><label for="dob">Date of birth: </label>
			
			<input type="date" name="dob" id ="dob" min="1980-01-01" max="2019-12-31" value=<?php echo $row["dob"] ?> readonly><br>
			
			<br><br>
					<select class="select-css" name="branch" required>
						<option value="">Branch</option>
						<option value="Computer Engineering">Computer Engineering</option>
						<option value="Information Technology">Information Technology</option>
						<option value="Electronics & Telecommunication">Electronics & Telecommunication Engineering</option>
					</select><br><br>

				
				<select class="select-css" name="semester" required>
					<option value="">Semester</option>
					<option value="1">1</option>
					<option value="2">2</option>
				</select><br><br>

				

				<select class="select-css" name="year" required>
					<option value="">Year</option>
					<option value="FE">FE</option>
					<option value="SE">SE</option>
					<option value="TE">TE</option>
					<option value="BE">BE</option>
				</select><br><br>


			<div class="form-control">
				<input class="box-background box-border" type="text" placeholder="Enter college code" id="collegec" name="collegec" required><br/>
			</div>
			
			<div class="form-control">
				<input class="box-background box-border" type="text" placeholder="Enter centre code" id="centrec" name="centrec" required><br/>	
			</div>

			<button name="submitbtn1" id="submitbtn1" type="Submit" value="Submit" onclick="resetForm()">Submit</button>

			<button name="resetbtn" type="Reset" value="Reset" onclick="resetForm()">Reset</button> 
	</form>
		</div>

<?php include 'footer.php'; ?>