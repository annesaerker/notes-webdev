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


            // 1. Change the X that you see in the screen with the name of the product from the array
            $aProducts = ['A','B','C'];
            for( $i = 0; $i < count($aProducts); $i++ ){
                // $sDivProduct = '<div>PRODUCT NAME : '.$aProducts[$i].'</div>';
                $sDivProduct = "<div>PRODUCT NAME : $aProducts[$i]</div>";
                echo $sDivProduct;
            }
        ?>

           

        ?>
    </body>
</html>