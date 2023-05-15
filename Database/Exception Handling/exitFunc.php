<?php

$file = "mine.txt";

if(file_exists($file))
    echo "File Exit";
else 
    exit("File not Exited");
    // echo "file not exited";

$handler = fopen($file,"r");
