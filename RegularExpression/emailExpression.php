<?php 

$var = "akm@gmail.com";

$result = preg_match('/^[a-zA-Z]+@[a-z]+\.[a-z]{3}+\.[a-z]{2}$/',$var);

echo $result ? "TRUE" : "FALSE";