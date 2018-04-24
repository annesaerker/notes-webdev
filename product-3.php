<!DOCTYPE html>
<html>
<head>
	<title>PRODUCT</title>
</head>
<body>
	
	<!-- <div>ID: 2 , NAME: B</div> -->
	<!-- 
	PRETEND WE GET THE DATA FROM THE DATABASE 
	THIS PAGE GETS AN ID IN THE ADDRESS BAR, SO LETS USE IT
	-->
	<?php
		$sProductId = $_GET['id']; // 2
		// echo 'THE PRODUCT ID IS: '. $sProductId;
		$aProducts = [ 1,'A',2,'B' ];
		$iIndexOfMatch = array_search( $sProductId , $aProducts );
		// echo $iIndexOfMatch;
		$sProductName = $aProducts[$iIndexOfMatch+1];
		echo "<div>ID: $sProductId, NAME: $sProductName</div>";

		/*
		for( $i = 0; $i < count( $aProducts ); $i++ ){
			if( $sProductId == $aProducts[$i] ){
				$sProdructName = $aProducts[$i+1];
				echo "<div>ID: $sProductId, NAME: $sProdructName</div>";
			}
		}
		*/


		/*
		WHEN A IS CLICKED ON THE MAIN PAGE SHOW THIS:
		<div>ID: 1 , NAME: A</div>
		WHEN b IS CLICKED ON THE MAIN PAGE SHOW THIS:
		<div>ID: 2 , NAME: B</div>		
		*/
	?>

</body>
</html>