<!DOCTYPE html>
<html>
<head>
	<title>passing multiple variables to a page. ? and & & & & &</title>
</head>
<body>

	<div>
		<!-- 
		pass a variable to page A 
		? means that variables will come
		& appears in every other variable after the first one
		-->
		<a href="a.php?n=A&ln=B">TAKE ME TO A</a>
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



