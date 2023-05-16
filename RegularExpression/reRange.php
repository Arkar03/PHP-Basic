<?php 

$var = "Brighter Myanmar.org";

$bol = preg_match('/[1-9]/',$var);

echo $bol ? 'TRUE' : 'FALSE';