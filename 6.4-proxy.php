<!DOCTYPE html>
<html>
    <head>
        <title>Proxy</title>
    </head>
    <body>

    <?php
// PROXY
// Good for CROSS DOMAIN
$sWebsite = file_get_contents( "http://kea.dk" );
$sWebsite = str_replace( "Om KEA" , "TEST", $sWebsite );
echo $sWebsite;

?>
    
    </body>
</html>
