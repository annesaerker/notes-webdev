<!DOCTYPE html>
<html>
<head>
	<title>display an image with the data that comes from a file. The data looks like an ARRAY but it is just text</title>
</head>
<body>

	<?php
	// Open the file 
	$sData = file_get_contents( 'data.txt' );
	// Get the data and convert it to an object
	$aData = json_decode( $sData );
	// Show the letter
	// echo $aData[0];

	for( $i = 0; $i < count($aData); $i+=3 ){
		$sProductId = $aData[$i];
		$sProductName = $aData[$i+1];
		$sProductImageLink = $aData[$i+2];
		// echo $sProductImageLink;

		$sDivProduct = "<div><a href='product.php?id=$sProductId'>$sProductName<img src='$sProductImageLink'></a></div>";
		echo $sDivProduct;
	}

	?>




</body>
</html>





