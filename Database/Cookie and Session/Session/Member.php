<?php

include "Links.php";

session_start();

if (!isset($_SESSION['username'])) {
    header('Location:index.php');
}
?>

<h1>Member Page</h1>