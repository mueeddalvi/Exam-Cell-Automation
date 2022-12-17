<?php
session_start();

?>

<!DOCTYPE html>
<html>
<head>
	<title>first page</title>
</head>
<body>
<a href="second.php">
	To second
</a>
</body>
</html>

<?php
session_destroy();
session_unset();
?>