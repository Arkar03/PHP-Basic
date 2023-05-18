<?php

define('DB_HOST','localhost');
define('DB_NAME','simple_blog');
define('DB_USER','root');
define('DB_PASS','');

function dbConnect()
{
    $db = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
    if(mysqli_connect_errno()) {
        echo 'Database Connection Fail!';
    } else {
        return $db;
    }
}

function getTimeNow()
{
    return date('Y-m-d H:m:s',time());
}

function encodePass($password)
{
    $password = md5($password);
    $password = sha1($password);
    $password = crypt($password,$password);
    return $password;
}

function insertUser($name, $email, $password)
{
    $ePass = encodePass($password);
    $curTime = getTimeNow();

    $db = dbConnect();

    $qry = "INSERT INTO `member`( `name`, `email`, `password`, `created_at`, `updated_at`) VALUES ('$name,$email,$ePass,$curTime,$curTime')";

    $result = mysqli_query($db, $qry);
    
    echo $result ? 'true' : 'false';
}

    