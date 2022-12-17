<?php 
session_start();
if(!isset($_SESSION['username']))
    {
        header("Location: http://localhost/phpsandbox/eca/WebContent/php/loginFirst.php");
    }
include 'header.php';
$servername = "www.remotemysql.com:3306";
$username = "0xCWbnBOpR";
$password = "jOW2ygCCXS";
$db = "0xCWbnBOpR";

 

$conn1 = new mysqli($servername, $username, $password,$db);
$query = "SELECT * FROM Temp LIMIT 1";
$result=$conn1->query($query);
$entrybook=$result->fetch_object();


include 'config.php';
include 'db.php';

 
    if(isset($_SESSION['username']))
    {
        $username=$_SESSION['username'] ;
        $query="select * from student_data where email='$username'";
        $result = $conn->query($query);
        $row = $result->fetch_assoc();
        $year=$row["year"];
        $sem=$row["semester"];
        $branch=$row["branch"];
    }

    $query=" select * from subject_data where year='$year' and semester='$sem' and branch='$branch' ";

    if(!isset($row["branch"]))
        {
            echo "<script >
    $(document).ready(function () {
        // body...
        $(document).on
        Swal.fire({
                    icon: 'info',
                    title: 'You must fill the exam form first!!',
                    text: 'You are being redirected!',
                    button: 'Ok',
                    }).then(function(){
                        window.location.replace('http://localhost/phpsandbox/eca/WebContent/php/examForm.php'); 
                    });
    });
 </script>";
 exit();
 }
     



     $query="select * from subject_data where branch='$branch' and year='$year' and semester='$sem'";
     $result = $conn1->query($query);
     $sub=array();
   
    while ( $res = $result->fetch_assoc()) {
        # code...
        array_push($sub, $res);


    }
   
   echo sizeof($sub);
    if(sizeof($sub)<5)
    {

            echo "<script >
    $(document).ready(function () {
        // body...
        $(document).on
        Swal.fire({
                    icon: 'info',
                    title: 'Time table is being processed!!',
                    text: 'You are being redirected!',
                    button: 'Ok',
                    }).then(function(){
                        window.location.replace('http://localhost/phpsandbox/eca/WebContent/home.php'); 
                    });
    });
 </script>";
exit();}

?>
<!-- <link rel="stylesheet" href="../css/styles.css"> -->
<script>
    document.title="Hall Ticket";
</script>
 <style>
        main{
            margin-top: 30px;
            border: 2px;
            border-radius: 0px;
            border-style: solid;
            border-color: rgb(160, 69, 69);
	        background-color: rgb(235, 235, 235);
	        width: 950px;
            height: 1200px;
            align-self: auto;
	        margin: auto;
	        font-size: 18px;
            text-align: center;
            background: url('img/watermark.png');
        }
     /*   .btn {
            text-align: center;
            border: 1px;
            border-style: solid;
            border-color: rgb(0, 0, 0);
            background-color: rgb(131, 131, 131);
            padding: 10px 20px;
            font-size: 16px;
            cursor: pointer;
            display: inline-block;
}
*/
/* On mouse-over */
        /*.btn:hover {background: rgb(209, 209, 209);}*/
        hr{
            border: 1.5px;
            border-style: solid;
            border-color: black;
        }
        td.one{
            width: 5cm;
            text-align: left;
            padding: 10px;
            border: 1px solid black; 
            border-collapse: collapse;
            align-self: center;
        }
        td.two{
            width: 5cm;
            text-align: left;
            padding: 10px;
        }
        table.one, tr.one{
            padding: 10px;
            border: 1px solid black; 
            border-collapse: collapse;
            align-self: center;
        }
    </style>
    <form style="align-self: auto;text-align: center; padding-top: 10px;">
            <button class="btn" onclick="return window.print(document.getElementById('hallt').innerHTML)">Print</button>
        </form>
        <br>
 <main id="hallt">
          <br>
         <b> University of XYZ </b>
         <br>
         <img src="../img/uniLogo.png" alt="University logo" height="100" width="100" >
         <br>
         <b> Hall ticket for T.E.(2020) (Computer Science) Oct/Nov 2020</b>
         <br>
         <br>
         <hr>
         <section style="padding-left: 1.3cm;">
            <table class="one" >
                <tr class="one">
                    <td class="one"> 
                        Seat No: &nbsp; &nbsp;
                    </td class="one">
                    <td class="one">
                        PRN:
                    </td class="one">
                    <td class="one">
                        Centre Code:
                    </td class="one">
                    <td class="one">
                        College Code:
                    </td class="one">
                </tr class="one">
                <tr class="one">
                    <td class="one">
                   <?php echo $row["prnNo"]; ?>
                    </td class="one">
                    <td class="one">
                    <?php echo $row["prnNo"]; ?>
                    </td class="one">
                    <td class="one">
                    <?php echo $row["centre_code"]; ?>
                    </td class="one">
                    <td class="one">
                    <?php echo $row["college_code"]; ?>
                    </td class="one">
                </tr class="one">
            </table>
         </section>
         <section style="float: left; padding-left: 0.9cm;">
            <br>
            <table>
                <tr>
                   <td class="two">
                       <b>Name: </b>
                   </td>
                   <td class="two">
                   <?php echo $row["fname"] ." ". $row["lname"]; ?>
                   </td class="two">
                </tr>
                <tr>
                    <td class="two">
                        <b>Mother's Name: </b>
                    </td class="two">
                    <td class="two">
                    <?php echo $row["mname"]; ?>
                    </td class="two">
                </tr>
                <tr>
                    <td class="two">
                        <b>Centre: </b>
                    </td class="two">
                    <td class="two">
                    <?php echo $row["centre_code"]; ?>
                    </td class="two">
                </tr>
                 <tr>
                    <td class="two">
                        <b>Branch: </b>
                    </td class="two">
                    <td class="two">
                    <?php echo $row["branch"]; ?>
                    </td class="two">
                </tr>
                 <tr>
                     <tr>
                    <td class="two">
                        <b>Year: </b>
                    </td class="two">
                    <td class="two">
                    <?php echo $row["year"]; ?>
                    </td class="two">
                </tr>
                    <td class="two">
                        <b>Semester: </b>
                    </td class="two">
                    <td class="two">
                    <?php echo $row["semester"]; ?>
                    </td class="two">
                </tr>
            </table>
        </section>
        <section style="float:right; padding-right: 1.5cm;">
            <br>
       <!--  <img style="border: black solid;" src="../img/uniLogo.png" width="150" height="150"> -->
     </section>
     <section style="float: left;padding-left: 1.7cm;">
         <br>
         <br>
         <br>
         <table class="one">
             <tr class="one">
                 <td class="one" style="width: max-content;">
                     Subject Code:
                 </td>
                 <td class="one" style="width: 10cm">
                     Subject name:
                 </td>
                 <td class="one" style="width: max-content;">
                     Type:
                 </td>
                 <td class="one" style="width: max-content;">
                     Exam date:
                 </td>
             </tr>
             <tr class="one">
                <td class="one" style="width: max-content;">
                    <?php  print($sub[0]["subject_code"]); ?>
                </td>
                <td class="one" style="width: max-content;">
                   <?php  print($sub[0]["subject_name"]); ?>
                </td>
                <td class="one" style="width: max-content;">
                    {Theory,Practical}
                </td>
                <td class="one" style="width: max-content;">
                    <?php  print($sub[0]["date_time"]); ?>
                </td>
             </tr>


             
              <tr class="one">
                <td class="one" style="width: max-content;">
                    <?php  print($sub[1]["subject_code"]); ?>
                </td>
                <td class="one" style="width: max-content;">
                   <?php  print($sub[1]["subject_name"]); ?>
                </td>
                <td class="one" style="width: max-content;">
                    {Theory,Practical}
                </td>
                <td class="one" style="width: max-content;">
                    <?php  print($sub[1]["date_time"]); ?>
                </td>
             </tr>

            <tr class="one">
                <td class="one" style="width: max-content;">
                    <?php  print($sub[2]["subject_code"]); ?>
                </td>
                <td class="one" style="width: max-content;">
                   <?php  print($sub[2]["subject_name"]); ?>
                </td>
                <td class="one" style="width: max-content;">
                    {Theory,Practical}
                </td>
                <td class="one" style="width: max-content;">
                    <?php  print($sub[2]["date_time"]); ?>
                </td>
             </tr>

              <tr class="one">
                <td class="one" style="width: max-content;">
                    <?php  print($sub[3]["subject_code"]); ?>
                </td>
                <td class="one" style="width: max-content;">
                   <?php  print($sub[3]["subject_name"]); ?>
                </td>
                <td class="one" style="width: max-content;">
                    {Theory,Practical}
                </td>
                <td class="one" style="width: max-content;">
                    <?php  print($sub[3]["date_time"]); ?>
                </td>
             </tr>

              <tr class="one">
                <td class="one" style="width: max-content;">
                    <?php  print($sub[4]["subject_code"]); ?>
                </td>
                <td class="one" style="width: max-content;">
                   <?php  print($sub[4]["subject_name"]); ?>
                </td>
                <td class="one" style="width: max-content;">
                    {Theory,Practical}
                </td>
                <td class="one" style="width: max-content;">
                    <?php  print($sub[4]["date_time"]); ?>
                </td>
             </tr>
         </table>
        </section>
        <section style="float: left; padding-left: 0.2cm;padding-top: 1cm;">
           <!--  <b>Note: Lorem ipsum dolor sit amet, consectetur adipiscing elit. 
                Cras purus augue, dapibus quis hendrerit vitae, scelerisque at ex. Vestibulum vel eros ultrices, 
                volutpat nibh a, iaculis nibh. Sed ullamcorper viverra suscipit. Nullam sed mi nisi. Aenean dui 
                lorem, efficitur sed vehicula at, porttitor vel erat. Maecenas lacus.</b> -->
        </section>
    </main>

<?php
include 'footer.php';
?>