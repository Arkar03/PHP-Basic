<?php
require_once "DB_Hacker.php";
function registerUser($username, $email, $password)
{
    // print_r(usernameCheck($username));
    // print_r(emailCheck($email));
    // print_r(passwordCheck($password));
    
    if(usernameCheck($username) && emailCheck($email) && passwordCheck($password)) {
        return insertUser($username,$email,$password);
    }else {
        return "Fail";
    }
}

function loginUser($email, $password)
{
    if(emailCheck($email) && passwordCheck($password)) {
       return userLogin($email,$password);
    }else {
        return 'Auth Fail';
    }
    
}
function usernameCheck($username)
{
    if ($username) {
        // $bol = preg_match('/^[\w]+$/', $username);
        return $username;
    } else {
        return false;
    }
}

function emailCheck($email)
{
    if ($email) {
        // $bol = preg_match('/^[a-zA-Z0-9]+@[a-z]+\.[a-z]{2,4}+$/', $email);
        return $email;
    } else {
        return false;
    }
}
function passwordCheck($password)
{
    if (strlen($password) >= 6) {
        // $bol = preg_match(
        //     '/^(?=.*[a-z])(?=.*[A-Z])(?=.&\d)(?=.*(_|[^\w])).+$/',
        //     $password
        // );
        return $password;
    } else {
        return false;
    }
}

// $bol = passwordCheck('abcdefgAGDSA1@#');
// echo $bol ? 'True' : 'False';
