<!DOCTYPE html>
<html>
    <head>
        <title>PHP basics   </title>
    </head>
    <body>

        <!-- 1. HTML and PHP mixed -->
        <div style='color: blue;'>
            <?php
                $sLetter = 'A';
                echo $sLetter;
            ?>
        </div>

        <?php

            // 2. ARRAYS
            // Create empty array
            
            // Create array with 2 items
            
            // Read first item in array
            
            // Read everything in array
            
            // Update item in array
            
            // Delete item in array
            
            // Delete everything in array
            
            // CONNECT TO THE DATABASE AND GET DATA
            // WE DONT HAVE A DATABASE, SO WE FAKE IT
            // VARIABLES IN PHP START WITH A $
            $aItems = ["A","B"];
            // $aItems = array();
            // echo $aItems[1];
            // How about the length of the array
            // echo sizeof( $aItems );
            // push to letter C to the array
            array_push( $aItems , "C" );
            // echo $aItems[2];
            // A B C
            // How do you delete an element from the array?
            // echo count( $aItems );
            // unset( $aItems[1] );
            array_splice( $aItems , 1 , 1);
            // echo count( $aItems );
            echo $aItems[1];
            // how to show the content of an object in the screen
            var_dump( $aItems );
            print_r( $aItems );

        ?>

           

        ?>
    </body>
</html>