<?php

include_once('../functions/functions.php');
$dbConnect = dbLink();
if($dbConnect) {
    echo '<!--Connection Established-->';
}

error_reporting(0);

echo '<a href="../index.php">Return</a>';

//Post Memory
$name = $_POST['Name'];
$databaseCollection = 'marvel.users';
$result = insertUser($dbConnect, $name, $databaseCollection);
if ($result){
    echo '<br>Record Added';
}

showMem();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body onload="bounce()">
<script>
    function bounce(){
        window.location.href = "../index.php";
    }
</script>
</body>
</html>
