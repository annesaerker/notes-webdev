<!DOCTYPE html>
<html>
<head>
	<title>file and PHP - file_get_contents()</title>
</head>
<body>

	<?php
	// Open the file 
	$sData = file_get_contents( 'data.txt' );
	// Get the data and convert it to an object
	$aData = json_decode( $sData );
	// Show the letter
	echo $aData[0];
	?>




</body>
</html>



