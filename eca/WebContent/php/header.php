<?php
 if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width">
	<title>Home Page</title>
	<link rel="stylesheet" type="text/css" href="../css/homec.css">
	<link rel="stylesheet" type="text/css" href="../css/src.css">
	<link rel="stylesheet"  href="../css/form-control.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<script src="https://code.jquery.com/jquery-3.4.1.min.js" integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="crossorigin="anonymous"></script>
	<link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet" />
   <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>
</head>
<body>
	<header>
		<div class="container">
			<div id="branding">
				<h1>University of  <span class="highlight">Pune</h1>
			</div>
			<nav>
				<ul>
					<li class="current"><a href="../home.php">Home</a></li>
					<?php
                        if(isset($_SESSION['username']))
                        {
                            echo '<li><a href="logout.php">Logout</a></li>';
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