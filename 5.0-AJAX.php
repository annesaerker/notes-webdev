<!DOCTYPE html>
<html>
    <head>
        <title>AJAX</title>
    </head>
    <body>

        <?php

            var ajax = new XMLHttpRequest();
            ajax.onreadystatechange = function() {
                if (this.readyState == 4 && this.status == 200) {
                    var sDataFromServer = this.responseText;
                }
            }
            ajax.open( "METHOD HERE", "URL HERE", true );
            ajax.send();
        ?>
    
    </body>
</html>