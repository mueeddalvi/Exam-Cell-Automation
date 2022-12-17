<?php
	
	require('../config/db.php');

	$query = 'select * from data';

	$result = mysqli_query($conn,$query);

	$data=mysqli_fetch_all($result,MYSQLI_ASSOC);

		//var_dump($data);

	mysqli_free_result($result);

	mysqli_close($conn);

?>

<!DOCTYPE html>
<html>
	<head>
		<title>Output First</title>
		<link rel="stylesheet" type="text/css" href="https://bootswatch.com/4/cerulean/bootstrap.min.css">
	</head>
	<body>
		<h1>Data</h1>
		<?php foreach ($data as $data):?> 
			<div class="well">
				<h3>id: <?php echo $data['id'];?></h3>
				<h3>Name: <?php echo $data['name'];?></h3>
				<h3>Number: <?php echo $data['number']?></h3>
			</div>
		<?php endforeach; ?>
		
	</body>
	</body>
</html>