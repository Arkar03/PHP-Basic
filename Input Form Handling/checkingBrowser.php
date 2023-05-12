<?php 

$var =  $_SERVER['HTTP_USER_AGENT'];

$ary = explode (" ", $var);

foreach ($ary as $str) {
    echo $str . "<br>";
}  