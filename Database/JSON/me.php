<?php

$file = "me.json";
$handler = fopen($file,'r');
$json = fread($handler,filesize($file));

$arys = json_decode($json);

foreach($arys as $key=>$vals) {
    foreach($vals as $val) {
        echo "Key is => $key and Value is => $val" . "<br>";
    }
}   