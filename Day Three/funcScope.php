<?php
$var = 2;

function myFunc()
{
    // global $var;
    $var = 20;
    echo $var;
}
doIt();