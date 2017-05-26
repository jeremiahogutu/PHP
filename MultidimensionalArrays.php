<!DOCTYPE html>
<html>
<head>
	<title>Multidimensional Arrays</title>
</head>
<body>
<?php
$people = array(
'online'=>array('David', 'Amy'),
'offline'=>array('John','Rob','Jack'),
'away'=>array('Arthur','Daniel')
	);
echo $people['online'][0];
echo "</br>";
echo $people['away'][1];
?>
</body>
</html>