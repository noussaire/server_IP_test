<?php
$ip = "agridata.hopto.org";
$ping = exec("ping -n 1 $ip",$output,$status);


echo  $status
?>
