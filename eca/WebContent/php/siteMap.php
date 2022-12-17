<?php 
if(!isset($_SESSION)) 
    { 
        session_start(); 
    }
    include 'header.php';
    ?>
<script>
    document.title="Site Map";
</script>
    <div class="siteMap">
    	<a style="color:#e8491d;font:35px/1.5  Arial,Helvetica, sans-serif; margin:30px;">Site Map</a>
    	</div>


        <div class="map">
            
            <table class="serviceTable">
           <tr>
               <th>Students</th>
               <th>Admin</th>
           </tr>
           <tr>
             <?php if(!isset($_SESSION['username'])){
                echo '<td><a href="../s.html">Create profile</a></td>';
             }
             else {
                 echo '<td><a href="viewProfile.php">View profile</a></td>';
             } ?>
            
            <td><a href="../admin/adminTimeTable.php">Time Table Generation</a></td>
        </tr>
           <tr><td><a href="hTicket.php">Hall Ticket Generation</a></td></tr>
           <tr><td><a href="viewExamForm.php">View Exam Form</a></td></tr>
           <!-- <tr><td><a href="viewProfile.php">View Profile</a></td></tr> -->
        </table>


        </div>
        
    


    <style>

        th,td{
            margin: 20px;
            padding: 20px;
            text-align: left;

        }

        th{
             font:25px/1.5  Arial,Helvetica, sans-serif;
             font-weight: bold;
        }

        td{
            margin: 30px;
            font:18px/1.5  Arial,Helvetica, sans-serif;
        }
    	.siteMap{
    		margin:30px;
    		/*padding:1%;*/
    		width: 85%;
    		border-bottom: 1px solid black;
    	
    	}
        table{
            margin: 0 auto;
            padding: 30px;
        }
        a{
            text-decoration: none;
            color: #e8491d
        }
        a:hover{
            font-weight: bold;
        }
        .serviceTable{
            width: 50%;
            padding: 10px;
        }
        .map{
            width: 100%;
            text-align: center;
            display: inline-block;
            margin: 30px;
        }
    </style>


<?php include 'footer.php'; ?>