<!DOCTYPE html>
<html>
<head>
	<title>Default Arguments</title>
</head>
<body>
<?php
function setCounter($num=10){
echo "Counter is ".$num."</br>";
}
setCounter(42); //counter is 42
setCounter(); //counter is 10
?>
</body>
</html>