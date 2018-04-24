<!DOCTYPE html>
<html>
<head>
	<title>Pass a variable between pages</title>
</head>
<body>

	<div>
		<!-- pass a variable to page A -->
		<a href="a.php?letter=X">TAKE ME TO A</a>
	</div>

<?php

	$aProducts = [ 1,'A',2,'B' ];

	for( $i = 0; $i < count( $aProducts ) ; $i+=2 ){
		$iId = $aProducts[$i];
		$sName = $aProducts[$i+1];
		echo "<div>ID: $iId NAME: <a href='$sName.php'>$sName</a></div>";
	}
?>




</body>
</html>



