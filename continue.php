<!DOCTYPE html>
<html>
<head>
	<title>Continue Statement</title>
</head>
<body>
<?php
for ($i=0; $i < 10; $i++) { 
	if ($i%2==0) {
		# code...
		continue;
	}
	# code...
	echo $i.' ';
}
?>
</body>
</html>