<?php

$file = "mine.txt";
$handler = fopen($file,mode:'w');
fwrite($handler,"Hello World");
fclose($handler);