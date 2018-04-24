<!DOCTYPE html>
<html>
<head>
	<title>WEBSHOP</title>
</head>
<body>

<!-- open a page in a new tab -->
<div>
<a href="a.php" target="_blank">TAKE ME TO A</a>
<a href="b.php">TAKE ME TO B</a>
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



