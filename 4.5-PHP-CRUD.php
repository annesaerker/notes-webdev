<!DOCTYPE html>
<html>
    <head>
        <title>tutorial for the CRUD in JSON with PHP</title>
    </head>
    <body>


        <?php
            // this is just text
            $sajProducts = '[{"name":"A"},{"name":"B"}]';
            // convert the text to an object
            $ajProducts = json_decode( $sajProducts );
            /* SOLUTION 1 /
            // {"name":"K"}
            /
            $sjProduct = '{"name":"K"}';
            $jProduct = json_decode( $sjProduct );
            array_push( $ajProducts , $jProduct );
            $sajProducts = json_encode( $ajProducts );
            echo $sajProducts;
            /
            / SOLUTION 2 /
            /
            $aProduct = ["name"=>"X"]; // Assosiative array
            array_push( $ajProducts , $aProduct );
            $sajProducts = json_encode( $ajProducts );
            echo $sajProducts;
            /
            // SOLUTION 3
            // DOES NOT WORK
            /
            $ajProducts["name"] = "X";
            $sajProducts = json_encode( $ajProducts );
            echo $sajProducts;
            */

            //SOLUTION 4
            $ajProducts[]->name = "K";
            $sajProducts = json_encode( $ajProducts );
            echo $sajProducts;

            // echo $ajProducts[0]->name;
            // Edit A to X
            // $ajProducts[0]->name = "X";
            // Delete the first element in the array {"name":"A"}
            // array_splice( $ajProducts , 0 , 1 );
            // echo $ajProducts[0]->name;
            // var_dump( $ajProducts );
            // echo "LENGTH IS: " . count($ajProducts);
            // Create a new key-value
            // The key is name and the value is K

            // var_dump( $ajProducts );
            // echo "LENGTH IS: " . count($ajProducts);


            // 2. 

            // CREATE A ARRAY WITH 1 JSON OBJECT
            // IN IT. THE OBJECT HAS A KEY NAME
            // WITH VALUE X
            // SHOW THE ARRAY AS TEXT IN THE SCREEN
            // [{"NAME":"X"}]

            // CONVERT THE STRING TO AN OBJECT ARRAY
            // JSON_DECODE

            // ADD A NEW JSON OBJECT TO THE ARRAY
            // THE KEY IS NAME THE VALUE IS A
            // [{"NAME":"X"},{"NAME":"A"}]

            // UPDATE A TO B
            // [{"NAME":"X"},{"NAME":"B"}]

            // DELETE THE SECOND OBJECT
            // ARRAY_SPLICE( ARRAY , INDEX, ELEMENT TO DELETE)
            // [{"NAME":"X"}]

            // SHOW THIS IN THE SCREEN:
            // MY NAME IS X
        ?>

    </body>
</html>