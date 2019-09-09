<!DOCTYPE html>
<html>
<head>
	<title>Exercise2</title>
</head>
<body>
	<?php 
	$d=date("D");
	if ($d=="Mon")
	  	echo "Happy Monday";
	elseif ($d=="Tue")
		echo "Happy Tuesday";
	elseif ($d=="´Wed")
		echo "Happy Wednesday";
	elseif ($d=="Thu")
		echo "Happy Thursday";
	elseif ($d=="Fri")
		echo "Happy Friday";
	elseif ($d=="Sat")
		echo "Happy Saturday";
	else 
		echo "Happy Sunday";
	?>

</body>
</html>