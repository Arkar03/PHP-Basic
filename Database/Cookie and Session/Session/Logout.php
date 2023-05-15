<?php
session_start();

include "Links.php";

if(!isset($_SESSION['username'])) {
    header('Location:index.php');
}else {
    session_destroy();
    header('Location:index.php');
}


?>

<h1>Logout</h1>



