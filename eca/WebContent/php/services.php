<?php 
if(!isset($_SESSION)) 
    { 
        session_start(); 
    }

    include 'header.php';
  ?>

  <div class="siteMap" style="margin:30px;
            /*padding:1%;*/
            margin-top: 50px;
            width: 85%;
            border-bottom: 2px solid #35424a;">
        <a style="color:#e8491d;font:28px/1.5  Arial,Helvetica, sans-serif; margin: 30px;">Services</a>
        </div>

        <?php  
    if(isset($_SESSION['username']))
    {
    	echo '
    			<div class="disp_services">
        			<ul>
            			<li><a href="viewProfile.php">View Profile - Check your profile</a></li>
            			<li><a href="hTicket.php">Hall Ticket generation - Generate your hall ticket</a></li>
            			<li><a href="viewExamForm.php">View Exam Form - Check submitted exam form</a></li>
        			</ul>
    			</div>
    			';
    }

    else 
    {
    	header("Location: http://localhost/phpsandbox/eca/WebContent/s.html");
    } 
?>
<style>
    .disp_services{
           text-align: center;
    }
    

   a{
    color: #e8491d;
    text-decoration: none;
    text-transform: uppercase;
    font-size: 16px;
   }
        
        ul{
        display: inline-block;
        list-style-type:none;
       margin-top: 3%;
       margin-bottom: 3%;

    }

    li{
        margin: 20px;
        padding: 10px;
    }

    a:hover{
        color:#35424a;
    font-weight: bold;
    }
</style>
<?php include 'footer.php';
 ?>