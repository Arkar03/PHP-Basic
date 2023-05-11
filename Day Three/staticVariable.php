<?php 

function myFunc()
{
    static $num = 0;
    $num++;
    echo $num;
}

myFunc();
echo "\n";
myFunc();
echo "\n";
myFunc();
echo "\n";
myFunc();
echo "\n";