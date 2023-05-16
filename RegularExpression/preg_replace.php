<?php 

$var = 'Arkar Min';

// $result = preg_replace('/[[:alpha:]]/','$',$var); 
//'/[[:digit:]]/''/[[:alnum:]]/''/[[:space :]]/'


$result = preg_match('/\s/',$var);

echo $result ? "True" : "False ";