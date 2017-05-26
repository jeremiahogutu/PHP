<!DOCTYPE html>
<html>
<head>
	<title>Switch Statement</title>
</head>
<body>
<?php
$today = 'Mon';

switch ($today) {
	case 'Mon':
		# code...
	echo "Today is Monday";
		break;
	case 'Tue':
		# code...
	echo "Today is Tuesday";
		break;
	case 'Wed':
		# code...
	echo "Today is Wednesday";
		break;
	case 'Thu':
		# code...
	echo "Today is Thursday";
		break;
	case 'Fri':
		# code...
	echo "Today is Friday";
		break;
	case 'Sat':
		# code...
	echo "Today is Saturday";
		break;
	case 'Sun':
		# code...
	echo "Today is Sunday";
		break;
	default:
		# code...
	echo "Invalid day";
		break;
}
?>
</body>
</html>