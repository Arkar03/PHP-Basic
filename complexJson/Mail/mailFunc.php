<?php
$to = 'waifer@localhost, arkar@localhost,';
$subject = 'PHP Mail Text';
$message = 'I am just testing';
$header = 'From: MMPHPTuto@gmail.com';

mail($to, $subject, $message, $header);