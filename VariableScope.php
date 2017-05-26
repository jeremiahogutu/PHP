<!DOCTYPE html>
<html>
<head>
	<title>Variable Scope</title>
</head>
<body>
<?php
$name = 'David';
function getName(){
	global $name;
	echo $name;
}
getName();
//outputs David
?>
</body>
</html>