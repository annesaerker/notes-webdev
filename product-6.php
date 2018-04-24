<!DOCTYPE html>
<html>
<head>
	<title>PRODUCT</title>
</head>
<body>
	
	<?php
		$sProductId = $_GET['id']; 
		// echo 'THE PRODUCT ID IS: '. $sProductId;
		$sProducts = file_get_contents( 'data.txt' );
		$aProducts = json_decode( $sProducts );
		$iIndexOfMatch = array_search( $sProductId , $aProducts );
		// echo $iIndexOfMatch;
		$sProductName = $aProducts[$iIndexOfMatch+1];
		$sProductImageLink = $aProducts[$iIndexOfMatch+2];
		echo "<div><img src='$sProductImageLink'>ID: $sProductId, NAME: $sProductName</div>";


	?>

</body>
</html>