<?php 

$data = simplexml_load_file("data.xml");

// print_r($data);

foreach($data as $key => $val) {
    echo "$key => $val <br>";
}