<?php
include '../php/config.php';
include '../php/db.php';
// include '../php/header.php';

if(!isset($_SESSION["username_A"])) 
    { 
        session_start(); 
    }


     if(!isset($_SESSION['username_A']))
	{
		header("Location: http://localhost/phpsandbox/eca/WebContent/php/loginFirst.php");
	}
	print_r($_SESSION);
 ?>

<link rel="stylesheet"  href="../css/homec.css">
	<link rel="stylesheet"  href="../css/src.css">
	<link rel="stylesheet"  href="../css/form-control.css">
	<link rel="stylesheet"  href="../css/time_table_css.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	 

	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js" type="text/javascript"></script>
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<script src="time_table.js"></script>



<body>
	<header>
		<div class="container">
			<div id="branding">
				<h1>University of  <span class="highlight">Pune</h1>
			</div>
			<nav>
				<ul>
					<li class="current"><a href="#">Home</a></li>
					<?php
                        if(isset($_SESSION['username_A']))
                        {
                            echo '<li><a href="../php/logout.php">Logout</a></li>';
                        }
                        else
                        {
                             echo '<li><a href="../login.html">Login</a></li>';
                        }
                     ?>
					<li><a href="services.php">Services</a></li>
				</ul>
			</nav>
		</div>

	</header>



  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">

        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Enter data for new Subject</h4>
        </div>

        <div class="modal-body">

			Subject Name: <input class="box-background box-border" type="text" placeholder="Enter Subject Name" id="subname" name="subname" required autocomplete="off" required><br/>
			<br>
			Subject Code: <input class="box-background box-border" type="text" placeholder="Enter Subject Code" id="subcode" name="subcode" required autocomplete="off" required><br/>
			<br>
			Branch: <select name="branch2" id = "branchID2" style="position: relative; left: 1%;"required autocomplete="off" required>
				<option value="" selected disabled hidden>Choose here</option>
				<option value="COMPUTER ENGINEERING">COMPUTER ENGINEERING</option>
				<option value="INFORMATION TECHNOLOGY">INFORMATION TECHNOLOGY</option>
				<option value="ELECTRONICS & TELECOMMUNICATION">ELECTRONICS & TELECOMMUNICATION</option>
			
	
			</select> <br>
			<br>
			Year: <select name="year2"  id = "yearID2" style="position: relative; left: 2%;"required autocomplete="off" required>
				<option value="" selected disabled hidden>Choose here</option>
				<option value="FE">FE</option>
				<option value="BE">BE</option>
				<option value="TE">TE</option>
				<option value="SE">SE</option>
	
			</select> <br>
			<br>
			Semester: <select name="sem2"  id = "semID2" style="position: relative; left: 2%;"required autocomplete="off" required>
				<option value="" selected disabled hidden>Choose here</option>
				<option value="1">Semester 1</option>
				<option value="2">Semester 2</option>
	      
			</select> <br>
			<br>
			Date: <input class="box-background box-border" type="date" placeholder="Enter date" id="date" name="date" required autocomplete="off" required><br/>
			<br>
        </div>

        <div class="modal-footer">
			<button type="button" id="submitsubject" value="Submit" class="btn btn-default" data-dismiss="modal">Submit</button>
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>


	<div class="reg_form">
		<h3>Fill in the details to view subjects</h3>	
	<form class = "reg" id="form"  name="myform" autocomplete="off">
			
	<!-- 	<label for="branch">Branch: </label> -->
		
			<select class="select-css" name="branch1" id = "branchID" required>
			<option value="" selected disabled hidden required>Branch</option>
			<option value="COMPUTER ENGINEERING">COMPUTER ENGINEERING</option>
			<option value="INFORMATION TECHNOLOGY">INFORMATION TECHNOLOGY</option>
			<option value="ELECTRONICS & TELECOMMUNICATION">ELECTRONICS & TELECOMMUNICATION
			</option>

		</select><br>

		
		<br>

			
		<select class="select-css"name="year1"  id = "yearID" required>
			<option value="" selected disabled hidden required>Year</option>
			<option value="FE">FE</option>
			<option value="BE">BE</option>
			<option value="TE">TE</option>
			<option value="SE">SE</option>

		</select>
		<br>
		<br>
				
		<select class="select-css" name="sem1"  id = "semID" required>
			<option value="" selected disabled hidden required>Semester</option>
			<option value="1">Semester 1</option>
			<option value="2">Semester 2</option>

		</select><br>

		<br>
		<table id="subject_t" style="width:50%">
			<thead>
				<tr>
					<th>Subject Name</th>
					<th>Subject Code</th>
					<th>Date and Time</th>
				  </tr>
			</thead>
			
		</table>
		
		
	</form>

		</div>


		<div class="btns">
			
			<h3>Edit list of subjects</h3>
			<button name="deletesub" id="deletesub" type="button" value="Submit">Delete Subject</button>
		<button name="addsub" id="addsub" type="button"  data-toggle="modal" data-target="#myModal">Add Subject</button>
		<br>
		</div>

<link rel="stylesheet"  href="../css/homec.css">
		<footer >
		        <nav id="fnav">
		                <ul>
		                    <li><a href="../xml/about.xml">About us</a></li>
		                    <li><a href="../php/contactUs.php">Contact Us</a></li>
		                    <li><a href="../php/siteMap.php">Site Map</a></li>
		                </ul>
		            </nav>
				<p>University of Pune , Copyright &copy; 2020</p>
		</footer>
	</body>
</html>

