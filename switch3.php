<!DOCTYPE html>
<html>
<head>
	<title>Switch 3</title>
</head>
<body>
<?php
$day = 'Sat';

switch ($day) {
	case 'Mon':
		# code...
	echo "First day of the week";
		break;
	case 'Tue':
	case 'Wed':
	case 'Thu':
		echo 'Working day';
		break;
	case 'Fri':
		# code...
	echo "Friday";
		break;
	default:
		# code...
	echo "Weekend";
}
?>

</body>
</html>