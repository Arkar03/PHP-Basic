<?php
function createFile($filename) {
    $h = fopen($filename,'w');
    fclose($h);
}

function writeFile($filename,$data) {
    $h = fopen($filename, 'w');
    fwrite($h,$data);
    fclose($h);
}
function appendFile($filename,$data)
{
    $h = fopen($filename,'a');
    fwrite($h,$data);
    fclose($h);
}

function readMyFile($filename)
{
    $h = fopen($filename, mode:'r');
    $size = filesize($filename);
    $data = fread($h,$size );
    fclose($h);
    return $data;
    
}
writeFile('hey.txt',"I am good.");
appendFile('hey.txt', ' You are bad.');
echo readMyFile('hey.txt');