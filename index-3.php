<!DOCTYPE html>
<html>
<head>
	<title>loop, if, $_GET, array_search, variable in address bar</title>
</head>
<body>

<?php

	$aProducts = [ 1,'A',2,'B' ];

	for( $i = 0; $i < count( $aProducts ) ; $i+=2 ){
		$iId = $aProducts[$i];
		$sName = $aProducts[$i+1];
		echo "<div>ID: $iId NAME: <a href='product.php?id=$iId'>$sName</a></div>";
	}
?>


<!-- http://localhost/WD-2017-F-WEB-DEV/product.php?id=1 -->



</body>
</html>



