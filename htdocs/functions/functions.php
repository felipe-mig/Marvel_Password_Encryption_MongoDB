<?php
    //Connect to Mongo DB
function dbLink(){
    $host = 'localhost:';
    $port = 27080;
    $user = 'felipe';
    $pass = 'password';
    $connectionString='mongodb://'.$user.':'.$pass.'@'.$host.$port;
    // $connectionString='mongodb://'.$host.$port;
    try {
    $db = new MongoDB\Driver\Manager("$connectionString");
    } catch (exception $e){
        echo 'Error with the connection:<br>'.$e;
    }
    return $db;
}

//SHOW MEM
function showMem(){


}
function listUsers($dbConnect){
// displayComplexData function
# Paramenters to call the function that is displaying the data.
$filter =[];
$options = [];
# Be careful when typing the parameters because they are very case sensitive!.
displayComplexData($dbConnect,'marvel','users',$filter,$options);
}

// Read complex data from MongoDB
    // database: marvel
    // collection: users 
function displayComplexData($dbConnect,$database,$collection,$filter,$options){
    $count=0;
    $query = new MongoDB\Driver\Query($filter, $options); 
    $dbCollection = $database.'.'.$collection;   
    $cursor = $dbConnect->executeQuery($dbCollection, $query);
    $cursor->setTypeMap(['root' => 'array']); //Converts class to array
    echo '<table>';
    echo '<thead>';
    echo '<tr"><th>name</th><th>password</th></tr>';
    echo '</thead>';
    foreach ($cursor as $document) { 
        error_reporting(0);
    echo '<tr>
            <td>'.$document['Name'].'</td>
            <td>'.$document['Password'].'</td>';
    echo '</tr>';
        $count++;
    }
    echo '</table><br>';
    echo '<div class="countContainer">
    Users: '.$count;
    echo '</div><br><br>';
}

// Insert a user
function insertUser($dbConnect, $field, $databaseCollection){
    #Encryption
    $pwd = crypt($field, 'password');
    $bulkWrite = new MongoDB\Driver\BulkWrite(['ordered' => true]);
    $bulkWrite->insert(['Name' => $field, 'Password' => $pwd]);
    $result = $dbConnect->executeBulkWrite($databaseCollection, $bulkWrite);
}

?>