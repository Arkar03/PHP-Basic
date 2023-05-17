<?php

date_default_timezone_set('Asia/Rangoon');
$ary = getdate();
echo  print_r($ary) ;
echo $ary['wday'];
echo "<hr>";
echo time();