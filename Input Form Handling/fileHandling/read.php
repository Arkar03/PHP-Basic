<?php

$file = "test.txt";
$handler = fopen($file,mode:'r');
$size = filesize($file);
$data = fread($handler, $size);
echo $data;