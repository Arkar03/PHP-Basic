<?php

$file = "mine.txt";
$handler = fopen($file,mode:'a');
fwrite($handler,"Konnichiwa");
fclose($handler);