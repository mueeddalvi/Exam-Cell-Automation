<?php include 'header.php';
	include 'config.php';
	include 'db.php';

$servername = "www.remotemysql.com:3306";
$username = "0xCWbnBOpR";
$password = "jOW2ygCCXS";
$db = "0xCWbnBOpR";

$conn1 = new mysqli($servername, $username, $password,$db);
$query = "select distinct branch from subject_data;";
$result=$conn1->query($query);
$branch=array(); //storing all branch names
	
	while ($row = $result->fetch_assoc()) {
			array_push($branch, $row["branch"]);
	}

	// print_r($sub);
$year=array("FE","SE","TE","BE");
$i=0;
$j=0;
?>
<style>
	
	table{
    margin: auto;
    align-self: center;
    border: 2px solid white;
    border-collapse: collapse;
    width: 50%;
    height: 30vh;
    color: black;
    text-align: center;
}

th, td, tr{
    border: 2px solid black ;
}

th{
    background-color: #e8491d;;
}
</style>

<?php
foreach ($branch as $b) {
	foreach ($year as $y) {

		$sub=array();
		$query="select subject_code,date_time,subject_name from subject_data where branch='$b' and year='$y'";
		$result=$conn1->query($query);
		$c = mysqli_num_rows($result);
		
		if($c==5){
					echo '<h2 style="text-align:center;">'.$y." ".$b.'</h2>';
					echo'<table>
	<tr>
		<th>Subject Code</th>
		<th>Subject Name</th>
		<th>Date and time</th>
	</tr>';
			while ($row = $result->fetch_assoc()) {
			if(!empty($row))
			{
				array_push($sub,$row);
			}
				
			}
			
			if(!empty($sub))
			{
				echo'<tr><td>'.$sub[0]["subject_code"].'</td><td>'.$sub[0]["subject_name"].'</td><td>'.$sub[0]["date_time"].'</td></tr>';

				echo'<tr><td>'.$sub[1]["subject_code"].'</td><td>'.$sub[1]["subject_name"].'</td><td>'.$sub[1]["date_time"].'</td></tr>';

				echo'<tr><td>'.$sub[2]["subject_code"].'</td><td>'.$sub[2]["subject_name"].'</td><td>'.$sub[2]["date_time"].'</td></tr>';

				echo'<tr><td>'.$sub[3]["subject_code"].'</td><td>'.$sub[3]["subject_name"].'</td><td>'.$sub[3]["date_time"].'</td></tr>';

				echo'<tr><td>'.$sub[4]["subject_code"].'</td><td>'.$sub[4]["subject_name"].'</td><td>'.$sub[4]["date_time"].'</td></tr>';
				
			}
			echo "<br>";
		}

		echo '</table>';
		
	
	}
	# code...
}

	include 'footer.php';
	?>


