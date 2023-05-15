<?php

$file = "mine.txt";

try {
    if(file_exists($file)) {
        echo "We got File";
    }else {
        throw new Exception("file not found");
    }
}catch(Exception $e) {
    die($e->getMessage());
}