<!DOCTYPE html>
<html>
<head>
	<title>Return</title>
</head>
<body>
<?php
function mult($num1,$num2){
	$res = $num1*$num2;
	return $res;
}
echo mult(8,3);
//Outputs 24
?>
</body>
</html>