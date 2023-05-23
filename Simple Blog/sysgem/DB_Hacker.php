<?php

define('DB_HOST', 'localhost');
define('DB_NAME', 'simple_blog');
define('DB_USER', 'root');
define('DB_PASS', '');

function dbConnect()
{
    $db = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
    if (mysqli_connect_errno()) {
        echo 'Database Connection Fail!';
    } else {
        return $db;
    }
}

function getTimeNow()
{
    return date('Y-m-d H:m:s', time());
}

function encodePass($password)
{
    $password = md5($password);
    $password = sha1($password);
    $password = crypt($password, $password);
    return $password;
}

function insertUser($name, $email, $password)
{
    $ePass = encodePass($password);
    $curTime = getTimeNow();

    $db = dbConnect();

    $qry = "SELECT * FROM member WHERE email = '$email'";
    $result = mysqli_query($db, $qry);
    if (mysqli_num_rows($result) > 0) {
        return "Email is already in used";
    } else {
        $qry = "INSERT INTO member(name,email,password,created_at,updated_at) VALUES ('$name','$email','$ePass','$curTime','$curTime') ";

        $result = mysqli_query($db, $qry);

        return $result ? 'Register Success' : 'Register Fails!';
    }
}

function userLogin($email,$password)
{
    $password = encodePass($password);
    $db = dbConnect();
    $qry = "SELECT name FROM member WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($db,$qry);
    if($result) {
        $username = "";
        foreach($result as $str) {
            $username = $str['name'];
        }
        setSession('username',$username);
        setSession('email',$email);
        return "Login Success";
    }else {
        return "Login Fail!";
    }
}
// echo insertUser('Arkar', 'min@gmail.com', '123123');
