<?php

define('DB_HOST', 'localhost');
define('DB_NAME', 'php_test');
define('DB_USER', 'root');
define('DB_PASS', ''); 

function dbConnect()
{
    $db = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
    if(mysqli_connect_errno() > 0)
        die("Connection Fail!");
    else 
        return $db;
}
function executeQuery($qry)
{
    $db = dbConnect();
    $result =  mysqli_query($db,$qry);
    foreach($result as $item) {
          echo "Id is " . $item["id"] . "<br> ";
          echo "Name is " . $item["name"] . "<br> <hr>";
        //   errDebugger($item); 
    }
}
function errDebugger($data)
{
    echo "<pre>" . print_r($data,true). "</pre>";
}

$qry = "SELECT * FROM users";
executeQuery($qry);