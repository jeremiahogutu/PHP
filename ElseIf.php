<!DOCTYPE html>
<html>
<head>
	<title>Else If</title>
</head>
<body>
<?php
$age = 15;

if ($age<=13) {
	# code...
	echo "child";
} elseif($age>13 && $age<19) {
	# code...
	echo "Teenager";
}else {
	echo "Adult";
}

?>
</body>
</html>