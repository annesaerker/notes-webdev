<!DOCTYPE html>
<html>
    <head>
        <title>convert text into an object</title>
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