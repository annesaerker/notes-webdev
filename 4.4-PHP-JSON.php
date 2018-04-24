<!DOCTYPE html>
<html>
    <head>
        <title>PHP and JSON</title>
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
// always open your JSON with ''
// always keys with ""
$sData = '{"name":"A"}';
echo $sData;
$jData = json_decode( $sData );
echo 'The name is: '.$jData->name;
?>

           

        ?>
    </body>
</html>