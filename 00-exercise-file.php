<?php



$sjUsers[0]->name = "Anne";
$ajUsers = json_encode($sjUsers);
file_put_contents('data.txt', $ajUsers);
echo $ajUsers;

// Read from JSON object (4.5) 

$ajUsers = file_get_contents('data.txt');
$sajUsers = json_decode($ajUsers);
print_r($sajUsers[1]->name);

// Update JSON object (4.5)

for( $i = 0; $i <= count($sajUsers); $i++){
    if($sajUsers[$i]->name == "Anne"){
        echo "HELLO";
        $sajUsers[$i]->lastName = "Saerker";
    }
}

$ajUsers = json_encode($sajUsers);
file_put_contents('data.txt', $ajUsers); 

// Delete from JSON object (4.5) 

$ajUsers = file_get_contents('data.txt');
$sajUsers = json_decode($ajUsers);
var_dump($sajUsers);

for( $i = 0; $i <= count($sajUsers); $i++){
    if( $sajUsers[$i]->lastName == "Saerker"){
        echo "delete user";
        array_splice($sajUsers, $i, 1);
    }
}

$sajDeleted = json_encode($sajUsers);
file_put_contents('data.txt', $sajDeleted);


?>

<!DOCTYPE html>
<html>
<head>
    <title> Empty exercise file</title>
    <style></style>
</head>
<body>




    
<script>



</script>
</body>
</html>