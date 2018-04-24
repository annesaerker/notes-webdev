<?php
	// open the file
	$sData = file_get_contents('data.txt');
	// convert the text to an object / array
	$aData = json_decode( $sData );
	// push the letter to the array
	$aData[] = $_GET['letter'];
	$sData = json_encode( $aData );
	// Save the text to the file
	file_put_contents( 'data.txt' , $sData );
	echo 'WELCOME' . $sData;
	// var_dump( $aData );
	// echo $_GET['letter'];
?>