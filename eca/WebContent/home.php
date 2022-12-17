<?php
 //require 'php/login.php';  
session_start();

// print_r($_SESSION);
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>Home Page</title>
	<link rel="stylesheet"  href="./css/homec.css">
</head>
<body>
	<header>
		<div class="container">
			<div id="branding">
				<h1>University of <span class="highlight">Pune</span></h1>
			</div>
			<nav>
				<ul>
					<li class="current"><a href="home.php">Home</a></li>
                    <?php
                        if(isset($_SESSION['username']))
                        {
                            echo '<li><a href="./php/logout.php">Logout</a></li>';
                        }
                        else
                        {
                             echo '<li><a href="login.html">Login</a></li>';
                        }
                     ?>
					
					<li><a href="php/services.php">Services</a></li>
				</ul>
			</nav>
		</div>

	</header>

    <section id="showcase">
      <div class="container">
        <h1>University of <span class="highlight">Pune</span></h1>
        <p>The website aims to bring in a centralized system that will ensure the activities in the context of an examination that can be effectively managed.<br> This system allows students to enroll themselves into the system by registering their names or by sharing details to admin.</p>
      </div>
    </section>

    <section id="boxes">
    	<div  class="container">
            <div class="box">
                <img src="./img/logo1.png">

            <?php 
            if(!isset($_SESSION['username']))
             {
                echo '<h3><a href="s.html">Student Registraion</a></h3>';
            }
             else{

                    echo '<h3><a href="php/alreadyRegistred.php">Student Registraion</a></h3>';
            }
        ?>
                 <p>Students can enroll here. Only one registration per student is allowed.</p>
            </div>
    		
            
    		<div class="box" style="float: center;">
    			<img src="./img/logo2.png">
    			<?php
                if(!isset($_SESSION['username']))
                {

                    echo '<h3><a href="php/loginFirst.php">Hall Ticket Generation</a></h3>';
                }
                else{

                    echo '<h3><a href="php/hTicket.php">Hall Ticket Generation</a></h3>';
                }
             ?>
    			<p>Hall ticket for the student is generated. Accessible only after registration and exam form is filled.</p>
    		</div>

    		<div class="box" style="float: center;">
    			<img src="./img/logo3.png">
                <?php
                if(!isset($_SESSION['username']))
                {

                    echo '<h3><a href="php/loginFirst.php">Exam Form</a></h3>';
                }
                else{

                    echo '<h3><a href="php/examForm.php">Exam Form</a></h3>';
                }
             ?>
    			<!-- <h3><a href="uc.html">Time Table Generation</a></h3> -->
    			<p>Student can fill their academic related details, which will be used for hall ticket generation.</p>
    		</div>

    	</div>
    </section>

	<footer>
        <nav id="fnav">
                <ul>
                    <li><a href="xml/about.xml">About us</a></li>
                    <li><a href="php/contactUs.php">Contact Us</a></li>
                     <li><a href="php/siteMap.php">Site Map</a></li>
                </ul>
            </nav>
		<p>University of Pune , Copyright &copy; 2020</p>
	</footer>
</body>
</html>